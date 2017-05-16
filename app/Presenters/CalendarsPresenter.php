<?php

namespace Textil\Presenters;

use Textil\Transformers\CalendarsTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CalendarsPresenter
 *
 * @package namespace Textil\Presenters;
 */
class CalendarsPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CalendarsTransformer();
    }
}
