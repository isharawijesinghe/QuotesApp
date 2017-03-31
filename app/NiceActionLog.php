<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NiceActionLog extends Model
{
    /**
     * @return array
     */
    public function nice_action()
    {
        return $this->belongsTo('App\NiceAction');
    }
}
