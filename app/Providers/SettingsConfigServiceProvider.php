<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class SettingsConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        if (Schema::hasTable('settings')) {
            $site_settings = DB::table('settings')->where('type', 'site')->pluck('value', 'label');
            if (!$site_settings->isEmpty()) {
                $site_settings = [
                    'site_name' => $site_settings['site_name'] ?? '',
                    'site_title' => $site_settings['site_title'] ?? '',
                    'site_description' => $site_settings['site_description'] ?? '',
                    'primary_color' => $site_settings['primary_color'] ?? '',
                    'logo' => $site_settings['logo'] ?? '',
                ];
                config(['config.site' => $site_settings]);
            }


        }

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
