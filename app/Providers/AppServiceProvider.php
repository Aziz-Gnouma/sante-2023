<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Mailsetting;
use App\Models\Appointment;
use Illuminate\Support\Facades\View;
use Config;
use Illuminate\Support\Facades\Request;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('contact', function ($view) {
            $appointment = Appointment::find(request()->input('appointment'));
            $view->with('appointment', $appointment);
        });
        View::composer('contact', function ($view) {
            $appointmentId = Request::input('appointment');
            $appointment = $appointmentId ? Appointment::find($appointmentId) : null;
            $view->with('appointment', $appointment);
        });

        Schema::defaultStringLength(191);

        if (Schema::hasTable('mailsettings')) {
            $mailsetting = Mailsetting::first();
            if ($mailsetting) {
                $data = [
                    'driver'       => $mailsetting->mail_transport,
                    'host'         => $mailsetting->mail_host,
                    'port'         => $mailsetting->mail_port,
                    'encryption'   => $mailsetting->mail_encryption,
                    'username'     => $mailsetting->mail_username,
                    'password'     => $mailsetting->mail_password,
                    'from'         => [
                        'address' => $mailsetting->mail_from,
                        'name'    => 'LaravelStarter'
                    ]
                ];
                Config::set('mail', $data);
            }
        }

        $appointments = Appointment::all();
        View::share('appointments', $appointments);
    }
}
