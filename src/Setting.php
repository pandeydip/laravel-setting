<?php
/**
 * @author Deepak Pandey <er.pandeydip@gmail.com>.
 * Created On: 2023-08-03 10:34
 */

namespace Pandeydip\LaravelSettings;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];
    public $timestamps = false;
}
