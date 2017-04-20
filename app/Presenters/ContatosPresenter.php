<?php

namespace Textil\Presenters;

use App\Transformers\ContatosTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ContatosPresenter
 *
 * @package namespace App\Presenters;
 */
class ContatosPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ContatosTransformer();
    }
}
