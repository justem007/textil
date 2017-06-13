<?php

namespace Textil\Presenters;

use Textil\Transformers\ServicoSublimacaoLocalizadaFullPrintTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ServicoSublimacaoLocalizadaFullPrintPresenter
 *
 * @package namespace Textil\Presenters;
 */
class ServicoSublimacaoLocalizadaFullPrintPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ServicoSublimacaoLocalizadaFullPrintTransformer();
    }
}
