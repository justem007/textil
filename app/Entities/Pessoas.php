<?php

namespace Textil\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Pessoas extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'pessoa',
        'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function calendar()
    {
        return $this->hasOne(Calendars::class);
    }
}
