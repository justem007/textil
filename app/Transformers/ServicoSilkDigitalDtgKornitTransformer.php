<?php

namespace Textil\Transformers;

use League\Fractal\TransformerAbstract;
use Textil\Entities\ServicoSilkDigitalDtgKornit;

/**
 * Class ServicoSilkDigitalDtgKornitTransformer
 * @package namespace Textil\Transformers;
 */
class ServicoSilkDigitalDtgKornitTransformer extends TransformerAbstract
{

    /**
     * Transform the \ServicoSilkDigitalDtgKornit entity
     * @param \ServicoSilkDigitalDtgKornit $model
     *
     * @return array
     */
    public function transform(ServicoSilkDigitalDtgKornit $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
