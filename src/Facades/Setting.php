<?php
/**
 * @author Deepak Pandey <er.pandeydip@gmail.com>.
 * Created On: 2023-08-03 10:41
 */

namespace Pandeydip\LaravelSettings\Facades;

use Illuminate\Support\Facades\Facade;

class Setting extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'setting';
    }
}
