<?php

namespace App\Http\Controllers\Basics;

use App\Daos\UserDao;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(
        private UserDao $userDao
    ) { }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->userDao->list(null);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = json_decode($request->getContent(), false);
        $user = new User();
        $user->name = $input->name;
        $user->role = $input->role;
        $this->userDao->save($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $input = json_decode($request->getContent(), false);
        $user->name = $input->name;
        $user->role = $input->role;
        $this->userDao->save($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->userDao->delete($user);
    }
}
