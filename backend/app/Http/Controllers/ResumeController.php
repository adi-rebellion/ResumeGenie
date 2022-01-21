<?php

namespace App\Http\Controllers;

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
use App\GenieTheme;
use App\GenieVolunteer;
use App\GenieWorkExp;
use App\JobSkill;
use App\SocialConnect;
use App\LanguageList;
use App\Providers\GlobalServiceProvider;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use stdClass;
use Symfony\Component\HttpFoundation\RequestStack;

class ResumeController extends Controller
{
  

    

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
        } else {
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

    public function get_all_user_details(Request $request)
    {
        $genie_basic = GenieBasic::where('user_id',auth()->user()->id)->first();
        $genie_contact = GenieContact::where('user_id',auth()->user()->id)->first();
        $genie_work = GenieWorkExp::where('user_id',auth()->user()->id)->count();
        $genie_education = GenieEducation::where('user_id',auth()->user()->id)->count();
        $genie_language = GenieLanguage::where('user_id',auth()->user()->id)->count();
        $genie_social = GenieSocial::where('user_id',auth()->user()->id)->count();
        $genie_skill = GenieSkill::where('user_id',auth()->user()->id)->count();
        $genie_interest = GenieInterest::where('user_id',auth()->user()->id)->count();
        $genie_project = GenieProject::where('user_id',auth()->user()->id)->count();
        $genie_award = GenieAward::where('user_id',auth()->user()->id)->count();
        $genie_reference = GenieReference::where('user_id',auth()->user()->id)->count();
        $genie_volunteer = GenieVolunteer::where('user_id',auth()->user()->id)->count();

        return  Response::json([
            'status' => 200,
            'message' => "Genie work experience added succesfully",
            'work_experience' => $genie_work,
            'education' => $genie_education,
            'language' => $genie_language,
            'social' => $genie_social,
            'skill' => $genie_skill,
            'interest' =>  $genie_interest,
            'project' => $genie_project,
            'award' => $genie_award,
            'reference' => $genie_reference,
            'volunteer' => $genie_volunteer,
            'basic' => $genie_basic,
            'contact' => $genie_contact

        ], 200);
    }


//////////////////////////////////////////////Genie Work/////////////////////////////////////////
    public function genie_all_work_exp(Request $request)
    {
       
        $genie_work_exp = GenieWorkExp::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
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
        
        $genie_work_exp->website = $request->website;
        $genie_work_exp->save();
       
        $created_work_exp = GenieWorkExp::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
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
                $genie_work_exp->status = 'inactive';
                $genie_work_exp->save();

                 $created_work_exp = GenieWorkExp::where([
                     ['user_id','=',auth()->user()->id],
                     ['status','=','active']
                 ])->get();

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
       
        if ($genie_work_exp) {
            if ($genie_work_exp->user_id != auth()->user()->id) {
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
               
                $genie_work_exp->website = $request->website;
                $genie_work_exp->save();
                $created_work_exp = GenieWorkExp::where([
                    ['user_id','=',auth()->user()->id],
                    ['status','=','active']
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'work_experience' => $created_work_exp,
                    'message' => "Genie work experience status updated succesfully"
                ], 200);
            }
        } else {
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
        
        $genie_education = GenieEducation::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
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
      
        $genie_new_education->save();
        $created_education = GenieEducation::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
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
                    'message' => "Genie education authentication error"
                ], 200);
            }
            else
            {
                $genie_education->status = 'inactive';
                $genie_education->save();
                $created_education = GenieEducation::where([
                    ['user_id','=',auth()->user()->id],
                    ['status','=','active']
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'education' => $created_education,
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
                    'message' => "Genie education authentication error"
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
               
                $genie_education->save();
                $created_education = GenieEducation::where([
                    ['user_id','=',auth()->user()->id],
                    ['status','=','active']
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'education' => $created_education,
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

//////////////////////////////////////////////Genie Education/////////////////////////////////////////
    

 
//////////////////////////////////////////////Genie Award////////////////////////////////////////////
    public function genie_all_award(Request $request)
    {
        // $genie_award = GenieAward::where('user_id',auth()->user()->id)->get();
        $genie_award = GenieAward::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
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
       
        $genie_new_award->save();
        $created_awards = GenieAward::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();

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
                    'message' => "Genie award authentication error"
                ], 200);
            }
            else
            {
                $genie_award->status = 'inactive';
                $genie_award->save();
                $created_awards = GenieAward::where([
                    ['user_id','=',auth()->user()->id],
                    ['status','=','active']
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'award' => $created_awards,
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
                    'message' => "Genie award authentication error"
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
               
                $genie_award->save();
                $created_awards = GenieAward::where([
                    ['user_id','=',auth()->user()->id],
                    ['status','=','active']
                ])->get();
                
                return  Response::json([
                    'status' => 200,
                    'award' => $created_awards,
                    'message' => "Genie award status updated succesfully"
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
        $genie_project = GenieProject::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
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
       
        $genie_new_project->save();
        $created_projects = GenieProject::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
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
                    'message' => "Genie project authentication error"
                ], 200);
            }
            else
            {
                $genie_project->status = 'inactive';
                $genie_project->save();
                $created_projects = GenieProject::where([
                    ['user_id','=',auth()->user()->id],
                    ['status','=','active']
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'project' => $created_projects,
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
                    'message' => "Genie project authentication error"
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
        
        $genie_project->save();
        $created_projects = GenieProject::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();      
                
                
                return  Response::json([
                    'status' => 200,
                    'project' => $created_projects,
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
//////////////////////////////////////////////Genie Project/////////////////////////////////////////





   
//////////////////////////////////////////////Genie Skill/////////////////////////////////////////

    public function genie_all_skill(Request $request)
    {
     
        $genie_skill = GenieSkill::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
        return $genie_skill;  
    }

    public function add_resume_genie_skill(Request $request)
    {
        $genie_new_skill = new GenieSkill();
        $genie_new_skill->user_id = auth()->user()->id;
        $genie_new_skill->name = $request->name;
        $genie_new_skill->level = $request->level;
       
        $genie_new_skill->save();
        $created_skill = GenieSkill::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();

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
                    'message' => "Genie skill authentication error"
                ], 200);
            }
            else
            {
                $genie_skill->status = 'inactive';
                $genie_skill->save();
                $created_skill = GenieSkill::where([
                    ['user_id','=',auth()->user()->id],
                    ['status','=','active']
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'skill' => $created_skill,
                    'message' => "Genie skill status updated succesfully"
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
                    'message' => "Genie skill authentication error"
                ], 200);
            }
            else
            {
               
               
        
        // $genie_new_project->user_id = 1;
        $genie_skill->name = $request->name;
        $genie_skill->level = $request->level;
        $genie_skill->save();
        $created_skill = GenieSkill::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
                
                
                return  Response::json([
                    'status' => 200,
                    'skill' =>  $created_skill ,
                    'message' => "Genie skill status updated succesfully"
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
        $genie_contact = GenieContact::where('user_id', 1)->first();
        if ($genie_contact) {
            $genie_contact->email = $request->email;
            $genie_contact->user_id = auth()->user()->id;
            $genie_contact->phone = $request->phone;
            $genie_contact->website = $request->website;
            $genie_contact->address = $request->address;
            $genie_contact->areacode = $request->areacode;
            $genie_contact->city = $request->city;
            $genie_contact->country = $request->country;
         
         
            
           
            $genie_contact->save();
        } else {
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
        $genie_social = GenieSocial::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
        return $genie_social;  
    }

public function add_resume_genie_social(Request $request)
{
    $new_genie_social = new GenieSocial();
    $new_genie_social->user_id = auth()->user()->id;
    $new_genie_social->network_id = $request->network_id;
    $new_genie_social->user_name = $request->user_name;
    $new_genie_social->url = $request->url;
    
    $new_genie_social->save();

    // $connected_social = GenieSocial::where('user_id',auth()->user()->id)->get();
    $connected_social = GenieSocial::where([
        ['user_id','=',auth()->user()->id],
        ['status','=','active']
    ])->get();

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
    $connected_social = GenieSocial::where([
        ['user_id','=',auth()->user()->id],
        ['status','=','active']
    ])->get();     
            
            
            return  Response::json([
                'status' => 200,
                'social' => $connected_social ,
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
    
    $genie_social_id = $request->toogle_social_id;
    // $genie_social = GenieResumeComponent::where([
    //     ['component','=',$request->component],
    //     ['resume_id','=',$request->resume_id],
    //     ['component_id','=',$request->toogle_social_id]
    // ])->first();
 
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
            $genie_social->status = 'inactive';
            $genie_social->save();
            $connected_social = GenieSocial::where([
                ['user_id','=',auth()->user()->id],
                ['status','=','active']
            ])->get();  
            return  Response::json([
                'status' => 200,
                'social' => $connected_social,
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

    public function fetch_genie_spoken(Request $request)
    {
        $spoken = LanguageList::all();
        return $spoken;
    }

    public function genie_all_language(Request $request)
    {
        $genie_language = GenieLanguage::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
        return $genie_language;  
    }


    public function add_resume_genie_language(Request $request)
    {
        $check_if_exist = GenieLanguage::where([
            ['user_id','=',auth()->user()->id],
            ['language','LIKE',$request->language]
        ])->first();
        if($check_if_exist)
        {
            $check_if_exist->fluency = $request->fluency;
            $check_if_exist->save();

        }
        else
        {
            $genie_new_language = new GenieLanguage();
            $genie_new_language->user_id = auth()->user()->id;
            $genie_new_language->language = $request->language;
            $genie_new_language->fluency = $request->fluency;
            $genie_new_language->save();
        }
        
        $genie_language = GenieLanguage::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
        return  Response::json([
            'status' => 200,
            'language' => $genie_language,
            'message' => "Genie language added succesfully"
        ], 200);
    }
    

    public function update_resume_genie_language(Request $request)
    {
        $resume_genie_language_id = $request->language_id;
        $genie_language = GenieLanguage::where('id', $resume_genie_language_id)->first();
        if ($genie_language) {
            if ($genie_language->user_id != auth()->user()->id) {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie language authentication error"
                ], 200);
            } else {
                $genie_language->language = $request->language;
                $genie_language->fluency = $request->fluency;
                $genie_language->save();
                $genie_language = GenieLanguage::where([
                    ['user_id','=',auth()->user()->id],
                    ['status','=','active']
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'language' =>  $genie_language,
                    'message' => "Genie language status updated succesfully"
                ], 200);
            }
        } else {
            return  Response::json([
                'status' => 403,
                'message' => "Genie language not found"
            ], 200);
        }
    }

    public function toggle_resume_language(Request $request)
    {
        
        $genie_language_id = $request->toogle_language_id; 
        
        $genie_language = GenieLanguage::where('id',$genie_language_id)->first();
       
       
        if($genie_language)
        {
            if($genie_language->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie language authentication error"
                ], 200);
            }
            else
            {
                $genie_language->status = 'inactive';
                $genie_language->save();

                 $language = GenieLanguage::where([
                     ['user_id','=',auth()->user()->id],
                     ['status','=','active']
                 ])->get();

                return  Response::json([
                    'status' => 200,
                     'language' => $language,
                    'message' => "Genie language status updated succesfully"
                ], 200);
            }
            
        }
        else
        {
            return  Response::json([
                'status' => 403,
                'message' => "Genie language not found"
            ], 200);
        }




        
      




    }

    //////////////////////////////////////////////Genie Reference/////////////////////////////////////////
    public function genie_all_reference(Request $request)
    {
        //$genie_reference = GenieReference::where('user_id',auth()->user()->id)->get();
        $genie_reference = GenieReference::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
        return $genie_reference;  
        //sort by enddate
    } 

    public function add_resume_reference(Request $request)
    {
        // return auth()->user();
       

        $genie_reference = new GenieReference();
        $genie_reference->user_id = auth()->user()->id;
        $genie_reference->company = $request->company;
        $genie_reference->reference = $request->reference;
        $genie_reference->name = $request->name;
      
        $genie_reference->save();
        $created_reference = GenieReference::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();

        return  Response::json([
            'status' => 200,
            'message' => "Genie reference added succesfully",
            'reference' => $created_reference
        ], 200);
    }

    public function update_resume_reference(Request $request)
    {
        $genie_reference_id = $request->update_reference_id;
        $genie_reference = GenieReference::where('id',$genie_reference_id)->first();
       
        if ($genie_reference) {
            if ($genie_reference->user_id != auth()->user()->id) {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie reference authentication error"
                ], 200);
            }
            else
            {
                
                $genie_reference->company = $request->company;
                $genie_reference->reference = $request->reference;
                $genie_reference->name = $request->name;
               
                $genie_reference->save();
                $created_reference = GenieReference::where([
                    ['user_id','=',auth()->user()->id],
                    ['status','=','active']
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'reference' => $created_reference,
                    'message' => "Genie reference  updated succesfully"
                ], 200);
            }
        } else {
            return  Response::json([
                'status' => 403,
                'message' => "Genie reference not found"
            ], 200);
        }
    }

    public function toggle_resume_reference(Request $request)
    {
        
        $genie_reference_id = $request->toogle_reference_id; 
        
        $genie_reference = GenieReference::where('id',$genie_reference_id)->first();
       
       
        if($genie_reference)
        {
            if($genie_reference->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie reference authentication error"
                ], 200);
            }
            else
            {
                $genie_reference->status = 'inactive';
                $genie_reference->save();

                 $reference = GenieReference::where([
                     ['user_id','=',auth()->user()->id],
                     ['status','=','active']
                 ])->get();

                return  Response::json([
                    'status' => 200,
                     'reference' => $reference,
                    'message' => "Genie reference status updated succesfully"
                ], 200);
            }
            
        }
        else
        {
            return  Response::json([
                'status' => 403,
                'message' => "Genie reference not found"
            ], 200);
        }




        
      




    }
//////////////////////////////////////////////Genie Reference/////////////////////////////////////////
   


   //////////////////////////////////////////////Genie volunteer/////////////////////////////////////////
   public function genie_all_volunteer(Request $request)
   {
    //    $genie_volunteer = GenieVolunteer::where('user_id',auth()->user()->id)->get();
       $genie_volunteer = GenieVolunteer::where([
        ['user_id','=',auth()->user()->id],
        ['status','=','active']
    ])->get();
       return $genie_volunteer;  
       //sort by enddate
   } 

   public function add_resume_volunteer(Request $request)
   {
       // return auth()->user();
      

       $genie_volunteer = new GenieVolunteer();
       $genie_volunteer->user_id = auth()->user()->id;
       $genie_volunteer->organization = $request->organization;
       $genie_volunteer->position = $request->position;
       $genie_volunteer->url = $request->url;
       $genie_volunteer->start_date = $request->start_date;
       $genie_volunteer->end_date = $request->end_date;
       $genie_volunteer->summary = $request->summary;
       $genie_volunteer->save();
       $created_volunteer = GenieVolunteer::where([
        ['user_id','=',auth()->user()->id],
        ['status','=','active']
    ])->get();

       return  Response::json([
           'status' => 200,
           'message' => "Genie volunteer added succesfully",
           'volunteer' => $created_volunteer
       ], 200);
   }


   public function update_resume_volunteer(Request $request)
   {
       $genie_volunteer_id = $request->update_volunteer_id;
       $genie_volunteer = GenieVolunteer::where('id',$genie_volunteer_id)->first();
      
       if ($genie_volunteer) {
           if ($genie_volunteer->user_id != auth()->user()->id) {
               return  Response::json([
                   'status' => 200,
                   'message' => "Genie reference authentication error"
               ], 200);
           }
           else
           {
               
            $genie_volunteer->organization = $request->organization;
            $genie_volunteer->position = $request->position;
            $genie_volunteer->url = $request->url;
            $genie_volunteer->start_date = $request->start_date;
            $genie_volunteer->end_date = $request->end_date;
            $genie_volunteer->summary = $request->summary;
              
               $genie_volunteer->save();
               $created_volunteer = GenieVolunteer::where([
                ['user_id','=',auth()->user()->id],
                ['status','=','active']
            ])->get();
               return  Response::json([
                   'status' => 200,
                   'volunteer' => $created_volunteer,
                   'message' => "Genie reference  updated succesfully"
               ], 200);
           }
       } else {
           return  Response::json([
               'status' => 403,
               'message' => "Genie reference not found"
           ], 200);
       }
   }

   public function toggle_resume_volunteer(Request $request)
   {
       
       $genie_volunteer_id = $request->toogle_volunteer_id; 
       
       $genie_volunteer = GenieVolunteer::where('id',$genie_volunteer_id)->first();
      
      
       if($genie_volunteer)
       {
           if($genie_volunteer->user_id != auth()->user()->id)
           {
               return  Response::json([
                   'status' => 200,
                   'message' => "Genie volunteer authentication error"
               ], 200);
           }
           else
           {
               $genie_volunteer->status = 'inactive';
               $genie_volunteer->save();

                $created_volunteer = GenieVolunteer::where([
                    ['user_id','=',auth()->user()->id],
                    ['status','=','active']
                ])->get();

               return  Response::json([
                   'status' => 200,
                    'volunteer' =>  $created_volunteer,
                   'message' => "Genie volunteer status updated succesfully"
               ], 200);
           }
           
       }
       else
       {
           return  Response::json([
               'status' => 403,
               'message' => "Genie volunteer not found"
           ], 200);
       }




       
     




   }
//////////////////////////////////////////////Genie volunteer/////////////////////////////////////////
  

//////////////////////////////////////////////Genie interest/////////////////////////////////////////
    public function genie_all_interest(Request $request)
    {
        // $genie_interest = GenieInterest::where('user_id',auth()->user()->id)->get();
        $genie_interest = GenieInterest::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
        return $genie_interest;  
        //sort by enddate
    } 

    public function add_resume_interest(Request $request)
    {
        // return auth()->user();
    
        $genie_interest_exist = GenieInterest::where([
            ['user_id','=',auth()->user()->id],
            ['name','LIKE',$request->name]
        ])->first();
        if(!$genie_interest_exist)
        {
            $genie_interest = new GenieInterest();
            $genie_interest->user_id = auth()->user()->id;
            $genie_interest->name = $request->name;
            $genie_interest->save();
        }
    
        // $created_interest= GenieInterest::where('user_id',auth()->user()->id)->get();
        $created_interest = GenieInterest::where([
            ['user_id','=',auth()->user()->id],
            ['status','=','active']
        ])->get();
        return  Response::json([
            'status' => 200,
            'message' => "Genie interest added succesfully",
            'interest' => $created_interest
        ], 200);
    }



    public function update_resume_interest(Request $request)
    {
        $genie_interest_id = $request->update_interest_id;
        $genie_interest = GenieInterest::where('id',$genie_interest_id)->first();
    
        if ($genie_interest) {
            if ($genie_interest->user_id != auth()->user()->id) {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie interest authentication error"
                ], 200);
            }
            else
            {
                
            $genie_interest->name = $request->name;
            
            
                $genie_interest->save();
                
                $created_interest = GenieInterest::where([
                    ['user_id','=',auth()->user()->id],
                    ['status','=','active']
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'interest' => $created_interest,
                    'message' => "Genie interest  updated succesfully"
                ], 200);
            }
        } else {
            return  Response::json([
                'status' => 403,
                'message' => "Genie interest not found"
            ], 200);
        }
    }

    public function toggle_resume_interest(Request $request)
    {
        
        $genie_interest_id = $request->toogle_interest_id; 
        
        $genie_interest = GenieInterest::where('id',$genie_interest_id)->first();
       
       
        if($genie_interest)
        {
            if($genie_interest->user_id != auth()->user()->id)
            {
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie interest authentication error"
                ], 200);
            }
            else
            {
                $genie_interest->status = 'inactive';
                $genie_interest->save();

                 $interest = GenieInterest::where([
                     ['user_id','=',auth()->user()->id],
                     ['status','=','active']
                 ])->get();

                return  Response::json([
                    'status' => 200,
                     'interest' => $interest,
                    'message' => "Genie interest status updated succesfully"
                ], 200);
            }
            
        }
        else
        {
            return  Response::json([
                'status' => 403,
                'message' => "Genie interest not found"
            ], 200);
        }




        
      




    }
//////////////////////////////////////////////Genie interest/////////////////////////////////////////




    // public function add_user_json(Request $request)
    // {
    //     Storage::makeDirectory('data/'.auth()->user()->id);

    //     Storage::makeDirectory('data/'.auth()->user()->id);

    //     try {
    //         Storage::copy("resume.json", "data/".auth()->user()->id."/resume.json");
    //     } catch (Exception $e) {
    //     }
       

    //     return "echo /user/preview/json to view resume.";
    // }

    // public function preview_json(Request $request)
    // {
    //     exec("cd ../storage/app/data/".auth()->user()->id.";resume export index.html --theme even", $output);
    //     $html = Storage::get('data/'.auth()->user()->id.'/index.html');
    //     echo($html);
    // }
    public function add_user_json(Request $request)
    {
        Storage::makeDirectory('data/1');

        // Storage::makeDirectory('data/1');
        Storage::copy("resume.json", "data/1/resume.json");

        try {
            Storage::copy("resume.json", "data/1/resume.json");
        } catch (Exception $e) {
            return 'je';
        }
       

        return "echo /user/preview/json to view resume.";
    }

    public function preview_json(Request $request)
    {
        exec("cd ../storage/app/data/1;resume export index.html", $output);
        $html = Storage::get('data/1/index.html');
        echo($html);
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

    public function get_all_genie_resume(Request $request)
    {
        $all_resumes = GenieResume::where('user_id',auth()->user()->id)->get();
        return $all_resumes;
    }

  //1 == BASIC
    //2 == CONTACT
    //3 == SOCIAL
    //4 == WORK EXP
    //5 == SKILLS
    //6 == PROJECTS
    //7 == AWARDS
    //8 == LANGUAGE
    //9 == INTEREST
    //10 == EDUCATION
    //11 == VOLUNTEER
    //12 == REFERENCE



    public function add_genie_resume(Request $request)
    {
        $genie_resume = new GenieResume();
        $genie_resume->name = $request->name;
        $genie_resume->user_id = auth()->user()->id;
        $genie_resume->theme_id = 1;
        $genie_resume->status = '0';
        $genie_resume->save();

        $GlobalService = new GlobalServiceProvider;
        $GlobalService->activate_components($genie_resume->id);
    

      
        $resumes = GenieResume::where('user_id',auth()->user()->id)->get();
        return  Response::json([
            'status' => 200,
            'message' => "Genie resume added succesfully",
            'added_resume' => $resumes,
        ], 200);
        
    }

    

    public function get_all_active_areas(Request $request)
    {
        // $activated_components = GenieResumeComponent::where('resume_id',$request->resume_id)->delete();
       
        $GlobalService = new GlobalServiceProvider;
        $GlobalService->activate_components($request->resume_id);

        $genie_social = GenieResumeComponent::join('genie_socials','genie_resume_components.component_id','=','genie_socials.id')
        ->where([
          ['genie_resume_components.component','=',3],
          ['genie_resume_components.user_id','=',auth()->user()->id],
            // ['genie_resume_components.com_status','=','active'],
            ['genie_resume_components.resume_id','=',$request->resume_id]
        ])->get();
            
        


        $genie_work_exp = GenieResumeComponent::join('genie_work_exps','genie_resume_components.component_id','=','genie_work_exps.id')
        ->where([
          ['genie_resume_components.component','=',4],
           // ['genie_resume_components.com_status','=','active'],
           ['genie_resume_components.user_id','=',auth()->user()->id],
            ['genie_resume_components.resume_id','=',$request->resume_id]
        ])->get();

        $genie_skill = GenieResumeComponent::join('genie_skills','genie_resume_components.component_id','=','genie_skills.id')
        ->where([
          ['genie_resume_components.component','=',5],
         //   ['genie_resume_components.com_status','=','active'],
         ['genie_resume_components.user_id','=',auth()->user()->id],
            ['genie_resume_components.resume_id','=',$request->resume_id]

        ])->get();

        $genie_project = GenieResumeComponent::join('genie_projects','genie_resume_components.component_id','=','genie_projects.id')
        ->where([
          ['genie_resume_components.component','=',6],
          ['genie_resume_components.user_id','=',auth()->user()->id],
          //  ['genie_resume_components.com_status','=','active']
        ])->get();

        $genie_award = GenieResumeComponent::join('genie_awards','genie_resume_components.component_id','=','genie_awards.id')
        ->where([
          ['genie_resume_components.component','=',7],
          ['genie_resume_components.user_id','=',auth()->user()->id],
          //  ['genie_resume_components.com_status','=','active']
        ])->get();

        $genie_language = GenieResumeComponent::join('genie_languages','genie_resume_components.component_id','=','genie_languages.id')
        ->where([
          ['genie_resume_components.component','=',8],
          ['genie_resume_components.user_id','=',auth()->user()->id],
            //['genie_resume_components.com_status','=','active']
        ])->get();

        $genie_interest = GenieResumeComponent::join('genie_interests','genie_resume_components.component_id','=','genie_interests.id')
        ->where([
          ['genie_resume_components.component','=',9],
          ['genie_resume_components.user_id','=',auth()->user()->id],
          //  ['genie_resume_components.com_status','=','active']
        ])->get();
            
        $genie_education = GenieResumeComponent::join('genie_education','genie_resume_components.component_id','=','genie_education.id')
        ->where([
          ['genie_resume_components.component','=',10],
          ['genie_resume_components.user_id','=',auth()->user()->id],
          //  ['genie_resume_components.com_status','=','active']
        ])->get();
        $genie_volunteer = GenieResumeComponent::join('genie_volunteers','genie_resume_components.component_id','=','genie_volunteers.id')
        ->where([
          ['genie_resume_components.component','=',11],
          ['genie_resume_components.user_id','=',auth()->user()->id],
           // ['genie_resume_components.com_status','=','active']
        ])->get();

        $genie_reference = GenieResumeComponent::join('genie_references','genie_resume_components.component_id','=','genie_references.id')
        ->where([
          ['genie_resume_components.component','=',12],
          ['genie_resume_components.user_id','=',auth()->user()->id],
           // ['genie_resume_components.com_status','=','active']
        ])->get();







  
           
        
        // return  Response::json([
        //     'status' => 200,
        //     'message' => "Genie found",
        //     'work' => $genie_work_exp,
        //     'education' => $genie_education,
         
        // ], 200);

             return  Response::json([
            'status' => 200,
            'message' => "Genie found",
            'work' => $genie_work_exp,
            // 'basic' => $genie_basic,
            'project' => $genie_project,
            'skill' => $genie_skill,
            'award' => $genie_award,
            'education' => $genie_education,
            'social' => $genie_social,
            // 'contact' => $genie_contact,
            'volunteer' => $genie_volunteer,
            'reference' => $genie_reference,
            'interest' => $genie_interest,
            'language' => $genie_language
        ], 200);


    }


    public function genie_toggle_component(Request $request)
    {
        $component = $request->component;
        $component_id = $request->component_id;
        $resume_id = $request->resume_id;
       // $toggle_status = $request->status;


        
            $GenieResumeComponent = GenieResumeComponent::where([
                ['component','=',$component],
                ['component_id','=',$component_id],
                ['resume_id','=',$resume_id]
            ])->first();
            if($GenieResumeComponent)
            {
                if($GenieResumeComponent->com_status == 'inactive')
                {
                    $GenieResumeComponent->com_status = 'active';
                    $GenieResumeComponent->save();
                }
                else
                {
                    $GenieResumeComponent->com_status = 'inactive';
                    $GenieResumeComponent->save();
                }
                
            }
            if($component == 3)
            {
                $genie_social = GenieResumeComponent::join('genie_socials','genie_resume_components.component_id','=','genie_socials.id')
                ->where([
                  ['genie_resume_components.component','=',3],
                    // ['genie_resume_components.com_status','=','active'],
                    ['genie_resume_components.resume_id','=',$request->resume_id]
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie found",
                    'social' => $genie_social,
                   
                ], 200);
                
            }
            if($component == 4)
            {
                $genie_work_exp = GenieResumeComponent::join('genie_work_exps','genie_resume_components.component_id','=','genie_work_exps.id')
                ->where([
                  ['genie_resume_components.component','=',4],
               //     ['genie_resume_components.com_status','=','active'],
                    ['genie_resume_components.resume_id','=',$request->resume_id]
                ])->get();

                return  Response::json([
                    'status' => 200,
                    'message' => "Genie found",
                    'work' => $genie_work_exp,
                   
                ], 200);
            }
            if($component == 5)
            {
                $genie_skill = GenieResumeComponent::join('genie_skills','genie_resume_components.component_id','=','genie_skills.id')
                ->where([
                ['genie_resume_components.component','=',5],
                //   ['genie_resume_components.com_status','=','active'],
                    ['genie_resume_components.resume_id','=',$request->resume_id]

                ])->get();

                return  Response::json([
                    'status' => 200,
                    'message' => "Genie found",
                    'skill' => $genie_skill,
                   
                ], 200);
            }
            if($component == 6)
            {
                $genie_project = GenieResumeComponent::join('genie_projects','genie_resume_components.component_id','=','genie_projects.id')
                ->where([
                  ['genie_resume_components.component','=',6],
                  //  ['genie_resume_components.com_status','=','active']
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie found",
                    'project' => $genie_project,
                   
                ], 200);
            }
            if($component == 7)
            {
                $genie_award = GenieResumeComponent::join('genie_awards','genie_resume_components.component_id','=','genie_awards.id')
                ->where([
                  ['genie_resume_components.component','=',7],
                  //  ['genie_resume_components.com_status','=','active']
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie found",
                    'award' => $genie_award,
                   
                ], 200);
            }
            if($component == 8)
            {
                $genie_language = GenieResumeComponent::join('genie_languages','genie_resume_components.component_id','=','genie_languages.id')
                ->where([
                ['genie_resume_components.component','=',8],
                    //['genie_resume_components.com_status','=','active']
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie found",
                    'language' => $genie_language,
                   
                ], 200);
            }
            if($component == 9)
            {
              $genie_interest = GenieResumeComponent::join('genie_interests','genie_resume_components.component_id','=','genie_interests.id')
                ->where([
                ['genie_resume_components.component','=',9],
                   
                ])->get();
                return  Response::json([
                    'status' => 200,
                    'message' => "Genie found",
                    'interest' => $genie_interest,
                   
                ], 200);
            }
            if($component == 10)
            {
                $genie_education = GenieResumeComponent::join('genie_education','genie_resume_components.component_id','=','genie_education.id')
                        ->where([
                        ['genie_resume_components.component','=',10],
                        //  ['genie_resume_components.com_status','=','active']
                        ])->get();

                        return  Response::json([
                            'status' => 200,
                            'message' => "Genie found",
                            'education' => $genie_education,
                           
                        ], 200);

            }
            if($component == 11)
            {
                $genie_volunteer = GenieResumeComponent::join('genie_volunteers','genie_resume_components.component_id','=','genie_volunteers.id')
                ->where([
                  ['genie_resume_components.component','=',11],
                   // ['genie_resume_components.com_status','=','active']
                ])->get();

                        return  Response::json([
                            'status' => 200,
                            'message' => "Genie found",
                            'volunteer' => $genie_volunteer,
                           
                        ], 200);

            }
            if($component == 12)
            {
                $genie_reference = GenieResumeComponent::join('genie_references','genie_resume_components.component_id','=','genie_references.id')
                ->where([
                  ['genie_resume_components.component','=',12],
                   // ['genie_resume_components.com_status','=','active']
                ])->get();

                return  Response::json([
                    'status' => 200,
                    'message' => "Genie found",
                    'reference' => $genie_reference,
                   
                ], 200);

            }

           
    }




    public function create_resume_json(Request $request)
    {
     
        $resume = [];

            $genie_basic = GenieBasic::where('user_id',auth()->user()->id)->first();
            $genie_contact = GenieContact::where('user_id',auth()->user()->id)->first();
            
       
            $basic_data = [];
            $basic_data['name'] = $genie_basic->name;
            $basic_data['label'] = $genie_basic->label;
            $basic_data['image'] = $genie_basic->image;
            $basic_data['email'] = $genie_contact->email;
            $basic_data['phone'] = $genie_contact->phone;
            $basic_data['url'] = $genie_contact->website;
            $basic_data['summary'] = $genie_basic->summary;
            //array_push($resume['basics'],$basic_data);
            //return json_encode(array('basics' => $basic_data));
            $resume['basics'] = (object)$basic_data;
            $genie_social = GenieResumeComponent::join('genie_socials','genie_resume_components.component_id','=','genie_socials.id')
            ->where([
              ['genie_resume_components.component','=',3],
                 ['genie_resume_components.com_status','=','active'],
                 ['genie_resume_components.user_id','=',auth()->user()->id],
                ['genie_resume_components.resume_id','=',$request->resume_id]
                
            ])->get();
            $resume['profile'] = [];
            foreach($genie_social as $social)
            {
                $profile_data = [];
                $netwrok_name = SocialConnect::where('id',$social->network_id)->first();
                $profile_data['network'] = $netwrok_name->name;
                $profile_data['username'] = $social->user_name;
                $profile_data['url'] = $social->url;
                
                array_push($resume['profile'],$profile_data);
            }
            $resume['location'] = [];
            $location_data = [];
           // $netwrok_name = SocialConnect::where('id',$social->network_id)->first();
            $location_data['address'] = $genie_contact->address;
            $location_data['postalCode'] = $genie_contact->areacode;
            $location_data['city'] = $genie_contact->city;
            $location_data['countryCode'] = $genie_contact->country;
            
            // array_push($resume['location'],$location_data);
            $resume['location'] = (object)$basic_data;
       
       
        
        $genie_work_exp = GenieResumeComponent::join('genie_work_exps','genie_resume_components.component_id','=','genie_work_exps.id')
        ->where([
          ['genie_resume_components.component','=',4],
          ['genie_resume_components.com_status','=','active'],
          ['genie_resume_components.user_id','=',auth()->user()->id],
            ['genie_resume_components.resume_id','=',$request->resume_id]
        ])->get();
     
        $resume['work'] = [];
        
        foreach($genie_work_exp as $work)
        {
            $work_data = [];
            $work_data['name'] = $work->company;
            $work_data['position'] = $work->position;
            $work_data['url'] = $work->website;
            $work_data['startDate'] = $work->start_date;
            $work_data['endDate'] = $work->end_date;
            $work_data['summary'] = $work->summary;
            array_push($resume['work'],$work_data);
        }
       
        $resume['volunteer'] = [];
        $genie_volunteer = GenieResumeComponent::join('genie_volunteers','genie_resume_components.component_id','=','genie_volunteers.id')
                ->where([
                  ['genie_resume_components.component','=',11],
                    ['genie_resume_components.com_status','=','active'],
                    ['genie_resume_components.user_id','=',auth()->user()->id],
                    ['genie_resume_components.resume_id','=',$request->resume_id]
                ])->get();

        foreach($genie_volunteer as $volunteer)
        {
            $volunteer_data = [];
            $volunteer_data['organization'] = $volunteer->organization;
            $volunteer_data['position'] = $volunteer->position;
            $volunteer_data['url'] = $volunteer->url;
            $volunteer_data['startDate'] = $volunteer->start_date;
            $volunteer_data['endDate'] = $volunteer->end_date;
            $volunteer_data['summary'] = $volunteer->summary;
            array_push($resume['volunteer'],$volunteer_data);
        }


        $resume['education'] = [];
        $genie_education = GenieResumeComponent::join('genie_education','genie_resume_components.component_id','=','genie_education.id')
        ->where([
        ['genie_resume_components.component','=',10],
         ['genie_resume_components.com_status','=','active'],
         ['genie_resume_components.user_id','=',auth()->user()->id],
         ['genie_resume_components.resume_id','=',$request->resume_id]
        ])->get();

        foreach($genie_education as $education)
        {
            $education_data = [];
            $education_data['institution'] = $education->institution;
            $education_data['url'] = $education->url;
            $education_data['area'] = $education->area;
            $education_data['studyType'] = $education->studyType;
            $education_data['startDate'] = $education->start_date;
            $education_data['endDate'] = $education->end_date;
            $education_data['score'] = $education->score;
            array_push($resume['education'],$education_data);
        }




        $resume['award'] = [];
        $genie_award = GenieResumeComponent::join('genie_awards','genie_resume_components.component_id','=','genie_awards.id')
                ->where([
                  ['genie_resume_components.component','=',7],
                   ['genie_resume_components.com_status','=','active'],
                   ['genie_resume_components.user_id','=',auth()->user()->id],
                   ['genie_resume_components.resume_id','=',$request->resume_id]
                ])->get();
        

        foreach($genie_award as $award)
        {
            $award_data = [];
            $award_data['title'] = $award->title;
            $award_data['date'] = $award->date;
            $award_data['awarder'] = $award->awarder;
            $award_data['summary'] = $award->summary;
            
            array_push($resume['award'],$award_data);
        }

        $resume['skill'] = [];
        $genie_skill = GenieResumeComponent::join('genie_skills','genie_resume_components.component_id','=','genie_skills.id')
                ->where([
                ['genie_resume_components.component','=',5],
                  ['genie_resume_components.com_status','=','active'],
                  ['genie_resume_components.user_id','=',auth()->user()->id],
                    ['genie_resume_components.resume_id','=',$request->resume_id]

                ])->get();
        

        foreach($genie_skill as $skill)
        {
            $skill_data = [];
            $skill_data['name'] = $skill->name;
            $skill_data['level'] = $skill->level;
            
            
            array_push($resume['skill'],$skill_data);
        }

        $resume['languages'] = [];
        $genie_language = GenieResumeComponent::join('genie_languages','genie_resume_components.component_id','=','genie_languages.id')
                ->where([
                ['genie_resume_components.component','=',8],
                    ['genie_resume_components.com_status','=','active'],
                    ['genie_resume_components.user_id','=',auth()->user()->id],
                    ['genie_resume_components.resume_id','=',$request->resume_id]
                ])->get();
        

        foreach($genie_language as $language)
        {
            $language_data = [];
            $language_data['language'] = $language->language;
            $language_data['fluency'] = $language->fluency;
            
            
            array_push($resume['languages'],$language_data);
        }

        $resume['interests'] = [];
       
                $genie_interest = GenieResumeComponent::join('genie_interests','genie_resume_components.component_id','=','genie_interests.id')
                ->where([
                ['genie_resume_components.component','=',9],
                ['genie_resume_components.com_status','=','active'],
                ['genie_resume_components.user_id','=',auth()->user()->id],
                ['genie_resume_components.resume_id','=',$request->resume_id]
                   
                ])->get();

        foreach($genie_interest as $interest)
        {
            $interest_data = [];
            $interest_data['name'] = $interest->name;
            
            
            
            array_push($resume['interests'],$interest_data);
        }

        $resume['references'] = [];
       
        $genie_reference = GenieResumeComponent::join('genie_references','genie_resume_components.component_id','=','genie_references.id')
                ->where([
                  ['genie_resume_components.component','=',12],
                    ['genie_resume_components.com_status','=','active'],
                    ['genie_resume_components.user_id','=',auth()->user()->id],
                    ['genie_resume_components.resume_id','=',$request->resume_id]
                ])->get();

        foreach($genie_reference as $reference)
        {
            $references_data = [];
            $references_data['name'] = $reference->name;
            $references_data['reference'] = $reference->reference;
            $references_data['company'] = $reference->company;

            
            
            
            array_push($resume['references'],$references_data);
        }

        $resume['projects'] = [];
       
        $genie_project = GenieResumeComponent::join('genie_projects','genie_resume_components.component_id','=','genie_projects.id')
        ->where([
          ['genie_resume_components.component','=',6],
            ['genie_resume_components.com_status','=','active'],
            ['genie_resume_components.user_id','=',auth()->user()->id],
            ['genie_resume_components.resume_id','=',$request->resume_id]
        ])->get();

        foreach($genie_project as $project)
        {
            $projects_data = [];
            $projects_data['name'] = $project->name;
            $projects_data['company_name'] = $project->company_name;
            $projects_data['description'] = $project->summary;
            $projects_data['startDate'] = $project->start_date;
            $projects_data['end_date'] = $project->end_date;
            $projects_data['url'] = $project->url;

            
            
            
            array_push($resume['projects'],$projects_data);
        }

        $json_data = json_encode($resume);

        //Storage::copy("resume.json", "data/1/resume.json");

        $path = storage_path('app/data/'.auth()->user()->id);
        if (file_put_contents($path."/resume".$request->resume_id.".json", $json_data))
        {
            copy( storage_path('app/data/1/resume1.json'), storage_path('app/data/1/resume.json'));
        //  if (file_put_contents($path."/resume.json", $json_data))
        // {
           // echo "JSON file created successfully...";
            // exec("sh r.sh", $output);
            
           // exec("cd ../storage/app/data/".auth()->user()->id.";ls", $output3);
            // $html = Storage::get('data/'.auth()->user()->id.'/index.html');
            // echo($html);
          // return $output;


         
         
        //   exec("cd ../storage/app/data/".auth()->user()->id.";resume export index".$request->resume_id.".html", $output3);
         
         
        //   $text= file_get_contents($path."/index".$request->resume_id.".html");
        //   $resume = GenieResume::where('id',$request->resume_id)->first();
        //   $resume->content = $text;
        //   $resume->save();
           
        }
             
        else 
        {
            echo "Oops! Error creating json file...";
        }
            // return $resume;
       

    }

    public function get_all_active_themes(Request $request)
    {
        $themes = GenieTheme::where('status','active')->get();
        return $themes;
    }


    public function store_resume_content(Request $request)
    {
        $path = storage_path('app/data/'.auth()->user()->id);
        $text= file_get_contents($path."/index1.html");
        $resume = GenieResume::where('id',1)->first();
        $resume->content = $text;
        $resume->save();
        echo $text;
    }


    public function render_resume(Request $request)
    {
        
        $resume = GenieResume::where('id',1)->first();
        if($resume)
        {
            return $resume;
        }
        else
        {
            return 'Error';
        }
    }

    




}
