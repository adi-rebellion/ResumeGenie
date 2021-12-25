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




class HomeController extends Controller
{
    public function getAuthOrganization(Request $request)
    {
        $orgs_asso_auth_ids = OrgToUser::where('user_id',auth()->user()->id)->pluck('org_id');
        $orgs_details = array();
        foreach ($orgs_asso_auth_ids as $orgs_asso_auth_id)
        {
            $orgs_asso_auth_details = Organization::where('id',$orgs_asso_auth_id)->first()->toArray();
            array_push($orgs_details,$orgs_asso_auth_details);
        }


        return $orgs_details;
    }

    public function getAuthOwnedOrg(Request $request)
    {
        $orgs_asso_auth_ids = OrgToUser::where([
            ['user_id','=',auth()->user()->id],
            ['role','=','owner'],
            ['role','=','mgmt']
        ])->pluck('org_id');
        $orgs_details = array();
        // foreach ($orgs_asso_auth_ids as $orgs_asso_auth_id)
        // {
        //     $orgs_asso_auth_details = Organization::where('id',$orgs_asso_auth_id)->first()->toArray();
        //     array_push($orgs_details,$orgs_asso_auth_details);
        // }


        return $orgs_details;
    }
}
