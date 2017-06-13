<?php

namespace Textil\Presenters;

use Textil\Transformers\ServicoSilkDigitalDtgKornitTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ServicoSilkDigitalDtgKornitPresenter
 *
 * @package namespace Textil\Presenters;
 */
class ServicoSilkDigitalDtgKornitPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ServicoSilkDigitalDtgKornitTransformer();
    }
}
