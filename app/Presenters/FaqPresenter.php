<?php

namespace Textil\Presenters;

use Textil\Transformers\FaqTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class FaqPresenter
 *
 * @package namespace Textil\Presenters;
 */
class FaqPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new FaqTransformer();
    }
}
