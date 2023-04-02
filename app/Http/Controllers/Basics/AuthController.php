<?php

namespace App\Http\Controllers\Basics;

use App\Daos\UserDao;
use App\Http\Controllers\Controller;
use App\Mail\PasswordRecoveryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function __construct(
        private UserDao $userDao
    ){}

    public function user(Request $r) {
      return $r->user();
    }

    public function recoverPassword(Request $r)
    {
        $input = json_decode($r->getContent(), false);
        $user = $this->userDao->findByEmail($input->email);
        if ($user->remember_token == null) $user->remember_token = (string) Str::uuid();
        $this->userDao->save($user);

        Mail::to($user)->queue(new PasswordRecoveryMail($user));
        //send email to $user->email
    }

    public function passwordRecoveryLink(Request $r, string $token)
    {

    }

    public function updateEmail(Request $r)
    {

    }

    public function updatePassword(Request $r)
    {

    }
}
