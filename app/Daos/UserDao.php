<?php

namespace App\Daos;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserDao {
    //return a list
    public function list($filters): Collection
    {
        $users = User::all();
        return $users;
    }

    //get single
    public function get($id): User
    {
        return User::find($id);
    }

    //create or update
    public function save(User $user)
    {
        $user->save();
    }

    //delete
    public function delete(User $user)
    {
        $user->delete();
    }

    public function findByEmail(string $email)
    {
        return User::where('email',$email)->first();
    }
}