<?php

namespace App\Http\Controllers;

use App\GenieAward;
use App\GenieBasic;
use App\GenieContact;
use App\GenieEducation;
use App\GenieLanguage;
use App\GenieProject;
use App\GenieSill;
use App\GenieSkill;
use App\GenieWorkExp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Response;

class ResumeController extends Controller
{
    //

    public function resume_genie_basic(Request $request)
    {
        // return auth()->user();
       

        $genie_basic = GenieBasic::where('user_id',auth()->user()->id)->first();
        if($genie_basic)
        {
            $genie_basic->name = $request->first_name;
            $genie_basic->label = $request->current_position;
            $genie_basic->summary = $request->summary;
            $imageName = time().'.'.$request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('images'), $imageName);
            
           
            $genie_basic->save();

        }
        else
        {
            $genie_basic_new = new GenieBasic();
            $genie_basic_new->name = $request->name;
            $genie_basic_new->label = $request->label;
            $genie_basic_new->user_id = auth()->user()->id;
            $genie_basic_new->summary = $request->summary;
            $genie_basic_new->save();
        }

       

            return  Response::json([
                'status' => 200,
                'message' => "Genie basic details updated succesfully"
            ], 200);
      




    }

    public function add_resume_work_exp(Request $request)
    {
        // return auth()->user();
       

        $genie_work_exp = new GenieWorkExp();
        // $genie_work_exp->user_id = auth()->user()->id;
        $genie_work_exp->user_id = 1;
        $genie_work_exp->name = $request->company;
        $genie_work_exp->position = $request->position;
        // $genie_work_exp->startDate = $request->startDate;
        // $genie_work_exp->endDate = $request->endDate;
        $genie_work_exp->startDate = Carbon::now();
        $genie_work_exp->endDate = Carbon::now();
        $genie_work_exp->summary = $request->summary;
        $genie_work_exp->status = 1;
        $genie_work_exp->url = $request->website;
        $genie_work_exp->save();

        return  Response::json([
            'status' => 200,
            'message' => "Genie work experience added succesfully"
        ], 200);




        
      




    }

    public function update_resume_work_exp(Request $request)
    {
        $genie_work_exp_id = $request->genie_work_exp_id;
        $genie_work_exp = GenieWorkExp::where('id',$genie_work_exp_id)->first();
       
        if($genie_work_exp)
        {
            if($genie_work_exp->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie work experience authentication error"
                ], 200);
            }
            else
            {
                $genie_work_exp->status = $request->requested_status;
                $genie_work_exp->save();
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie work experience status updated succesfully"
                ], 200);
            }
            
        }
        else
        {
            return  Response::json([
                'status' => 403,
                'message' => "Genie work experience not found"
            ], 200);
        }
    }

    public function genie_all_work_exp(Request $request)
    {
        $genie_work_exp = GenieWorkExp::where('user_id',1)->get();
        return $genie_work_exp;  
        //sort by enddate
    } 


    public function add_resume_genie_education(Request $request)
    {
        $genie_new_education = new GenieEducation();
        // $genie_new_education->user_id = auth()->user()->id;
        $genie_new_education->user_id = 1;
        $genie_new_education->institution = $request->institution;
        $genie_new_education->url = $request->url;
        $genie_new_education->area = $request->area;
        // $genie_new_education->studyType = $request->studyType;
        // $genie_new_education->startDate = $request->startDate;
        $genie_new_education->studyType = $request->studyType;
        $genie_new_education->startDate = Carbon::now();
        $genie_new_education->endDate = Carbon::now();
        $genie_new_education->score = $request->gpa;
        $genie_new_education->courses = $request->courses;
        $genie_new_education->status = '1';
        $genie_new_education->save();

        return  Response::json([
            'status' => 200,
            'message' => "Genie education added succesfully"
        ], 200);

        // $table->String('institution');
        //     $table->String('url');
        //     $table->String('area');
        //     $table->String('studyType');
        //     $table->date('startDate');
        //     $table->date('endDate');
        //     $table->float('score');
        //     $table->String('courses');
        //     $table->timestamps();

    }


    public function update_resume_genie_education(Request $request)
    {
        $resume_genie_education_id = $request->education_id;
        $genie_education = GenieEducation::where('id',$resume_genie_education_id)->first();
        if($genie_education)
        {
            if($genie_education->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie education authentication error"
                ], 200);
            }
            else
            {
                $genie_education->status = $request->requested_status;
                $genie_education->save();
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie education status updated succesfully"
                ], 200);
            }

        }
        else
        {
            return  Response::json([
                'status' => 403,
                'message' => "Genie education not found"
            ], 200);
        }
    }

    public function genie_all_education(Request $request)
    {
        $genie_education = GenieEducation::where('user_id',1)->get();
        return $genie_education;  
        //sort by enddate
    }


    public function add_resume_genie_award(Request $request)
    {
        $genie_new_award = new GenieAward();
        // $genie_new_education->user_id = auth()->user()->id;
        $genie_new_award->user_id = 1;
        $genie_new_award->title = $request->title;
        $genie_new_award->url = $request->url;
        // $genie_new_award->date = $request->date;
        $genie_new_award->date = Carbon::now();
      
        $genie_new_award->awarder = $request->awarder;
        $genie_new_award->summary = $request->summary;
        $genie_new_award->status = '1';
        $genie_new_award->save();

        return  Response::json([
            'status' => 200,
            'message' => "Genie award added succesfully"
        ], 200);
    }


    public function update_resume_genie_award(Request $request)
    {
        $resume_genie_award_id = $request->award_id;
        $genie_award = GenieAward::where('id',$resume_genie_award_id)->first();
        if($genie_award)
        {
            if($genie_award->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie award authentication error"
                ], 200);
            }
            else
            {
                $genie_award->status = $request->requested_status;
                $genie_award->save();
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie award status updated succesfully"
                ], 200);
            }

        }
        else
        {
            return  Response::json([
                'status' => 403,
                'message' => "Genie award not found"
            ], 200);
        }
    }

    public function genie_all_award(Request $request)
    {
        $genie_award = GenieAward::where('user_id',1)->get();
        return $genie_award;  
    }


    public function add_resume_genie_project(Request $request)
    {
        $genie_new_project = new GenieProject();
        // $genie_new_education->user_id = auth()->user()->id;
        $genie_new_project->user_id = 1;
        $genie_new_project->name = $request->project_name;
        $genie_new_project->company_name = $request->company_name;
        $genie_new_project->summary = $request->summary;
        // $genie_new_award->keywords = $request->keywords;
        // $genie_new_education->endDate = $request->endDate;
        // $genie_new_education->startDate = $request->startDate;
        $genie_new_project->endDate = Carbon::now();
        $genie_new_project->startDate = Carbon::now();
        $genie_new_project->url = $request->url;
        // $genie_new_award->roles = $request->roles;
        // $genie_new_award->entity = $request->entity;
        // $genie_new_award->type = $request->type;
        $genie_new_project->status = '1';
        $genie_new_project->save();

        return  Response::json([
            'status' => 200,
            'message' => "Genie project added succesfully"
        ], 200);

        // $table->String('name');
        // $table->String('description');
        // $table->String('highlights');
        // $table->String('keywords');
        // $table->date('startDate');
        // $table->date('endDate');
        // $table->String('url');
        // $table->String('roles');
        // $table->String('entity');
        // $table->String('type');
    }


    public function update_resume_genie_project(Request $request)
    {
        $resume_genie_project_id = $request->project_id;
        $genie_project = GenieProject::where('id',$resume_genie_project_id)->first();
        if($genie_project)
        {
            if($genie_project->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie project authentication error"
                ], 200);
            }
            else
            {
                $genie_project->status = $request->requested_status;
                $genie_project->save();
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie project status updated succesfully"
                ], 200);
            }

        }
        else
        {
            return  Response::json([
                'status' => 403,
                'message' => "Genie project not found"
            ], 200);
        }
    }

    public function genie_all_project(Request $request)
    {
        $genie_project = GenieProject::where('user_id',1)->get();
        return $genie_project;  
    }

    public function add_resume_genie_skill(Request $request)
    {
        $genie_new_skill = new GenieSkill();
        // $genie_new_education->user_id = auth()->user()->id;
        $genie_new_skill->user_id = 1;
        $genie_new_skill->name = $request->skill_name;
        // $genie_new_skill->level = $request->level;
        // $genie_new_skill->keywords = $request->keywords;
        // $genie_new_education->endDate = $request->endDate;
        // $genie_new_education->startDate = $request->startDate;
       
        $genie_new_skill->save();

        return  Response::json([
            'status' => 200,
            'message' => "Genie skill added succesfully"
        ], 200);

        // $table->String('name');
        // $table->String('description');
        // $table->String('highlights');
        // $table->String('keywords');
        // $table->date('startDate');
        // $table->date('endDate');
        // $table->String('url');
        // $table->String('roles');
        // $table->String('entity');
        // $table->String('type');
    }

    
    public function update_resume_genie_skill(Request $request)
    {
        $resume_genie_skill_id = $request->skill_id;
        $genie_skill = GenieSkill::where('id',$resume_genie_skill_id)->first();
        if($genie_skill)
        {
            if($genie_skill->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie skill authentication error"
                ], 200);
            }
            else
            {
                $genie_skill->status = $request->requested_status;
                $genie_skill->save();
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie skill status updated succesfully"
                ], 200);
            }

        }
        else
        {
            return  Response::json([
                'status' => 403,
                'message' => "Genie project not found"
            ], 200);
        }
    }

    public function genie_all_skill(Request $request)
    {
        $genie_skill = GenieSkill::where('user_id',1)->get();
        return $genie_skill;  
    }

    public function add_resume_genie_contact(Request $request)
    {
       
        $genie_contact = GenieContact::where('user_id',1)->first();
        if($genie_contact)
        {
            $genie_contact->email = $request->email;
            $genie_contact->user_id = 1;
            $genie_contact->phone = $request->phone;
            $genie_contact->url = $request->website;
            $genie_contact->address = $request->address;
         
         
            
           
            $genie_contact->save();

        }
        else
        {
            $genie_contact_new = new GenieContact();
            $genie_contact_new->email = $request->email;
            $genie_contact_new->user_id = 1;
            $genie_contact_new->phone = $request->phone;
            $genie_contact_new->url = $request->website;
            $genie_contact_new->address = $request->address;
            $genie_contact_new->save();
        }

       

            return  Response::json([
                'status' => 200,
                'message' => "Genie contact details updated succesfully"
            ], 200);
      

    }

    
    public function update_resume_genie_contact(Request $request)
    {
        // $resume_genie_contact_id = $request->skill_id;
        $genie_contact = GenieContact::where('user_id',1)->first();
        if($genie_contact)
        {
            if($genie_contact->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie contact authentication error"
                ], 200);
            }
            else
            {
                $genie_contact->status = $request->requested_status;
                $genie_contact->save();
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie contact status updated succesfully"
                ], 200);
            }

        }
        else
        {
            return  Response::json([
                'status' => 403,
                'message' => "Genie project not found"
            ], 200);
        }
    }

    public function genie_all_contact(Request $request)
    {
        $genie_contact = GenieContact::where('user_id',1)->first();
        return $genie_contact;  
    }

    


    public function add_resume_genie_language(Request $request)
    {
        $genie_new_language = new GenieLanguage();
        $genie_new_language->user_id = auth()->user()->id;
        $genie_new_language->language = $request->language;
        $genie_new_language->fluency = $request->fluency;
        $genie_new_language->save();

        return  Response::json([
            'status' => 200,
            'message' => "Genie language added succesfully"
        ], 200);


    }
    

    public function update_resume_genie_language(Request $request)
    {
        $resume_genie_language_id = $request->language_id;
        $genie_language = GenieLanguage::where('id',$resume_genie_language_id)->first();
        if($genie_language)
        {
            if($genie_language->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie skill authentication error"
                ], 200);
            }
            else
            {
                $genie_language->status = $request->requested_status;
                $genie_language->save();
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie skill status updated succesfully"
                ], 200);
            }

        }
        else
        {
            return  Response::json([
                'status' => 403,
                'message' => "Genie project not found"
            ], 200);
        }
    }




}
