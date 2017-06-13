<?php

namespace Textil\Presenters;

use Textil\Transformers\ServicosTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ServicosPresenter
 *
 * @package namespace Textil\Presenters;
 */
class ServicosPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ServicosTransformer();
    }
}
