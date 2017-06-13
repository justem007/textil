<?php

namespace Textil\Presenters;

use Textil\Transformers\HorariosTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class HorariosPresenter
 *
 * @package namespace Textil\Presenters;
 */
class HorariosPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new HorariosTransformer();
    }
}
