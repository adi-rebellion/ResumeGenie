<?php

namespace App\Http\Controllers;

use App\ClaimOrgLedger;
use App\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Intervention\Image\ImageManagerStatic as Image;
use App\Providers\GlobalServiceProvider;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ClaimOrganization;
use Response;
use App\Notifications\ClaimOrganizationIndependent;
use App\Notifications\InviteOrganizationMember;
use App\Event;
use App\ContactItem;
use App\Contact;
use App\InviteOrgMember;
use App\OrganizationClaimRegister;
use App\OrgToDomain;
use App\OrgToWebsite;
use App\OrgToUser;
use App\User;
use Auth;
use Carbon\Carbon;

class OrganizationController extends Controller
{
    public function pp_genertor(Request $request)
    {

        $img = Image::canvas(300, 200, '#f7b6bd');

                // draw a filled blue circle
                $img->text(substr($request->keyword, 0,1), 150, 60, function ($font)
                {
                    $font->file('/opt/lampp/htdocs/hearecho/backend/public/font/text.otf');
                    $font->size(120);
                    $font->color('#FFFF');
                    $font->align('center');
                    $font->valign('top');

                });

                return $img->response('jpg');
    }

    public function store_pp_org(Request $request)
    {
        $start = $request->start_by;
        $end = $request->end_by;
        $get_rows = Organization::whereBetween('id', [1, 100])->get();

        $GlobalService = new GlobalServiceProvider();


        // dd($get_rows);
        foreach($get_rows as $row)
        {
               $row->org_slug = $GlobalService->seo_friendly_url($row->name).'-'.$row->id;
               $row->logo = route('pp_genertor',['keyword' => $row->name]);
               $row->claim_code = sha1($row->name.Carbon::now());
               $row->save();

                   $GlobalService->createEventNew('General Channel','General Channel','Conversations between the management team and the general community',$row->id,'open');


                   $GlobalService->createEventNew('Employee Channel','Employee Channel','Conversations between the management team and organizations employees
                   ',$row->id,'domain');


                   $GlobalService->createEventNew('ShareHolder Channel','Shareholder Channel','Conversations between the management team and companies shareholders',$row->id,'list');


        }
        return 'done';
    }

    public function createOrganization(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'url' => ['required'],
            'type' => ['required']

        ]);

        $newOrg = new Organization;
        $GlobalService = new GlobalServiceProvider();
        $newOrg->name = $request->name;
        $newOrg->claim_code = sha1($request->name);

        $newOrg->org_slug = $request->name;

        $newOrg->logo = route('pp_genertor',['keyword' => $request->name]);
        $newOrg->org_type = $request->type;
        if($request->gen_board_active == 1)
        {
            $newOrg->gen_board_active = 'on';
        }
        if( $request->emp_board_active == 1)
        {
            $newOrg->emp_board_active = 'on';
        }
        if( $request->holder_board_active == 1)
        {
            $newOrg->holder_board_active = 'on';
        }
        // if( $request->emp_board_active == 1)
        // {
        //     $newOrg->emp_board_active = 'on';
        // }

        // $newOrg->emp_board_active  = $request->emp_board_active;
        // $newOrg->restrict_emp_domain = $request->restrict_emp_domain; holder_board_active
        $newOrg->save();
        $newOrg->org_slug = $GlobalService->seo_friendly_url($request->name).'-'.$newOrg->id;
        $newOrg->save();
        if($request->domain)
        {
            $org_domains = $request->domain;
            foreach($org_domains as $org_domain)
            {
                $domain_check = OrgToDomain::where('domain','LIKE',$org_domain)->first();
                if(!$domain_check)
                {
                    $orgToDomain = new OrgToDomain();
                $orgToDomain->org_id = $newOrg->id;
                $orgToDomain->domain = $org_domain;
                $orgToDomain->save();
                }

            }
        }
        if($request->url)
        {
            $org_urls = $request->url;
            foreach($org_urls as $org_url)
            {
                $url_check = OrgToWebsite::where('website','LIKE',$org_url)->first();
                if(!$url_check)
                {
                    $OrgToWebsite = new OrgToWebsite();
                    $OrgToWebsite->org_id = $newOrg->id;
                    $OrgToWebsite->website = $org_url;
                    $OrgToWebsite->save();
                }

            }
        }


