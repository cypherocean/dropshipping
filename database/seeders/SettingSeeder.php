<?php

namespace Database\Seeders;
use App\Models\Setting;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class SettingSeeder extends Seeder{
    public function run(){
        $general = [
            'SITE_TITLE' => 'Drop Shipping', 
            'SITE_TITLE_SF' => 'DS', 
            'CONTACT_NUMBER' => '+91 81605 53161',
            'ALTERNATE_CONTACT_NUMBER' => '+91 81605 53161',
            'CONTACT_EMAIL' => 'contact@24bit.in',
            'MAIN_CONTACT_EMAIL' => 'coffee@24bit.in',
            'CONTACT_ADDRESS' => '247, Jasal complex, nanavati chowk, rajkot 360006'
        ];

        foreach($general as $key => $value){
            Setting::create([
                'key' => $key,
                'value' => $value,
                'type' => 'general',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => 1
            ]);
        }

        $smtp = [
            'MAIL_MAILER' => 'smtp',
            'MAIL_HOST' => 'mail.dummy.com',
            'MAIL_PORT' => '26',
            'MAIL_USERNAME' => 'dummy@mail.com',
            'MAIL_PASSWORD' => 'dummy@mail',
            'MAIL_ENCRYPTION' => 'tls',
            'MAIL_FROM_ADDRESS' => 'dummy@mail.com',
            'MAIL_FROM_NAME' => 'Drop Shipping'
        ];

        foreach($smtp as $key => $value){
            Setting::create([
                'key' => $key,
                'value' => $value,
                'type' => 'smtp',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => 1
            ]);
        }

        $sms = [
            'SMS_NAME' => 'Drop Shipping',
            'SMS_NUMBER' => '+91-8160553161'
        ];

        foreach($sms as $key => $value){
            Setting::create([
                'key' => $key,
                'value' => $value,
                'type' => 'sms',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => 1
            ]);
        }

        $social = [
            'FACEBOOK' => 'www.facebook.com/dropshipping',
            'INSTAGRAM' => 'www.instagram.com/dropshipping',
            'YOUTUBE' => 'www.youtube.com/dropshipping',
            'GOOGLE' => 'www.google.com/dropshipping'
        ];

        foreach($social as $key => $value){
            Setting::create([
                'key' => $key,
                'value' => $value,
                'type' => 'social',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => 1
            ]);
        }

        $logo = [
            'FEVICON' => 'fevicon.png',
            'LOGO' => 'logo.png',
            'SMALL_LOGO' => 'small_logo.png'
        ];

        foreach($logo as $key => $value){
            Setting::create([
                'key' => $key,
                'value' => $value,
                'type' => 'logo',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => 1
            ]);
        }

        $folder_to_upload = public_path().'/uploads/logo/';

        if (!\File::exists($folder_to_upload)) {
            \File::makeDirectory($folder_to_upload, 0777, true, true);
        }

        if(file_exists(public_path('/dummy/fevicon.png')) && !file_exists(public_path('/uploads/logo/fevicon.png')) ){
            File::copy(public_path('/dummy/fevicon.png'), public_path('/uploads/logo/fevicon.png'));
        }

        if(file_exists(public_path('/dummy/logo.png')) && !file_exists(public_path('/uploads/logo/logo.png')) ){
            File::copy(public_path('/dummy/logo.png'), public_path('/uploads/logo/logo.png'));
        }

        if(file_exists(public_path('/dummy/small_logo.png')) && !file_exists(public_path('/uploads/logo/small_logo.png')) ){
            File::copy(public_path('/dummy/small_logo.png'), public_path('/uploads/logo/small_logo.png'));
        }
    }
}
