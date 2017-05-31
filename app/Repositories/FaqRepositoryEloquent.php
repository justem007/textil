<?php

namespace Textil\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Textil\Repositories\FaqRepository;
use Textil\Entities\Faq;
use Textil\Validators\FaqValidator;

/**
 * Class FaqRepositoryEloquent
 * @package namespace Textil\Repositories;
 */
class FaqRepositoryEloquent extends BaseRepository implements FaqRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Faq::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return FaqValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
