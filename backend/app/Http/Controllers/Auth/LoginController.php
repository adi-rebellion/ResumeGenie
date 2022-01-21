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

use function PHPSTORM_META\type;

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

//             //     $payload = JWTFactory::sub($user->id)
//             //     ->email($request->email)
//             //     ->password($request->password)
//             //     ->make();
          

                
//             //    $token = JWTAuth::encode($payload);
               
//             // //   $decode_token = JWTAuth::decode($token);
//             // //    return $decode_token;

//             //    $data = Http::asForm()->post('https://www.thehiringco.com/api-auth/UserCredential/', [
//             //        'email' => $request->email,
//             //        'password' => $request->password,
//             //        'token' =>  $token
//             //    ]);
              
//             //    return $data;

//             $factory = JWTFactory::addClaims([
              
//                 'exp'   => JWTFactory::getTTL(),
               
//             ]);
    
//             $payload = $factory
//             ->email($request->email)
//             ->password($request->password)
//             ->make();
    
//             $token = JWTAuth::encode($payload);
//             // $data = Http::asForm()->post('https://www.thehiringco.com/api-auth/UserCredential/', [
//             //            'email' => $request->email,
//             //            'password' => $request->password,
//             //            'token' =>  $token
//             //        ]);

// $curl = curl_init();

// curl_setopt_array($curl, 
// array(
//   CURLOPT_URL => 'https://www.thehiringco.com/api-auth/UserCredential/',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
 
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS => 'email=rks%40iwynoworks.com&password=1!Rakesh&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9hdXRoXC9sb2dpbiIsImlhdCI6MTY0MjY4MzgxMywiZXhwIjoxNjQyNjg3NDEzLCJuYmYiOjE2NDI2ODM4MTMsImp0aSI6InJENHlBc2ZnbU56amczS1oiLCJzdWIiOjIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEiLCJhZGRDbGFpbXMiOnsiZXhwIjo2MH0sImVtYWlsIjoicmtzQGl3eW5vd29ya3MuY29tIiwicGFzc3dvcmQiOiIxIVJha2VzaCJ9.P26HV3H5V7IFbFvPoXbWiOprtXYiwqKYbq3qQ79fERo',
//   CURLOPT_HTTPHEADER => array(
//     'Content-Type: application/x-www-form-urlencoded',
//     'Cookie: csrftoken=9BCQmLi8QRb9nZ71rdhvf9JSWSQ5yhFz6vwRHp6BvZjn8TqNTB7TdLRkEwra2Gt3; sessionid=7z85bh6p00mngrlb2ix8e4r2nwl0cbol'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// $response =  json_decode($response, true);

            //return $data;
       if(true)
       {
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
       else
       {
        return Response::json([
            'status' => 403,
            'command' => 'error',
            'message' => "Incorrect username or password."
        ], 200);
       }
               
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
