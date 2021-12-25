<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Event;
use App\Organization;
use App\OrgToUser;
use App\Question;
use App\User;
use Illuminate\Http\Request;
use App\Providers\GlobalServiceProvider;
use PhpParser\Builder\Use_;
use Response;
class EventController extends Controller
{
    public function createEvent(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'url' => ['required'],

            'description' => ['required']

        ]);

        $newEvent = new Event();
        $newEvent->name = $request->name;
        $newEvent->url = $request->url;
        $GlobalService = new GlobalServiceProvider();
        $newEvent->event_slug = $GlobalService->seo_friendly_url($request->name);
        $newEvent->event_slug = $request->url;
        $newEvent->description = $request->description;
        $org_slug = $request->id;
        $org_id = Organization::where('org_slug', $org_slug)->first();
        $newEvent->org_event_id = $org_id->id;
        $newEvent->event_type = 'domain';
        $newEvent->status = 'on';
        $newEvent->save();

        if($newEvent->save())
        {

            return  Response::json([
                'status' => 200,
                'message' => "Event created succesfully"
            ], 200);
        }
        else
        {
            return  Response::json([
                'status' => 403,
                'message' => "Oops error creating an event"
            ], 200);
        }

    }

    public function getOrgEvents(Request $request)
    {
        $org_slug = $request->org_id;
        $org_id = Organization::where('org_slug', $org_slug)->first();
        $events_asso_org = Event::where('org_event_id',$org_id->id)->get();
        return $events_asso_org;
    }

    public function getEventQuestion(Request $request)
    {
        $event_id = $request->event_id;
        $event_asso_ques = Question::where('event_id',$event_id)->get();
        return $event_asso_ques;
    }

    public function getEventAndOrgDetails(Request $request)
    {
        $event_id = $request->event_id;
        $event = Event::where('id',$event_id)->first();

        $org = Organization::where('id',$event->org_event_id)->first();

        return [
            'Organization' => $org,
            'Event' => $event
        ];
    }

    public function getEventMembers(Request $request)
    {
        // $org = Organization::where('org_slug',$request->org_id)->first();
        // $mem_to_event = OrgToUser::where('org_id',$org->id)->pluck('user_id');
        // $user_to_contact = User::where('id',$mem_to_event)->first();
        // //$contact_name = Contact::where('id',$user_to_contact->contact_id)->first();


        // return $user_to_contact;

        $mem_to_events = OrgToUser::where('org_id',$request->org_id)->get();
        $mem_details = array();
        foreach($mem_to_events as $mem)
        {
            $user_to_contact = User::where('id',$mem->user_id)->first();
            array_push($mem_details,$user_to_contact);
        }


        return $mem_details;

    }

}
