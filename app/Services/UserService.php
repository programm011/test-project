<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Http\FormRequest;

class UserService extends BaseService
{
    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }

    public function created(int $id, FormRequest $request): void
    {
        /**
         * @var $user User
         */
        $user = $this->repository->find($id);
        $user->syncRoles($request->get('role_id'));
    }

    public function updated(int $id, FormRequest $request): void
    {
        /**
         * @var $user User
         */
        $user = $this->repository->find($id);
        $user->syncRoles($request->get('role_id'));
    }
}
