<?php

namespace Textil\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Contatos;

/**
 * Class ContatosTransformer
 * @package namespace App\Transformers;
 */
class ContatosTransformer extends TransformerAbstract
{

    /**
     * Transform the \Contatos entity
     * @param \Contatos $model
     *
     * @return array
     */
    public function transform(Contatos $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
