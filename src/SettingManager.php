<?php
/**
 * @author Deepak Pandey <er.pandeydip@gmail.com>.
 * Created On: 2023-08-03 10:30
 */

namespace Pandeydip\LaravelSettings;

use Illuminate\Support\Facades\DB;

class SettingManager
{
    public function get($key, $default = null)
    {
        $setting = DB::table('settings')->where('key', $key)->first();

        return $setting ? $setting->value : $default;
    }

    public function set($key, $value)
    {
        return DB::table('settings')->updateOrInsert(['key' => $key], ['value' => $value]);
    }

    public function saveMany(array $settings)
    {
        foreach ($settings as $key => $value) {
            DB::table('settings')->updateOrInsert(['key' => $key], ['value' => $value]);
        }
    }
}
