<?php

namespace Textil\Transformers;

use League\Fractal\TransformerAbstract;
use Textil\Entities\Faq;

/**
 * Class FaqTransformer
 * @package namespace Textil\Transformers;
 */
class FaqTransformer extends TransformerAbstract
{

    /**
     * Transform the \Faq entity
     * @param \Faq $model
     *
     * @return array
     */
    public function transform(Faq $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