        if($request->contact)
        {
            $org_contacts = $request->contact;
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->type = 'org';
            $contact->save();
            foreach($org_contacts as $org_contact)
            {
                $contact_exist = ContactItem::where('value', 'LIKE', $org_contact)->first();
                if(!$contact_exist)
                {
                    $contact_item = new ContactItem();
                    $contact_item->value = $org_contact;
                    $contact_item->belongs_to = $contact->id;
                    $contact_item->contact_item_type = 'email';
                    $contact_item->verification_status = 'not_required';
                    $contact_item->created_by = auth()->user()->id;
                    $contact_item->status = 'off';
                    $contact_item->save();
                }
                $ContactItemRow = ContactItem::where('id',$contact_item->id)->first();
                $OrgDetails = Organization::where('id', $newOrg->id)->first();
                Notification::route('mail', $org_contact)->notify(new ClaimOrganization($ContactItemRow,$OrgDetails));

            }
            $user = new User();
            $user->contact_id = $contact->id;
            $user->password = 'test';
            $user->save();
            //send claim email
            //then if accepted then need to chnage status in org table


        }

        if($request->gen_board_active == 1)
        {
            $GlobalService->createEventNew('General Channel','General Channel','Conversations between the management team and the general community',$newOrg->id,'open');
        }
        if( $request->emp_board_active == 1)
        {
            $GlobalService->createEventNew('Employee Channel','Employee Channel','Conversations between the management team and organizations employees
            ',$newOrg->id,'domain');
        }
        if( $request->holder_board_active == 1)
        {
            $GlobalService->createEventNew('ShareHolder Channel','Shareholder Channel','Conversations between the management team and companies shareholders',$newOrg->id,'list');
        }



        if($newOrg->save())
        {

            return  Response::json([
                'status' => 200,
                'message' => "Organization created succesfully"
            ], 200);
        }
        else
        {
            return  Response::json([
                'status' => 403,
                'message' => "Oops error creating an organization"
            ], 200);
        }

    }

    public function getAllOrganization(Request $request)
    {
       $orgs = Organization::paginate(10);
       return $orgs;
    }
    //where name like "%gozo%" or name like "%technologies%" or domain="gozo.cab"
    public function searchOrganization(Request $request)
    {
        $search_key = $request->search;
        $search_type = $request->search_type;
        $exploded_search = explode(" ",$search_key);
        if(count($exploded_search)> 5)
        {
            return 'count';
        }
        $searched_orgs = array();
        $merge_array = array();
        foreach($exploded_search as $search_val)
        {
            if($search_type == 1)
            {
                $orgs = Organization::where(
                    'name','like','%'. $search_val . '%'
                )->get()->toArray();

                $merge_array = array_merge($searched_orgs,$orgs);
            }
            elseif($search_type == 2)
            {
                $orgs = Organization::where(
                    'url','like','%'. $search_val . '%'
                )->get()->toArray();

                $merge_array = array_merge($searched_orgs,$orgs);
            }
            else
            {
                $orgs = Organization::where(
                    'name','like','%'. $search_val . '%'
                )
                ->orWhere('url','like','%'. $search_val . '%')
                ->get()->toArray();

                $merge_array = array_merge($searched_orgs,$orgs);
            }

        }
        return $merge_array;
    }

    public function getOrganizationDetails(Request $request)
    {
        $org_slug = $request->org_id;

        $org_details = Organization::where('org_slug',$org_slug)->first();
        return $org_details;
    }

    public function checkUrlExist(Request $request)
    {
        $org_urls = Organization::where('id','<>',null)->pluck('url');
        return $org_urls;

    }

    public function claimOrganization(Request $request)
    {
       if(!auth()->user())
       {
        return redirect(env('VUE_APP_URL').'/register');
       }
       else{

        $contact_item_id = base64_decode($request->contact_item);
        $claim_code = $request->claim_code;
        $Organization = Organization::where('claim_code',$claim_code)->first();
        $updateContact = ContactItem::where('id', $contact_item_id)->first();
        $updateContact->belongs_to =  auth()->user()->contact_id;
        $updateContact->save();
        $OrgToUser = OrgToUser::where([
            ['user_id','=',auth()->user()->id],
            ['org_id','=',$Organization->id]
        ])->first();
        if(!$OrgToUser)
        {
            $OrgClaim = new OrgToUser();
            $OrgClaim->org_id = $Organization->id;
            $OrgClaim->user_id = auth()->user()->id;
            $OrgClaim->role = 'owner';
            $OrgClaim->save();

            return 'Claimed';
        }

       }


    }

