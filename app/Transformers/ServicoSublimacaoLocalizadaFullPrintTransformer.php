<?php

namespace Textil\Transformers;

use League\Fractal\TransformerAbstract;
use Textil\Entities\ServicoSublimacaoLocalizadaFullPrint;

/**
 * Class ServicoSublimacaoLocalizadaFullPrintTransformer
 * @package namespace Textil\Transformers;
 */
class ServicoSublimacaoLocalizadaFullPrintTransformer extends TransformerAbstract
{

    /**
     * Transform the \ServicoSublimacaoLocalizadaFullPrint entity
     * @param \ServicoSublimacaoLocalizadaFullPrint $model
     *
     * @return array
     */
    public function transform(ServicoSublimacaoLocalizadaFullPrint $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
