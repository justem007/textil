<?php

namespace Textil\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ServicoWebLogistica extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

}