    public function checkDomainExist(Request $request)
    {
        $domain_value = $request->domain_value;
        $domain_exist = OrgToDomain::where('domain',$domain_value)->first();
        if($domain_exist)
        {
            return Response::json([
                'status' => 200,
                'command' => 'error',
                'message' => $request->domain_value."Domain already exists."
            ], 200);
        }
        else
        {
            return Response::json([
                'status' => 200,
                'command' => 'success',
                'message' => $request->domain_value."Domain can be used."
            ], 200);
        }
    }

    public function checkWebsiteExist(Request $request)
    {
        $website_value = $request->website_value;
        // $website_exist = Organization::where('url',$website_value)->first();
        $website_exist = OrgToWebsite::where('website','LIKE',$website_value)->first();

        if($website_exist)
        {
            return Response::json([
                'status' => 200,
                'command' => 'error',
                'message' => $request->website_value."Website already exists."
            ], 200);
        }
        else
        {
            return Response::json([
                'status' => 200,
                'command' => 'success',
                'message' => $request->website_value."Website can be used."
            ], 200);
        }
    }

    public function checkOrgToDomain(Request $request)
    {
        $claim_email_request = $request->claim_email;
        $org_slug = $request->org_id;
        $org_id = Organization::where('org_slug', $org_slug)->first();
        $claim_org_request =  $org_id->id;

        $email_allowed_counter = 0;
        $domain_check = explode("@", $claim_email_request);
        $access_org_domains = OrgToDomain::where('org_id', $claim_org_request)->get();
        foreach($access_org_domains as $access_org_domain)
        {
         if($access_org_domain->domain == $domain_check[1])
         {
             $email_allowed_counter = $email_allowed_counter +1;
         }
        }


        if($email_allowed_counter >= 1)
        {

         return Response::json([
             'status' => 200,
             'command' => 'success',
             'message' => "This is a valid email."

         ], 200);
        }
        else
        {
         return Response::json([
             'status' => 200,
             'command' => 'error',
             'message' => "This email cannot be used"
         ], 200);
        }
    }

    public function InviteOrgMember(Request $request)
    {
        $invite_emails = $request->invite_email;
        if($request->invite_role == 'emp')
        {
            $invite_register = new InviteOrgMember();
            $invite_register->invited_by_user = auth()->user()->id;
            $org_slug = $request->org_id;
            $org_id = Organization::where('org_slug', $org_slug)->first();
            $invite_register->invited_for_org =  $org_id->id;
            $invite_register->invited_email = $request->invite_email;
            $invite_register->invited_as = $request->invite_role;
            $invite_register->status = 'pending';
            $invite_register->save();
            // $Organization = Organization::where('id',$request->org_id)->first();
            $invite = InviteOrgMember::where('id',$invite_register->id)->first();
            Notification::route('mail', $request->invite_email)->notify(new InviteOrganizationMember($invite,$org_id));

        }
        else
        {
            foreach($invite_emails as $invite_email)
            {
                $invite_register = new InviteOrgMember();
                $invite_register->invited_by_user = auth()->user()->id;
                $org_slug = $request->org_id;
                $org_id = Organization::where('org_slug', $org_slug)->first();
                $invite_register->invited_for_org =  $org_id->id;
                $invite_register->invited_email = $invite_email;
                $invite_register->invited_as = $request->invite_role;
                $invite_register->status = 'pending';
                $invite_register->save();
                // $Organization = Organization::where('id',$request->org_id)->first();
                $invite = InviteOrgMember::where('id',$invite_register->id)->first();
                Notification::route('mail', $invite_email)->notify(new InviteOrganizationMember($invite,$org_id));

            }
        }

    }

    public function AcceptOrgInvite(Request $request)
    {
        if(!auth()->user())
        {
         return redirect(env('VUE_APP_URL').'/register');
        }
        else{
            $invite_id = $request->invite_id;
            $invite_row = InviteOrgMember::where('id',$invite_id)->first();

            $valid_invited_email = ContactItem::where('value',$invite_row->invited_email)->first();
            if($valid_invited_email)
            {
                if($valid_invited_email->belongs_to == auth()->user()->contact_id)
                {

                    $orgToUser = new OrgToUser();
                    $orgToUser->org_id = $invite_row->invited_for_org;
                    $orgToUser->user_id = auth()->user()->id;
                    $orgToUser->role = $invite_row->invited_as;
                    $orgToUser->save();
                    $invite_row->status = 'accepted';
                    $invite_row->save();

                    return 'Invite accepted';
                }




            }
            else
            {
                return 'Sorry error occured';
            }
        }
    }


