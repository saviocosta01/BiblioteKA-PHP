<?php

namespace App\Http\Middleware;

use App\Exceptions\AppError;
use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class JwtMiddleware {
    public function handle(Request $req, Closure $next) {
        try{
            JWTAuth::parseToken()->authenticate();
            return $next($req);
        }catch(JWTException $error) {
            if($error instanceof TokenInvalidException){
                throw new AppError("Token invalido", 498);
            }
            if($error instanceof TokenExpiredException){
                throw new AppError("Token expirado", 401);
            }
            throw new AppError($error->getMessage(), 500);
        }
    }
}
