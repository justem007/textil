<?php

namespace Textil\Presenters;

use Textil\Transformers\PessoasTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PessoasPresenter
 *
 * @package namespace Textil\Presenters;
 */
class PessoasPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PessoasTransformer();
    }
}
