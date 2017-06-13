<?php

namespace Textil\Transformers;

use League\Fractal\TransformerAbstract;
use Textil\Entities\ServicoWebLogistica;

/**
 * Class ServicoWebLogisticaTransformer
 * @package namespace Textil\Transformers;
 */
class ServicoWebLogisticaTransformer extends TransformerAbstract
{

    /**
     * Transform the \ServicoWebLogistica entity
     * @param \ServicoWebLogistica $model
     *
     * @return array
     */
    public function transform(ServicoWebLogistica $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
