<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bunch extends Model
{
    use SoftDeletes;
    use Updater;
    use Owned;

    public function subscribers(){
        return $this->hasMany(Subscriber::class);
    }
}
