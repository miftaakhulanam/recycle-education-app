<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function (User $user) {
            return $user->is_admin == 'admin';
        });

        // $this->registerPolicies();

        Gate::define('lulus', function (User $user, Kelas $kelas) {
            try {
                $pelatihan = Pelatihan::where('user_id', $user->id)
                    ->where('kelas_id', $kelas->id)
                    ->firstOrFail();

                return $pelatihan->status_lulus == 'lulus';
            } catch (ModelNotFoundException $e) {
                return false;
            }
        });

        Gate::define('tidak_lulus', function (User $user, Kelas $kelas) {
            try {
                $pelatihan = Pelatihan::where('user_id', $user->id)
                    ->where('kelas_id', $kelas->id)
                    ->firstOrFail();

                return $pelatihan->status_lulus == 'tidak_lulus';
            } catch (ModelNotFoundException $e) {
                return false;
            }
        });
    }

    // public function boot()
    // {
    //     $this->registerPolicies();

    //     Gate::define('lulus', function (Pelatihan $pelatihan) {
    //         $pelatihan = Pelatihan::where('user_id', auth()->user()->id)
    //             ->where('kelas_id', $kelas->id)
    //             ->firstOrFail();

    //         return $pelatihan->status_lulus == 'lulus';
    //     });
    // }
}
