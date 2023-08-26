<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(CreateUserRequest $request)
    {
        $userService = new UserService();

        return $userService->createUser($request->all());
    }
    public function list()
    {
        $userService = new UserService();

        return $userService->listUsers();
    }
    public function update(Request $request, $id)
    {
        $userService = new UserService();

        return $userService->updateUser($request->all(), $id);
    }
    public function remove($id)
    {
        $userService = new UserService();

        return $userService->removeUser($id);
    }
}
