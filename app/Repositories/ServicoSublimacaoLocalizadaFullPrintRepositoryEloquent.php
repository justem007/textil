<?php

namespace Textil\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Textil\Repositories\ServicoSublimacaoLocalizadaFullPrintRepository;
use Textil\Entities\ServicoSublimacaoLocalizadaFullPrint;
use Textil\Validators\ServicoSublimacaoLocalizadaFullPrintValidator;

/**
 * Class ServicoSublimacaoLocalizadaFullPrintRepositoryEloquent
 * @package namespace Textil\Repositories;
 */
class ServicoSublimacaoLocalizadaFullPrintRepositoryEloquent extends BaseRepository implements ServicoSublimacaoLocalizadaFullPrintRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ServicoSublimacaoLocalizadaFullPrint::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ServicoSublimacaoLocalizadaFullPrintValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
