<?php

namespace Textil\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Textil\Repositories\ServicoWebLogisticaRepository;
use Textil\Entities\ServicoWebLogistica;
use Textil\Validators\ServicoWebLogisticaValidator;

/**
 * Class ServicoWebLogisticaRepositoryEloquent
 * @package namespace Textil\Repositories;
 */
class ServicoWebLogisticaRepositoryEloquent extends BaseRepository implements ServicoWebLogisticaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ServicoWebLogistica::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ServicoWebLogisticaValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
