<?php 
namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SystemSettings extends Settings {

    public string $clinic_name;
    public string $address;
    public string $logo;
    public string $favicon;
    public string $footer;

    public static function group(): string
    {
        return 'system';
    }
}