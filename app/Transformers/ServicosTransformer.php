<?php

namespace Textil\Transformers;

use League\Fractal\TransformerAbstract;
use Textil\Entities\Servicos;

/**
 * Class ServicosTransformer
 * @package namespace Textil\Transformers;
 */
class ServicosTransformer extends TransformerAbstract
{

    /**
     * Transform the \Servicos entity
     * @param \Servicos $model
     *
     * @return array
     */
    public function transform(Servicos $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
