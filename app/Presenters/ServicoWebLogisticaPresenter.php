<?php

namespace Textil\Presenters;

use Textil\Transformers\ServicoWebLogisticaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ServicoWebLogisticaPresenter
 *
 * @package namespace Textil\Presenters;
 */
class ServicoWebLogisticaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ServicoWebLogisticaTransformer();
    }
}
