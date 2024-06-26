<?php

namespace App\Providers;

use App\Models\Permission;
use App\Repositories\AirportRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\AirportRepository;
use App\Repositories\BookingRepository;
use App\Repositories\BookingRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{ 
    public function register(): void 
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(AirportRepositoryInterface::class, AirportRepository::class);
        $this->app->bind(BookingRepositoryInterface::class, BookingRepository::class);
    }

    public function boot(): void
    {
        // try {
        //     Permission::get()->map(function ($permission) {
        //         Gate::define($permission->name, function ($user) use ($permission) {
        //             return $user->hasPermissionTo($permission);
        //         });
        //     });
        // } catch (\Exception $e) {
        //     report($e);
        // }

        Blade::directive('role', function ($role) {
            return "<?php if(auth()->check() && auth()->user()->hasRole({$role})) : ?>";
        });

        Blade::directive('endrole', function ($role) {
            return "<?php endif; ?>";
        });
    }
}
