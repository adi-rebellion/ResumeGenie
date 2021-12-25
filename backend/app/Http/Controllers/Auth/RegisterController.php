<?php

namespace App\Http\Controllers\Auth;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\ContactItem;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use App\Notifications\VerifyEmail;
use Exception;
use Response;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'password' => ['required','min:6'],


        ]);

        $salt1 = env('PASSWORD_SALT_1');
        $salt2 = env('PASSWORD_SALT_2');

        $contact_exist = ContactItem::where('value', 'LIKE', $request->email)->first();
        if (!$contact_exist) {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->save();

            $contact_item = new ContactItem();
            $contact_item->value = $request->email;
            $contact_item->belongs_to = $contact->id;
            $contact_item->contact_item_type = 'email';
            $contact_item->verification_status = 'not_verified';

            $contact_item->created_by = $contact->id;
            $contact_item->status = 'off';
            $contact_item->save();

            // $contact_item_re = ContactItem::where('id', $contact_item->id)->first();
            $contact_item->verification_code = sha1($contact_item->id.$contact->id.$request->email);
            $contact_item->save();

            // $ContactItem = ContactItem::where('id', $contact_item->id)->first();


            try {
                // send verification email via laravel horizon
                Notification::route('mail', $request->email)->notify(new VerifyEmail($contact_item));
            } catch (Exception $e) {
                // Sentry
            }

            $user = new User();
            $user->contact_id = $contact->id;
            $user->password = sha1($salt1.$request->password.$salt2);
            $user->save();


            return Response::json([
                'status' => 200,
                'command' => 'success',
                'message' => "Please verify your email so we can create your user account."
            ], 200);
        } else {
            if ($contact_exist->verification_status == 'verified') {
                return Response::json([
                    'status' => 200,
                    'command' => 'error',
                    'message' => "Email already exists."
                ], 200);
            } else {
                $contact = new Contact();
                $contact->name = $request->first_name.' '.$request->last_name;
                $contact->save();
                $contact_exist->belongs_to = $contact->id;
                $contact_exist->created_by = $contact->id;
                $contact_exist->status = 'off';
                $contact_exist->save();

                $contact_item_re = ContactItem::where('id', $contact_exist->id)->first();
                $contact_item_re->verification_code = sha1($contact_item_re->id.$contact->id.$request->email);
                $contact_item_re->save();

                //send verification email via laravel horizon
                $ContactItem = ContactItem::where('id', $contact_exist->id)->first();
                // try {
                //     Notification::route('mail', $request->email)->notify(new VerifyEmail($ContactItem));
                // } catch (Exception $e) {
                //     // Sentry
                // }

                $user = new User();
                $user->contact_id = $contact->id;
                $user->password = sha1($salt1.$request->password.$salt2);
                $user->save();


                return Response::json([
                    'status' => 200,
                    'command' => 'error',
                     'message' => "Please verify your email so we can create your user account."
                    //'message' => 'Please do verify your email'
                ], 200);
            }
        }
    }
}
