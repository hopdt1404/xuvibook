<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signup (Request  $request)
    {

        $validator = Validator::make($request->all(),[
            'name' => 'required|bail',
            'email' => 'required|string|email|bail|unique:users',
            'password' => 'required|string|confirmed'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Registration failed',
                'error' => $validator->errors()
            ], 400);
        }

        $user = new User([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);

        $user->save();
        return response()->json([
            'message'=> 'registered successfully',
        ],201);
    }

    public function login (Request $request)
    {
        $request->validate([
            'name' => 'required|bail',
            'email' => 'required|bail|string',
            'remember' => 'boolean'
        ]);
        return response()->json(['message' => 'Unauthorized'], 401);
        $credentials = request('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult['token'];

        if ($request['remember_me']) {
            $token['expires_at'] = Carbon::now()->addWeeks(1);
        }
        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult['token']['expires_at']
            )->toDateString()
        ], 200);
    }

    public function logout (Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function user (Request $request)
    {
        return response()->json($request->user());
    }
}
