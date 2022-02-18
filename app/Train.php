<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'Company',
        'Departur_station',
        'Arival_station',
        'Departur_time',
        'Arival_time',
        'Code_train',
        'Number_carriages',
        'On_time',
        'Cancel'
    ];
}
