<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function createUser(array $data)
    {
        return User::create($data);
    }
    public function listUsers()
    {
        return User::all();
    }
    public function updateUser(array $data, $id)
    {
        $findUser = User::find($id);
        $findUser->fill($data);
        $findUser->save();

        return $findUser;
    }
    public function removeUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return response(status: 204);
    }
}
