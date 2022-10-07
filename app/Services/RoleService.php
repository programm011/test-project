<?php

namespace App\Services;

use App\Models\Role;
use App\Repositories\RoleRepository;
use Illuminate\Foundation\Http\FormRequest;

class RoleService extends BaseService
{
    public function __construct(RoleRepository $repository)
    {
        parent::__construct($repository);
    }

    public function created(int $id, FormRequest $request): void
    {
        /**
         * @var $role Role
         */

        $role = $this->repository->find($id);
        $role->syncPermissions($request->get('permissions'));
    }

    public function updated(int $id, FormRequest $request): void
    {
        /**
         * @var $role Role
         */

        $role = $this->repository->find($id);
        $role->syncPermissions($request->get('permissions'));
    }
}
