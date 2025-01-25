<?php

namespace App\Http\Controllers\API;

use App\Models\DB;

use App\Models\User;
use App\Traits\Validator;


class UserController
{
    use Validator;

    public function register()
    {

        $userData = $this->validate([
            'fullName' => 'string',
            'email' => 'string',
            'password' => 'string',

        ]);

        $user = new User();
        if($user->create($userData['fullName'], $userData['email'], $userData['password'])) {
            apiResponse([
                'message' => 'User created successfully',
                'token' => $user->api_token,
            ], 201);
        }
        apiResponse([
            'message' => 'Error creating user',
        ],401);
    }

    public function login()
    {
        $userData = $this->validate([
            'email' => 'string',
            'password' => 'string',
        ]);
        $user = new User();
        if ($user->getUser($userData['email'], $userData['password'])) {
            apiResponse([
                'message' => 'User logged in successfully',
                'token' => $user->api_token,
            ]);
        }
        apiResponse([
            'message' => 'Invalid email or password',
        ],401);

    }

}