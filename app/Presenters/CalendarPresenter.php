<?php

namespace Textil\Presenters;

use Textil\Transformers\CalendarTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CalendarPresenter
 *
 * @package namespace Textil\Presenters;
 */
class CalendarPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CalendarTransformer();
    }
}
