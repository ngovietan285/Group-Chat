<?php

namespace App\Providers;

use App\Http\Repositories\Message\MessageRepo;
use App\Http\Repositories\Message\MessageRepoInterface;
use App\Http\Repositories\User\UserRepo;
use App\Http\Repositories\User\UserRepoInterface;
use App\Http\Services\Message\MessageService;
use App\Http\Services\Message\MessageServiecInterface;
use App\Http\Services\User\UserService;
use App\Http\Services\User\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserRepoInterface::class, UserRepo::class);
        $this->app->singleton(UserServiceInterface::class, UserService::class);
        $this->app->singleton(MessageServiecInterface::class, MessageService::class);
        $this->app->singleton(MessageRepoInterface::class, MessageRepo::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
