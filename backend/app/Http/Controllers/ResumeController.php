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
use App\GenieSocial;
use App\GenieWorkExp;
use App\JobSkill;
use App\SocialConnect;
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
            $genie_basic->name = $request->name;
            $genie_basic->label = $request->current_position;
            $genie_basic->summary = $request->summary; 
            $genie_basic->location = $request->current_location;
            // $imageName = time().'.'.$request->avatar->getClientOriginalExtension();
            // $request->avatar->move(public_path('images'), $imageName);
            
           
            $genie_basic->save();

        }
        else
        {
            $genie_basic_new = new GenieBasic();
            $genie_basic_new->name = $request->name;
            $genie_basic_new->label = $request->current_position;
            $genie_basic_new->location = $request->current_location;
            $genie_basic_new->user_id = auth()->user()->id;
            $genie_basic_new->summary = $request->summary;
            $genie_basic_new->save();
        }

       

            return  Response::json([
                'status' => 200,
                'message' => "Genie basic details updated succesfully"
            ], 200);
      




    }

    public function genie_get_basic(Request $request)
    {
        // return auth()->user();
       

        $genie_basic = GenieBasic::where('user_id',auth()->user()->id)->first();
        if($genie_basic)
        {
            return $genie_basic;
        }
        else
        {
            return  Response::json([
                'status' => 200,
                'message' => "Genie basic not found"
            ], 200);
        }
       
       

       

      




    }


