<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'f_name', 's_name', 'email', 'bunch_id'
    ];

    public function bunches(){
        return $this->belongsTo(Bunch::class);
    }
}
