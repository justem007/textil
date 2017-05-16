<?php

namespace Textil\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Calendars extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name',
        'pessoal',
        'email',
        'phone',
        'cellphone',
        'date',
        'horario',
        'servicos',
        'message',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pessoa()
    {
        return $this->belongsTo(Pessoas::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function horario()
    {
        return $this->belongsTo(Horarios::class);
    }
}