//////////////////////////////////////////////Genie Work/////////////////////////////////////////
    public function genie_all_work_exp(Request $request)
    {
        $genie_work_exp = GenieWorkExp::where('user_id',auth()->user()->id)->get();
        return $genie_work_exp;  
        //sort by enddate
    } 

    public function add_resume_work_exp(Request $request)
    {
        // return auth()->user();
       

        $genie_work_exp = new GenieWorkExp();
        $genie_work_exp->user_id = auth()->user()->id;
        $genie_work_exp->company = $request->company;
        $genie_work_exp->position = $request->position;
        $genie_work_exp->start_date = $request->start_date;
        $genie_work_exp->location = $request->location;
        $genie_work_exp->end_date = $request->end_date;
        $genie_work_exp->summary = $request->summary;
        $genie_work_exp->status = 1;
        $genie_work_exp->website = $request->website;
        $genie_work_exp->save();
        $created_work_exp = GenieWorkExp::where('user_id',auth()->user()->id)->get();

        return  Response::json([
            'status' => 200,
            'message' => "Genie work experience added succesfully",
            'work_experience' => $created_work_exp
        ], 200);




        
      




    }

    public function toggle_resume_work_exp(Request $request)
    {
        
        $genie_work_exp_id = $request->toogle_work_id;
     
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
                $genie_work_exp->status = $request->status;
                $genie_work_exp->save();
                $created_work_exp = GenieWorkExp::where('user_id',auth()->user()->id)->get();
                return  Response::json([
                    'status' => 200,
                    'work_experience' =>  $created_work_exp,
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

    public function update_resume_work_exp(Request $request)
    {
        $genie_work_exp_id = $request->update_work_id;
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
                
                $genie_work_exp->company = $request->company;
                $genie_work_exp->position = $request->position;
                $genie_work_exp->start_date = $request->start_date;
                $genie_work_exp->end_date = $request->end_date;
                $genie_work_exp->summary = $request->summary;
                $genie_work_exp->location = $request->location;
                $genie_work_exp->status = 1;
                $genie_work_exp->website = $request->website;
                $genie_work_exp->save();
                $created_work_exp = GenieWorkExp::where('user_id',auth()->user()->id)->get();
                return  Response::json([
                    'status' => 200,
                    'work_experience' => $created_work_exp,
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
//////////////////////////////////////////////Genie Work/////////////////////////////////////////
   
    


//////////////////////////////////////////////Genie Education/////////////////////////////////////////

    public function genie_all_education(Request $request)
    {
        $genie_education = GenieEducation::where('user_id',auth()->user()->id)->get();
        return $genie_education;  
        //sort by enddate
    }

    public function add_resume_genie_education(Request $request)
    {
        $genie_new_education = new GenieEducation();
        $genie_new_education->user_id = auth()->user()->id;
        // $genie_new_education->user_id = 1;
        $genie_new_education->institution = $request->institution;
        $genie_new_education->url = $request->url;
        $genie_new_education->area = $request->area;
        $genie_new_education->start_date = $request->start_date;
        $genie_new_education->end_date = $request->end_date;
        $genie_new_education->studyType = $request->studyType;
   
        $genie_new_education->score = $request->score;
        $genie_new_education->courses = $request->courses;
        $genie_new_education->status = '1';
        $genie_new_education->save();
        $created_education = GenieEducation::where('user_id',auth()->user()->id)->get();
        return  Response::json([
            'status' => 200,
            'education' => $created_education,
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

    public function toggle_resume_education(Request $request)
    {
        
        $genie_edu_id = $request->toogle_edu_id;
     
        $genie_education = GenieEducation::where('id',$genie_edu_id)->first();
       
        if($genie_education)
        {
            if($genie_education->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie work experience authentication error"
                ], 200);
            }
            else
            {
                $genie_education->status = $request->status;
                $genie_education->save();
                $created_education = GenieEducation::where('user_id',auth()->user()->id)->get();
                return  Response::json([
                    'status' => 200,
                    'education' => $created_education,
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

    public function update_resume_genie_education(Request $request)
    {
     
        $genie_edu_id = $request->update_edu_id;
        
        $genie_education = GenieEducation::where('id', $genie_edu_id)->first();
       
        if($genie_education)
        {
            if($genie_education->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie work experience authentication error"
                ], 200);
            }
            else
            {
                
                $genie_education->institution = $request->institution;
                $genie_education->url = $request->url;
                $genie_education->area = $request->area;
                $genie_education->start_date = $request->start_date;
                $genie_education->end_date = $request->end_date;
                $genie_education->studyType = $request->studyType;
        
                $genie_education->score = $request->score;
                $genie_education->courses = $request->courses;
                $genie_education->status = '1';
                $genie_education->save();
                $created_education = GenieEducation::where('user_id',auth()->user()->id)->get();
                return  Response::json([
                    'status' => 200,
                    'education' => $created_education,
                    'message' => "Genie work experience status updated succesfully"
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

//////////////////////////////////////////////Genie Education/////////////////////////////////////////
    

 
//////////////////////////////////////////////Genie Award////////////////////////////////////////////
    public function genie_all_award(Request $request)
    {
        $genie_award = GenieAward::where('user_id',auth()->user()->id)->get();
        return $genie_award;  
    }

    public function add_resume_genie_award(Request $request)
    {
        $genie_new_award = new GenieAward();
        $genie_new_award->user_id = auth()->user()->id;
        // $genie_new_award->user_id = 1;
        $genie_new_award->title = $request->title;
        $genie_new_award->url = $request->url;
        $genie_new_award->date = $request->date;
        // $genie_new_award->date = Carbon::now();
      
        $genie_new_award->awarder = $request->awarder;
        $genie_new_award->summary = $request->summary;
        $genie_new_award->status = '1';
        $genie_new_award->save();
        $created_awards = GenieAward::where('user_id',auth()->user()->id)->get();

        return  Response::json([
            'status' => 200,
            'award' => $created_awards,
            'message' => "Genie award added succesfully"
        ], 200);
    }

    public function toggle_resume_award(Request $request)
    {
        
        $genie_award_id = $request->toogle_award_id;
     
        $genie_award = GenieAward::where('id',$genie_award_id)->first();
       
        if($genie_award)
        {
            if($genie_award->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie work experience authentication error"
                ], 200);
            }
            else
            {
                $genie_award->status = $request->status;
                $genie_award->save();
                $created_awards = GenieAward::where('user_id',auth()->user()->id)->get();
                return  Response::json([
                    'status' => 200,
                    'award' => $created_awards,
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

    public function update_resume_genie_award(Request $request)
    {
     
        $genie_award_id = $request->update_award_id;
        
        $genie_award = GenieAward::where('id', $genie_award_id)->first();
       
        if($genie_award)
        {
            if($genie_award->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie work experience authentication error"
                ], 200);
            }
            else
            {
               
               
                // $genie_new_award->user_id = 1;
                $genie_award->title = $request->title;
                $genie_award->url = $request->url;
                $genie_award->date = $request->date;
                // $genie_new_award->date = Carbon::now();
              
                $genie_award->awarder = $request->awarder;
                $genie_award->summary = $request->summary;
                $genie_award->status = '1';
                $genie_award->save();
                $created_awards = GenieAward::where('user_id',auth()->user()->id)->get();
                
                return  Response::json([
                    'status' => 200,
                    'award' => $created_awards,
                    'message' => "Genie work experience status updated succesfully"
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

//////////////////////////////////////////////Genie Award//////////////////////////////////////////
   

   

    
//////////////////////////////////////////////Genie Project/////////////////////////////////////////
    public function genie_all_project(Request $request)
    {
        $genie_project = GenieProject::where('user_id',1)->get();
        return $genie_project;  
    }

    public function add_resume_genie_project(Request $request)
    {
        $genie_new_project = new GenieProject();
        $genie_new_project->user_id = auth()->user()->id;
        // $genie_new_project->user_id = 1;
        $genie_new_project->name = $request->name;
        $genie_new_project->company_name = $request->company_name;
        $genie_new_project->summary = $request->summary;
        // $genie_new_award->keywords = $request->keywords;
        // $genie_new_education->endDate = $request->endDate;
        // $genie_new_education->startDate = $request->startDate;
        $genie_new_project->end_date = $request->end_date;
        $genie_new_project->start_date = $request->start_date;
        $genie_new_project->url = $request->url;
        // $genie_new_award->roles = $request->roles;
        // $genie_new_award->entity = $request->entity;
        // $genie_new_award->type = $request->type;
        $genie_new_project->status = '1';
        $genie_new_project->save();
        $created_projects = GenieProject::where('user_id',auth()->user()->id)->get();
        return  Response::json([
            'status' => 200,
            'message' => "Genie project added succesfully",
            'project' => $created_projects,
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

    public function toggle_resume_project(Request $request)
    {
        
        $genie_project_id = $request->toogle_project_id;
     
        $genie_project = GenieProject::where('id',$genie_project_id)->first();
       
        if($genie_project)
        {
            if($genie_project->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie work experience authentication error"
                ], 200);
            }
            else
            {
                $genie_project->status = $request->status;
                $genie_project->save();
                $created_projects = GenieProject::where('user_id',auth()->user()->id)->get();
                return  Response::json([
                    'status' => 200,
                    'project' => $created_projects,
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

    public function update_resume_genie_project(Request $request)
    {
        $genie_project_id = $request->update_project_id;
        
        $genie_project = GenieProject::where('id', $genie_project_id)->first();
       
        if($genie_project)
        {
            if($genie_project->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie work experience authentication error"
                ], 200);
            }
            else
            {
               
               
        
        // $genie_new_project->user_id = 1;
        $genie_project->name = $request->name;
        $genie_project->company_name = $request->company_name;
        $genie_project->summary = $request->summary;
        // $genie_new_award->keywords = $request->keywords;
        $genie_project->end_date = $request->end_date;
        $genie_project->start_date = $request->start_date;
        // $genie_project->endDate = Carbon::now();
        // $genie_project->startDate = Carbon::now();
        $genie_project->url = $request->url;
        // $genie_new_award->roles = $request->roles;
        // $genie_new_award->entity = $request->entity;
        // $genie_new_award->type = $request->type;
        $genie_project->status = '1';
        $genie_project->save();
        $created_projects = GenieProject::where('user_id',auth()->user()->id)->get();      
                
                
                return  Response::json([
                    'status' => 200,
                    'project' => $created_projects,
                    'message' => "Genie work experience status updated succesfully"
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
//////////////////////////////////////////////Genie Project/////////////////////////////////////////





   
//////////////////////////////////////////////Genie Skill/////////////////////////////////////////

    public function genie_all_skill(Request $request)
    {
        $genie_skill = GenieSkill::where('user_id',auth()->user()->id)->get();
        return $genie_skill;  
    }

    public function add_resume_genie_skill(Request $request)
    {
        $genie_new_skill = new GenieSkill();
        $genie_new_skill->user_id = auth()->user()->id;
        $genie_new_skill->name = $request->name;
        $genie_new_skill->level = $request->level;
        $genie_new_skill->status = '1';
        $genie_new_skill->save();
        $created_skill = GenieSkill::where('user_id',auth()->user()->id)->get();

        return  Response::json([
            'status' => 200,
            'skill' => $created_skill,
            'message' => "Genie skill added succesfully"
        ], 200);

       
    }

    public function toggle_resume_skill(Request $request)
    {
        
        $genie_skill_id = $request->toogle_skill_id;
     
        $genie_skill = GenieSkill::where('id',$genie_skill_id)->first();
       
        if($genie_skill)
        {
            if($genie_skill->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie work experience authentication error"
                ], 200);
            }
            else
            {
                $genie_skill->status = $request->status;
                $genie_skill->save();
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
    
    public function update_resume_genie_skill(Request $request)
    {
        $genie_skill_id = $request->update_skill_id;
        
        $genie_skill = GenieSkill::where('id', $genie_skill_id)->first();
       
        if($genie_skill)
        {
            if($genie_skill->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie work experience authentication error"
                ], 200);
            }
            else
            {
               
               
        
        // $genie_new_project->user_id = 1;
        $genie_skill->name = $request->name;
        $genie_skill->level = $request->level;
        $genie_skill->save();
              
                
                
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
                'message' => "Genie education not found"
            ], 200);
        }
    }

   

//////////////////////////////////////////////Genie Skill/////////////////////////////////////////





//////////////////////////////////////////////Genie Contact/////////////////////////////////////////
    public function add_resume_genie_contact(Request $request)
    {
       
        $genie_contact = GenieContact::where('user_id',1)->first();
        if($genie_contact)
        {
            $genie_contact->email = $request->email;
            $genie_contact->user_id = auth()->user()->id;
            $genie_contact->phone = $request->phone;
            $genie_contact->website = $request->website;
            $genie_contact->address = $request->address;
            $genie_contact->areacode = $request->areacode;
            $genie_contact->city = $request->city;
            $genie_contact->country = $request->country;
         
         
            
           
            $genie_contact->save();

        }
        else
        {
            $genie_contact_new = new GenieContact();
            $genie_contact_new->email = $request->email;
            $genie_contact_new->user_id = auth()->user()->id;
            $genie_contact_new->phone = $request->phone;
            $genie_contact_new->website = $request->website;
            $genie_contact_new->address = $request->address;
            $genie_contact_new->areacode = $request->areacode;
            $genie_contact_new->city = $request->city;
            $genie_contact_new->country = $request->country;
         
            $genie_contact_new->save();
        }

       

            return  Response::json([
                'status' => 200,
                'message' => "Genie contact details updated succesfully"
            ], 200);
      

    }
 
    public function genie_all_contact(Request $request)
    {
        $genie_contact = GenieContact::where('user_id',1)->first();
        return $genie_contact;  
    }

//////////////////////////////////////////////Genie Contact///////////////////////////////////////// 



//////////////////////////////////////////////Genie Social/////////////////////////////////////////


public function fetch_genie_connect(Request $request)
{
    $connects = SocialConnect::where('status','1')->get();
    return $connects;
}

public function genie_all_social(Request $request)
    {
        $genie_social = GenieSocial::where('user_id',auth()->user()->id)->get();
        return $genie_social;  
    }

public function add_resume_genie_social(Request $request)
{
    $new_genie_social = new GenieSocial();
    $new_genie_social->user_id = auth()->user()->id;
    $new_genie_social->network_id = $request->network_id;
    $new_genie_social->user_name = $request->user_name;
    $new_genie_social->url = $request->url;
    $new_genie_social->status = '1';
    $new_genie_social->save();

    $connected_social = GenieSocial::where('user_id',auth()->user()->id)->get();

    return  Response::json([
        'status' => 200,
        'network' => $connected_social,
        'message' => "Genie social added succesfully"
    ], 200);
}

public function update_resume_genie_social(Request $request)
{
    $genie_social_id = $request->update_social_id;
    
    $genie_social = GenieSocial::where('id', $genie_social_id)->first();
   
    if($genie_social)
    {
        if($genie_social->user_id != auth()->user()->id)
        {
            return  Response::json([
                'status' => 200,
                'message' => "Genie social authentication error"
            ], 200);
        }
        else
        {
           
           
    
    // $genie_new_project->user_id = 1;
    $genie_social->network_id = $request->network_id;
    $genie_social->user_name = $request->user_name;
    $genie_social->url = $request->url;
    $genie_social->save();
          
            
            
            return  Response::json([
                'status' => 200,
                'message' => "Genie social status updated succesfully"
            ], 200);
        }
        
    }
    else
    {
        return  Response::json([
            'status' => 403,
            'message' => "Genie social not found"
        ], 200);
    }
}

public function toggle_resume_social(Request $request)
{
    return 1;
    $genie_social_id = $request->toogle_social_id;
 
    $genie_social = GenieSocial::where('id',$genie_social_id)->first();
   
    if($genie_social)
    {
        if($genie_social->user_id != auth()->user()->id)
        {
            return  Response::json([
                'status' => 200,
                'message' => "Genie social authentication error"
            ], 200);
        }
        else
        {
            $genie_social->status = $request->status;
            $genie_social->save();
            return  Response::json([
                'status' => 200,
                'message' => "Genie social status updated succesfully"
            ], 200);
        }
        
    }
    else
    {
        return  Response::json([
            'status' => 403,
            'message' => "Genie social not found"
        ], 200);
    }




    
  




}










//////////////////////////////////////////////Genie Social/////////////////////////////////////////


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




    //////////////////////////////////Fetch all active/////////////////////////

    public function get_all_active_areas(Request $request)
    {
        $genie_basic = GenieBasic::where('user_id',auth()->user()->id)->first();

        $genie_work_exp = GenieWorkExp::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','0']
        ])->get();

        $genie_education = GenieEducation::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','0']
        ])->get();

        $genie_award = GenieAward::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','0']
        ])->get();

        $genie_project = GenieProject::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','0']
        ])->get();

        $genie_skill = GenieSkill::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','0']
        ])->get();

        
        return  Response::json([
            'status' => 200,
            'message' => "Genie found",
            'work' => $genie_work_exp,
            'basic' => $genie_basic,
            'project' => $genie_project,
            'skill' => $genie_skill,
            'award' => $genie_award,
            'education' => $genie_education,
        ], 200);


    }

    public function fetch_genie_skills(Request $request)
    {
       
        $search = $request->name;
        $data = [];
        if($request->has('name')){
            // $key = $request->value;
            $skill = JobSkill::orderby('name','asc')->select('name')
                    ->where([

                        ['name', 'like', '%' .$search . '%'],


                        ])
                    ->get();
                    return $skill;
        }
       

    }






    ///////////////////////////////////////fetch all active for dashbaord//////////////////////




}
