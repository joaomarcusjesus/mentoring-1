<?php

namespace Mentor\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Perfomance extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['area'];

//    public function user()
//    {
//        return $this->hasOne(User::class, 'user_id');
//    }

}
