<?php

namespace Textil\Transformers;

use League\Fractal\TransformerAbstract;
use Textil\Entities\Pessoas;

/**
 * Class PessoasTransformer
 * @package namespace Textil\Transformers;
 */
class PessoasTransformer extends TransformerAbstract
{

    /**
     * Transform the \Pessoas entity
     * @param \Pessoas $model
     *
     * @return array
     */
    public function transform(Pessoas $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
