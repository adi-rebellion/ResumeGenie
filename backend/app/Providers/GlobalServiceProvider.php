<?php

namespace App\Providers;
use App\GenieAward;
use App\GenieBasic;
use App\GenieContact;
use App\GenieEducation;
use App\GenieInterest;
use App\GenieLanguage;
use App\GenieProject;
use App\GenieReference;
use App\GenieResume;
use App\GenieResumeComponent;
use App\GenieSill;
use App\GenieSkill;
use App\GenieSocial;
use App\GenieVolunteer;
use App\GenieWorkExp;
use App\JobSkill;
use App\SocialConnect;
use App\LanguageList;
use Carbon\Carbon;

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

    public function activate_components($resume_id)
    {
        $genie_social = GenieSocial::where([
            ['user_id','=',auth()->user()->id],
             ['status','=','active']
        ])->get();

        if($genie_social)
        {
            
            foreach($genie_social as $social)
            {
                $chck_exist = GenieResumeComponent::where([
                    ['user_id','=',auth()->user()->id],
                    ['resume_id','=',$resume_id],
                    ['component','=',3],
                    ['component_id','=',$social->id]
                ])->first();
                if(!$chck_exist)
                {
                    $genie_social_register = new GenieResumeComponent();
                    $genie_social_register->user_id = auth()->user()->id;
                    $genie_social_register->resume_id = $resume_id;
                    $genie_social_register->component = 3;
                    $genie_social_register->component_id = $social->id;
                    $genie_social_register->com_status = 'active';
                    $genie_social_register->save();
                }
               
            }

            
        }
        
        $genie_work_exp = GenieWorkExp::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
        if($genie_work_exp)
        {
            
            foreach($genie_work_exp as $work)
            {
                $chck_exist = GenieResumeComponent::where([
                    ['user_id','=',auth()->user()->id],
                    ['resume_id','=',$resume_id],
                    ['component','=',4],
                    ['component_id','=',$work->id]
                ])->first();
                if(!$chck_exist)
                {
                    $genie_work_register = new GenieResumeComponent();
                    $genie_work_register->resume_id = $resume_id;
                    $genie_work_register->user_id = auth()->user()->id;
                    $genie_work_register->component = 4;
                    $genie_work_register->component_id = $work->id;
                    $genie_work_register->com_status = 'active';
                    $genie_work_register->save();
                }
              
            }

            
        }

        $genie_skill = GenieSkill::where([
            ['user_id','=',auth()->user()->id],
             ['status','=','active']
        ])->get();

        if($genie_skill)
        {
            
            foreach($genie_skill as $skill)
            {
                $chck_exist = GenieResumeComponent::where([
                    ['user_id','=',auth()->user()->id],
                    ['resume_id','=',$resume_id],
                    ['component','=',5],
                    ['component_id','=',$skill->id]
                ])->first();
                if(!$chck_exist)
                {
                $genie_skill_register = new GenieResumeComponent();
                $genie_skill_register->user_id = auth()->user()->id;
                $genie_skill_register->resume_id = $resume_id;
                $genie_skill_register->component = 5;
                $genie_skill_register->component_id = $skill->id;
                $genie_skill_register->com_status = 'active';
                $genie_skill_register->save();
                }
            }

            
        }

        $genie_project = GenieProject::where([
            ['user_id','=',auth()->user()->id],
             ['status','=','active']
        ])->get();

        if($genie_project)
        {
            
            foreach($genie_project as $project)
            {
                $chck_exist = GenieResumeComponent::where([
                    ['user_id','=',auth()->user()->id],
                    ['resume_id','=',$resume_id],
                    ['component','=',6],
                    ['component_id','=',$project->id]
                ])->first();
                if(!$chck_exist)
                {
                $genie_project_register = new GenieResumeComponent();
                $genie_project_register->user_id = auth()->user()->id;
                $genie_project_register->resume_id = $resume_id;
                $genie_project_register->component = 6;
                $genie_project_register->component_id = $project->id;
                $genie_project_register->com_status = 'active';
                $genie_project_register->save();
                }
            }

            
        }

        $genie_award = GenieAward::where([
            ['user_id','=',auth()->user()->id],
             ['status','=','active']
        ])->get();
        if($genie_award)
        {
            
            foreach($genie_award as $award)
            {
                $chck_exist = GenieResumeComponent::where([
                    ['user_id','=',auth()->user()->id],
                    ['resume_id','=',$resume_id],
                    ['component','=',7],
                    ['component_id','=',$award->id]
                ])->first();
                if(!$chck_exist)
                {
                $genie_award_register = new GenieResumeComponent();
                $genie_award_register->resume_id = $resume_id;
                $genie_award_register->user_id = auth()->user()->id;
                $genie_award_register->component = 7;
                $genie_award_register->component_id = $award->id;
                $genie_award_register->com_status = 'active';
                $genie_award_register->save();
                }
            }

            
        }

        $genie_language= GenieLanguage::where([
            ['user_id','=',auth()->user()->id],
             ['status','=','active']
        ])->get();
        if($genie_language)
        {
            
            foreach($genie_language as $language)
            {  
                 $chck_exist = GenieResumeComponent::where([
                ['user_id','=',auth()->user()->id],
                ['resume_id','=',$resume_id],
                ['component','=',8],
                ['component_id','=',$language->id]
            ])->first();
            if(!$chck_exist)
            {
                $genie_award_register = new GenieResumeComponent();
                $genie_award_register->resume_id = $resume_id;
                $genie_award_register->user_id = auth()->user()->id;
                $genie_award_register->component = 8;
                $genie_award_register->component_id = $language->id;
                $genie_award_register->com_status = 'active';
                $genie_award_register->save();
            }
            }

            
        }

        $genie_interest= GenieInterest::where([
            ['user_id','=',auth()->user()->id],
             ['status','=','active']
        ])->get();
        if($genie_interest)
        {
            
            foreach($genie_interest as $interest)
            {
                $chck_exist = GenieResumeComponent::where([
                    ['user_id','=',auth()->user()->id],
                    ['resume_id','=',$resume_id],
                    ['component','=',9],
                    ['component_id','=',$interest->id]
                ])->first();
                if(!$chck_exist)
                {
                $genie_award_register = new GenieResumeComponent();
                $genie_award_register->resume_id = $resume_id;
                $genie_award_register->user_id = auth()->user()->id;
                $genie_award_register->component = 9;
                $genie_award_register->component_id = $interest->id;
                $genie_award_register->com_status = 'active';
                $genie_award_register->save();
                }
            }

            
        }

        $genie_education = GenieEducation::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();

        if($genie_education)
        {
            
            foreach($genie_education as $education)
            {   
                $chck_exist = GenieResumeComponent::where([
                    ['user_id','=',auth()->user()->id],
                    ['resume_id','=',$resume_id],
                    ['component','=',10],
                    ['component_id','=',$education->id]
                ])->first();
                if(!$chck_exist)
                {
                $genie_education_register = new GenieResumeComponent();
                $genie_education_register->resume_id = $resume_id;
                $genie_education_register->user_id = auth()->user()->id;
                $genie_education_register->component = 10;
                $genie_education_register->component_id = $education->id;
                $genie_education_register->com_status = 'active';
                $genie_education_register->save();
                }
            }

            
        }

        $genie_volunteer = GenieVolunteer::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();

        if($genie_volunteer)
        {
            
            foreach($genie_volunteer as $volunteer)
            {    
                 $chck_exist = GenieResumeComponent::where([
                ['user_id','=',auth()->user()->id],
                ['resume_id','=',$resume_id],
                ['component','=',11],
                ['component_id','=',$volunteer->id]
            ])->first();
            if(!$chck_exist)
            {
                $genie_education_register = new GenieResumeComponent();
                $genie_education_register->resume_id = $resume_id;
                $genie_education_register->user_id = auth()->user()->id;
                $genie_education_register->component = 11;
                $genie_education_register->component_id = $volunteer->id;
                $genie_education_register->com_status = 'active';
                $genie_education_register->save();
            }
            }

            
        }


        $genie_reference = GenieReference::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();

        if($genie_reference)
        {
            
            foreach($genie_reference as $reference)
            {
                $chck_exist = GenieResumeComponent::where([
                    ['user_id','=',auth()->user()->id],
                    ['resume_id','=',$resume_id],
                    ['component','=',12],
                    ['component_id','=',$reference->id]
                ])->first();
                if(!$chck_exist)
                {
                $genie_education_register = new GenieResumeComponent();
                $genie_education_register->resume_id = $resume_id;
                $genie_education_register->user_id = auth()->user()->id;
                $genie_education_register->component = 12;
                $genie_education_register->component_id = $reference->id;
                $genie_education_register->com_status = 'active';
                $genie_education_register->save();
                }
            }

            
        }
    }














}
