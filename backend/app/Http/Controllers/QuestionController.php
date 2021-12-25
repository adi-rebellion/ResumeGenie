<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Event;
use App\OrgToUser;
use App\Question;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Vote;
use Response;

class QuestionController extends Controller
{

    public function createNewQuestion(Request $request)
    {
        $new_question = new Question();

        $new_question->question_text = $request->question_text;
        $new_question->event_id = $request->event_id;
        $new_question->asked_by = auth()->user()->id;
        $new_question->question_type = 'question';
        $new_question->status  = 'on';
        $new_question->save();
        $event_asso_ques = Question::where('event_id',$request->event_id)->latest()->get();
        $event = Event::where('id',$request->event_id)->first();
        $event->total_questions = ($event->total_questions)+1;
        $event->save();

        return  Response::json([
            'status' => 200,
            'code' => 'QUESTION-CREATED',
            'questions' => $event_asso_ques,
            'message' => "Question created successfully."
        ], 200);

    }

    public function upVoteQuestion(Request $request)
    {
        $question_id = $request->question_id;
        $user_id = auth()->user()->id;
        $vote_exist = Vote::where([
            ['question_id','=',$question_id],
            ['vote_by','=',$user_id]
        ])->first();
        $question = Question::where('id',$question_id)->first();
        if(!$vote_exist)
        {
            $new_vote = new Vote();
            $new_vote->question_id = $question_id;
            $new_vote->vote_by = $user_id;
            $new_vote->status = 'on';
            $new_vote->save();
            $question->vote_count = $question->vote_count+1;
            $question->save();
            return  Response::json([
                'status' => 200,
                'code' => 'UPVOTE-SUCCESS',
                'message' => "Successfully up-voted."
            ], 200);
        }
        else
        {
            if($vote_exist->status == 'off' || $vote_exist->status == 'deleted')
            {
                $vote_exist->status = 'on';
                $vote_exist->save();
                $question->vote_count = $question->vote_count+1;
                $question->save();
                return  Response::json([
                    'status' => 200,
                    'code' => 'UPVOTE-SUCCESS',
                    'message' => "Successfully up-voted."
                ], 200);
            }
            else
            {
                $vote_exist->status = 'off';
                $vote_exist->save();
                $question->vote_count = $question->vote_count-1;
                $question->save();
                return  Response::json([
                    'status' => 200,
                    'code' => 'UPVOTE-REMOVED',
                    'message' => "Successfully removed your up-voted."
                ], 200);
            }
        }

    }

    public function registerAnswer(Request $request)
    {
        $answer = new Answer();
        $answer->event_id = $request->event_id;
        $answer->answer_text = $request->answer_text;
        $org_to_eve = Event::where('id',$request->event_id)->first();
        $answer->question_id = $request->question_id;
        $answer->answered_added_by = auth()->user()->id;

        $answer->answer_by_name = $request->answer_by_name;
        // $auth_role = OrgToUser::where([
        //     ['org_id','=',$org_to_eve->org_event_id],
        //     ['user_id','=',auth()->user()->id]
        // ])->first();
        $answer->answer_by_title = $request->answer_by_title;
        $answer->status = 'on';
        $answer->save();
        $question = Question::where('event_id',$request->event_id)->get();
        $event = Event::where('id',$request->event_id)->first();
        $event->total_answers = ($event->total_answers)+1;
        $event->save();
        return  Response::json([
            'status' => 200,
            'code' => 'ANSWER-REGISTERED',
            'question' => $question,
            'message' => "Answer registered successfully."
        ], 200);

    }

    // public function getTopListed(Request $request)
    // {

    // }
}
