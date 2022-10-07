<?php

namespace App\Repositories;

use App\Traits\RequestCriteriaRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class RoleRepository extends BaseRepository
{
    use RequestCriteriaRepository;

    /**
     * @return string
     */
    public function model(): string
    {
        return "App\\Models\\Role";
    }
}
