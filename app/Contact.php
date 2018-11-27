<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Contact extends Model
{
    use Uuids;

    protected $fillable = [
        'name', 'college', 'phone', 'cc_head', 'email', 'year', 'work_hrs', 'join'
    ];
}
