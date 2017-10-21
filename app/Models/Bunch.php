<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bunch extends Model
{
    use SoftDeletes;
    use Updater;
    use Owned;

    protected $fillable = ['name', 'description'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function subscribers(){
        return $this->hasMany(Subscriber::class);
    }
}
