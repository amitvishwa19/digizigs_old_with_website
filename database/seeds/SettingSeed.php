<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(['name' => 'app_name','val'=>'DigiCRM']);
        Setting::create(['name' => 'app_admin_url','val'=>'dz-admin']);
        Setting::create(['name' => 'app_email','val'=>'admin@admin.com']);
        Setting::create(['name' => 'app_description','val'=>'admin']);
    }
}
