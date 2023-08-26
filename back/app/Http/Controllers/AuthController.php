<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller{
    public function login(AuthRequest $request){
        $authService = new AuthService();

        return $authService->createLogin($request->all());
    }
}
