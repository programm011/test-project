<?php

namespace App\Traits;

use Prettus\Repository\Exceptions\RepositoryException;

trait RequestCriteriaRepository
{
    /**
     * @throws RepositoryException
     */
    public function boot(): void
    {
        $this->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
    }
}
