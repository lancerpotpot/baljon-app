<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserService;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserService::class, function ($app) {
            $users = [
                [
                    'name' => 'Lance Baljon',
                    'gender' => 'Male',
                    'age' => '21'
                ], 
                [
                    'name' => 'Joshu Bernardino',
                    'gender' => 'Male',
                    'age' => '21'
                ]                           
            ];
            return new UserService($users);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}