<?php

namespace App\Providers;

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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $services_dir_path = dirname(__DIR__) . '/Services' ;
        $list_file_name_services = scandir($services_dir_path);
        foreach ($list_file_name_services as $service_file_name) {
            if (strpos($service_file_name, 'Service') !== false) {

                $service_class_name = explode (".", $service_file_name)[0];

                $interface_class = "App\Services\Contracts\\" . $service_class_name . "Contract";
                $service_class = "App\Services\\" . $service_class_name;
              // dd($interface_class, $service_class);
                $this->app->bind($interface_class, $service_class);
            }
        }
    }
}
