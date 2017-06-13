<?php

namespace Textil\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Textil\Repositories\ServicoSublimacaoMetroCorridoRepository;
use Textil\Entities\ServicoSublimacaoMetroCorrido;
use Textil\Validators\ServicoSublimacaoMetroCorridoValidator;

/**
 * Class ServicoSublimacaoMetroCorridoRepositoryEloquent
 * @package namespace Textil\Repositories;
 */
class ServicoSublimacaoMetroCorridoRepositoryEloquent extends BaseRepository implements ServicoSublimacaoMetroCorridoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ServicoSublimacaoMetroCorrido::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ServicoSublimacaoMetroCorridoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
