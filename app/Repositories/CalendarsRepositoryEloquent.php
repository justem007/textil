<?php

namespace Textil\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Textil\Repositories\CalendarsRepository;
use Textil\Entities\Calendars;
use Textil\Validators\CalendarsValidator;

/**
 * Class CalendarsRepositoryEloquent
 * @package namespace Textil\Repositories;
 */
class CalendarsRepositoryEloquent extends BaseRepository implements CalendarsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Calendars::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CalendarsValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
