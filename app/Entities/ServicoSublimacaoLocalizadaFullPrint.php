<?php

namespace Textil\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ServicoSublimacaoLocalizadaFullPrint extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

}
