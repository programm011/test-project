<?php

namespace App\Services;

use Exception;
use Faker\Container\ContainerException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Collection;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Validator\Exceptions\ValidatorException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

abstract class BaseService
{
    protected array $merges = [];

    public function __construct(protected BaseRepository $repository)
    {
    }

    /**
     * @return mixed
     */
    public function index(): mixed
    {
        try {
            return match (request()->get('list_type')) {
                'collection' => $this->repository->all(),
                default => $this->repository->paginate(),
            };
        } catch (NotFoundExceptionInterface $e) {
            throw new NotFoundHttpException($e->getMessage());
        } catch (ContainerExceptionInterface $e) {
            throw new ContainerException($e->getMessage());
        }
    }

    /**
     * @param int $id
     *
     * @return LengthAwarePaginator|Collection|mixed
     */
    public function show(int $id, array $columns = ['*']): mixed
    {
        return $this->repository->find($id, $columns);
    }

    /**
     * @param FormRequest $request
     *
     * @return void
     */
    public function creating(FormRequest &$request): void
    {
    }

    /**
     * Create entity
     *
     * @param FormRequest $request
     *
     * @return mixed
     * @throws ValidatorException
     * @throws Exception
     */
    public function create(FormRequest $request): mixed
    {
        try {
            $this->creating($request);

            $model = $this->repository->create($request->validated() + $this->merges);
            $this->created($model->id, $request);

            return $model;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function created(int $id, FormRequest $request): void
    {
    }

    public function updating(int $id, FormRequest &$request): void
    {
    }

    /**
     * @param int $id
     * @param FormRequest $request
     *
     * @return bool
     * @throws ValidatorException
     */
    public function update(int $id, FormRequest $request): bool
    {
        $model = $this->repository->find($id);
        $this->updating($model->id, $request);
        $this->repository->update($request->validated(), $id);
        $this->updated($id, $request);

        return true;
    }

    public function updated(int $id, FormRequest $request): void
    {
    }

    public function deleting(int $id): void
    {
    }

    /**
     * @param int $id
     *
     * @return bool
     * @throws Exception
     */
    public function delete(int $id): bool
    {
        try {
            /**
             * @var $model Model
             */
            $model = $this->repository->find($id);
            $this->deleting($model->id);

            return $model->delete();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * @param array $merges
     */
    public function setMerges(array $merges): void
    {
        $this->merges = $merges;
    }

    /**
     * @return BaseRepository
     */
    public function query(): BaseRepository
    {
        return $this->repository;
    }
}
