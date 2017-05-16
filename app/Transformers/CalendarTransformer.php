<?php

namespace Textil\Transformers;

use League\Fractal\TransformerAbstract;
use Textil\Entities\Calendar;

/**
 * Class CalendarTransformer
 * @package namespace Textil\Transformers;
 */
class CalendarTransformer extends TransformerAbstract
{

    /**
     * Transform the \Calendar entity
     * @param \Calendar $model
     *
     * @return array
     */
    public function transform(Calendar $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
