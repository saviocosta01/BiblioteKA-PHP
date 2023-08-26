<?php

namespace App\Services;

use App\Exceptions\AppError;

class AuthService
{
    public function createLogin(array $data)
    {
        if (!$token = auth()->attempt($data)) {
            throw new AppError("email ou senha incorretos", 401);
        }
        return $this->responseToken($token);
    }
    private function responseToken($token){
        return response()->json([
            'token'=>$token
        ]);
    }
}
