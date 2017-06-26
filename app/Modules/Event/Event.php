<?php

namespace App\Modules\Event;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Event extends Model
{
    public function creator(){
    	return $this->belongsTo(User::class);
    }
}
