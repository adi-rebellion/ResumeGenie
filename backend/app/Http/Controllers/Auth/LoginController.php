<?php

namespace App\Http\Controllers\Auth;

use App\ContactItem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Carbon\Carbon;
use Exception;
use Response;
use Illuminate\Support\Facades\Cookie;
use JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $salt1 = env('PASSWORD_SALT_1');
        $salt2 = env('PASSWORD_SALT_2');
        $password = sha1($salt1.$request->password.$salt2);
       

        $check_contact = ContactItem::where([
            ['value','=',$email],
            ['contact_item_type','=','email'],
            ['verification_status','=','verified']
        ])->first();

        if ($check_contact) {
            $user = User::where('contact_id', $check_contact->belongs_to)->first();
            if ($user->password == $password) {

                // $payload = JWTFactory::sub($user->id)
                // ->email($request->email)
                // ->password($request->password)
                // ->make();
          

       
            //    $token = JWTAuth::encode($payload);
            //    $decode_token = JWTAuth::decode($token);
            //    return $decode_token;

            //    $data = Http::asForm()->post('https://www.thehiringco.com/api-auth/UserCredential/', [
            //        'email' => $request->email,
            //        'password' => $request->password,
            //        'token' =>  $token
            //    ]);
              
            //    return $data;
       
                auth('api')->login($user);

                $token = auth('api')->login($user);


                $this->addJWTCookie($token);

                //create a cookie http only and same site
                return  Response::json([
                    'status' => 200,
                    'command' => 'success',
                    'code' => 'LOGIN-SUCCESS',
                    'message' => "Successfully logged-in.",
                    'data' => [
                        'token' => $token,
                        'user' => $this->getParseAuthUser(),
                        'domain' => env('APP_HOST')
                    ]
                ], 200);
            }
        }

        return Response::json([
            'status' => 403,
            'command' => 'error',
            'message' => "Incorrect username or password."
        ], 200);
    }

    public function login_api(Request $request)
    {
      
       
        $payload = JWTFactory::sub(1)
         ->email('rks@iwynoworks.com')
         ->password('1!Rakesh')
         ->make();
   
    

    $token = JWTAuth::encode($payload);
        $response = Http::asForm()->post('https://www.thehiringco.com/api-auth/UserCredential/', [
            'email' => 'rks@iwynoworks.com',
            'password' => '1!Rakesh',
            'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InJrc0Bpd3lub3dvcmtzLmNvbSIsInBhc3N3b3JkIjoiMSFSYWtlc2gifQ.sk4p-BIktG7Dzc5Id0HbYRZ0h7dvuMnBSx89W28kL4Y'
        ]);
        return $token;
    }
    

    protected function addJWTCookie($token)
    {
        setcookie("token", $token, [
            'expires' => time() + 86400,
            'path' => '/',
            'domain' => env('APP_HOST'),
            'secure' => false,
            'httponly' => true,
            // 'samesite' => 'lax',
        ]);
    }
    public function addCookie(Request $request)
    {
        $token = $request->token;
        $host = $request->host;
        if (!$host) {
            $host = env('APP_HOST');
        }
        $data = setcookie("token", $token, [
            'expires' => time() + 86400,
            'path' => '/',
            'domain' =>  $host,
            'secure' => false,
            'httponly' => true,
            // 'samesite' => 'lax',
        ]);
        return [
            'added' => $token,
            'env_server' => env('APP_HOST'),
            'host' =>  $host,
            'data' =>  $data,
        ];
    }
    private function getParseAuthUser()
    {
        $user = auth()->user();
        
        $parsedUser = [
            'user_id' => $user->id,
            'user_name' => $user->contacts->name,
            // 'email' => $user->contacts->contact_item->value
        ];
        return $parsedUser;
    }

    private function manageUserAuth()
    {
        if (!auth()->user()) {
            return Response::json([
            'status' => 403,
            'message' => "Un-authorized access."
        ], 403);
        } else {
            return Response::json([
            'status' => 200,
            'data' =>[
                'user' =>$this->getParseAuthUser()
            ]
        ], 200);
            return ;
        }
    }

    public function getUserPost(Request $request)
    {
        return $this->manageUserAuth();
    }

    public function getUser(Request $request)
    {
        return $this->manageUserAuth();
    }

    public function logout(Request $request)
    {
        try {
            auth()->logout();
            setcookie('token', false);

            return Response::json([
            'status' => 200,
            'message' => "Successfully logged out."
        ], 200);
        } catch (Exception $e) {
            return Response::json([
            'status' => 400,
            'message' =>  $e->getMessage()
        ], 400);
        }
    }

    public function emailVerification(Request $request)
    {
        $check_contact_item = ContactItem::where('verification_code', $request->verification)->first();

        if ($check_contact_item) {
            $check_contact_item->verification_status = 'verified';
            $check_contact_item->verified_on = Carbon::now();
            $check_contact_item->save();
            return 'Email verified successfully';
        } else {
            return 'Sorry the verification email expried';
        }
    }



    // public function login(Request $request)
    // {
    //     // $credentials = request(['email', 'password']);
    //     $user = User::where([
    //         ['email','=', $request->email],
    //         ['password','=', $request->password],

    //     ])->first();
    //     if ($user) {

    //         // if (!$user->access_verified_at) {
    //         //     //$GlobalService->verify_user($user);
    //         //     return [
    //         //         'isUserAuthenticated' => true,
    //         //         'isUserVerified' => false,
    //         //         // 'redirect' => $reffer
    //         //     ];
    //         // }


    //         $token = auth('api')->login($user);


    //        // $remember_me = $this->update_remember_token_for_user($user);
    //         // unset($user->verification_code);
    //         return [
    //             'isUserAuthenticated' => true,
    //             'isUserVerified' => true,
    //            'token' => $token,
    //             //'remember_me' => $remember_me,
    //             //  'redirect' =>  $reffer
    //         ];
    //     } else {
    //         return [
    //             'isUserAuthenticated' => false,
    //             'isUserVerified' => false,
    //             // 'redirect' =>  $reffer
    //         ];
    //     }





    // }
}
