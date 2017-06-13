<?php

namespace Textil\Presenters;

use Textil\Transformers\ServicoSublimacaoMetroCorridoTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ServicoSublimacaoMetroCorridoPresenter
 *
 * @package namespace Textil\Presenters;
 */
class ServicoSublimacaoMetroCorridoPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ServicoSublimacaoMetroCorridoTransformer();
    }
}
