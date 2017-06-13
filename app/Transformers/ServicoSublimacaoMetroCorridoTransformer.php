<?php

namespace Textil\Transformers;

use League\Fractal\TransformerAbstract;
use Textil\Entities\ServicoSublimacaoMetroCorrido;

/**
 * Class ServicoSublimacaoMetroCorridoTransformer
 * @package namespace Textil\Transformers;
 */
class ServicoSublimacaoMetroCorridoTransformer extends TransformerAbstract
{

    /**
     * Transform the \ServicoSublimacaoMetroCorrido entity
     * @param \ServicoSublimacaoMetroCorrido $model
     *
     * @return array
     */
    public function transform(ServicoSublimacaoMetroCorrido $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
