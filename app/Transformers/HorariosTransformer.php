<?php

namespace Textil\Transformers;

use League\Fractal\TransformerAbstract;
use Textil\Entities\Horarios;

/**
 * Class HorariosTransformer
 * @package namespace Textil\Transformers;
 */
class HorariosTransformer extends TransformerAbstract
{

    /**
     * Transform the \Horarios entity
     * @param \Horarios $model
     *
     * @return array
     */
    public function transform(Horarios $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
