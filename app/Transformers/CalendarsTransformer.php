<?php

namespace Textil\Transformers;

use League\Fractal\TransformerAbstract;
use Textil\Entities\Calendars;

/**
 * Class CalendarsTransformer
 * @package namespace Textil\Transformers;
 */
class CalendarsTransformer extends TransformerAbstract
{

    /**
     * Transform the \Calendars entity
     * @param \Calendars $model
     *
     * @return array
     */
    public function transform(Calendars $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
