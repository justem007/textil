<?php

namespace Textil\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Textil\Repositories\ServicoSilkDigitalDtgKornitRepository;
use Textil\Entities\ServicoSilkDigitalDtgKornit;
use Textil\Validators\ServicoSilkDigitalDtgKornitValidator;

/**
 * Class ServicoSilkDigitalDtgKornitRepositoryEloquent
 * @package namespace Textil\Repositories;
 */
class ServicoSilkDigitalDtgKornitRepositoryEloquent extends BaseRepository implements ServicoSilkDigitalDtgKornitRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ServicoSilkDigitalDtgKornit::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ServicoSilkDigitalDtgKornitValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
