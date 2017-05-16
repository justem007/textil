<?php

namespace Textil\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Textil\Repositories\CalendarRepository;
use Textil\Entities\Calendar;
use Textil\Validators\CalendarValidator;

/**
 * Class CalendarRepositoryEloquent
 * @package namespace Textil\Repositories;
 */
class CalendarRepositoryEloquent extends BaseRepository implements CalendarRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Calendar::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CalendarValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
