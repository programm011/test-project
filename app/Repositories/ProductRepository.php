<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class ProductRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model(): string
    {
        return "App\\Models\\Product";
    }
}
