<?php

namespace Textil\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Textil\Repositories\ContatosRepository;
use Textil\Entities\Contatos;
use Textil\Validators\ContatosValidator;

/**
 * Class ContatosRepositoryEloquent
 * @package namespace Textil\Repositories;
 */
class ContatosRepositoryEloquent extends BaseRepository implements ContatosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contatos::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ContatosValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
