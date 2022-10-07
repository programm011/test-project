<?php

namespace App\Repositories;

use App\Traits\RequestCriteriaRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class ProductRepository extends BaseRepository
{

    use RequestCriteriaRepository;

    protected $fieldSearchable = ['title'=>'like'];

    /**
     * @return string
     */
    public function model(): string
    {
        return "App\\Models\\Product";
    }
}
