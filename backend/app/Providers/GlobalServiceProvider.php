<?php

namespace App\Providers;
use App\Event;

use Illuminate\Support\ServiceProvider;

class GlobalServiceProvider extends ServiceProvider
{
    public function __construct()
    {
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }


    public function seo_friendly_url($string){
        $string = str_replace(array('[\', \']'), '-', $string);
        $string = preg_replace('/\[.*\]/U', '-', $string);
        $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
        $string = htmlentities($string, ENT_COMPAT, 'utf-8');
        $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
        $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
        return strtolower(trim($string, '-'));
    }

    public function createEventNew($name,$url,$desc,$org_id,$event_type)
    {
        $newEvent = new Event();
        $newEvent->name = $name;
        $newEvent->url = $url;
        $GlobalService = new GlobalServiceProvider();
        $newEvent->event_slug = $GlobalService->seo_friendly_url($name);
        $newEvent->description = $desc;
        $newEvent->org_event_id = $org_id;
        $newEvent->event_type = $event_type;
        $newEvent->status = 'on';
        $newEvent->save();
    }














}