    public function claimOrganizationIndependent(Request $request)
    {

       $claim_email_request = $request->claim_email;
       $org_slug = $request->org_id;
       $org_id = Organization::where('org_slug', $org_slug)->first();
       $claim_org_request = $org_id->id;

       $email_allowed_counter = 0;
       $domain_check = explode("@", $claim_email_request);
       $access_org_domains = OrgToDomain::where('org_id', $claim_org_request)->get();
       foreach($access_org_domains as $access_org_domain)
       {
        if($access_org_domain->domain == $domain_check[1])
        {
            $email_allowed_counter = $email_allowed_counter +1;
        }
       }


       if($email_allowed_counter >= 1)
       {
        $ContactItemRow = ContactItem::where('belongs_to',auth()->user()->id)->first();
        $org_slug = $request->org_id;
        // $org_id = Organization::where('org_slug', $org_slug)->first();
        $OrgDetails = Organization::where('org_slug', $org_slug)->first();

        $new_claim_ledger = new ClaimOrgLedger();
        $new_claim_ledger->contact_id= auth()->user()->contact_id;
        $new_claim_ledger->user_id=auth()->user()->id;
        $new_claim_ledger->org_id= $claim_org_request;
        $new_claim_ledger->value=$request->claim_email;
        $new_claim_ledger->save();
        Notification::route('mail', $request->claim_email)->notify(new ClaimOrganizationIndependent($new_claim_ledger,$OrgDetails));

        return Response::json([
            'status' => 200,
            'command' => 'success',
            'message' => "We have sent an verification email please verify."
        ], 200);
       }
       else
       {
        return Response::json([
            'status' => 200,
            'command' => 'error',
            'message' => "This email cannot be used"
        ], 200);
       }




    }

    public function claimOrganizationIndependentPost(Request $request)
    {
       if(!auth()->user())
       {
        return redirect(env('VUE_APP_URL').'/register');
       }
       else{

        $ledger_id = base64_decode($request->ledger_id);
        $claim_code = $request->claim_code;
        $Organization = Organization::where('claim_code',$claim_code)->first();
        $updateLedger = ClaimOrgLedger::where('id', $ledger_id)->first();
        $updateLedger->started =  'active';
        $updateLedger->save();
        $contact_exist = ContactItem::where('value', 'LIKE', $updateLedger->value)->first();
        if(!$contact_exist)
        {
        $contact_item = new ContactItem();
        $contact_item->value = $updateLedger->value;
        $contact_item->belongs_to = $updateLedger->contact_id;
        $contact_item->contact_item_type = 'email';
        $contact_item->verification_status = 'verified';
        $contact_item->verified_on = Carbon::now();
        $contact_item->created_by = $updateLedger->user_id;
        $contact_item->save();
        }

        $OrgClaim = new OrgToUser();
        $OrgClaim->org_id = $Organization->id;
        $OrgClaim->user_id = auth()->user()->id;
        $OrgClaim->role = 'owner';
        $OrgClaim->save();
        $Organization->claimed = 'on';
        $Organization->claimed_user_id = $updateLedger->user_id;;
        $Organization->save();

        return 'Claimed';
       }


    }

    public function checkAuthRoleToOrg(Request $request)
    {
        $org_slug = $request->org_id;
        $org_id = Organization::where('org_slug', $org_slug)->first();
        if(auth()->user())
        {
            $authrole = OrgToUser::where([
                ['org_id','=',$org_id->id],
                ['user_id','=',auth()->user()->id]
            ])->first();
            if($authrole)
            {
                return Response::json([
                    'status' => 200,
                    'command' => 'success',
                    'role' => $authrole->role
                ], 200);
            }
            else
            {
                return Response::json([
                    'status' => 200,
                    'command' => 'error',
                    'role' => 'gen'
                ], 200);
            }

        }
        else
            {
                return Response::json([
                    'status' => 200,
                    'command' => 'error',
                    'role' => 'gen'
                ], 200);
            }


    }

}
