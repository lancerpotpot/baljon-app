<?php

namespace App\Http\Controllers;
use App\Services\UserService;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(UserService $userService){
        return $userService->listUsers();
    }
    public function first(UserService $userService) {
        return collect($userService->listUsers())->first();
    }
    public function show(UserService $userService, $id) {
        $user = collect($userService->listUsers())->filter(function($item) use ($id){
            return $item['id'] == $id; 
    })->first();

    return $user;

    }
}