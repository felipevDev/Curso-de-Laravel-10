<?php

namespace App\Services;

use App\DTO\Suportes\CreateSuporteDTO;
use App\DTO\Suportes\UpdateSuporteDTO;
use App\Repositories\PaginationInterface;
use App\Repositories\SuporteRepositoryInterface;
use stdClass;

class SuporteService
{

    public function __construct(
        protected SuporteRepositoryInterface $repository,
    ) {}

    public function paginate(
        int $page = 1,
        int $totalPerPage = 15,
        string $filter = null
    ): PaginationInterface {
        return $this->repository->paginate(
            page: $page,
            totalPerPage: $totalPerPage,
            filter: $filter,
        );
    }

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }

    public function findOne(string $id): stdClass|null
    {
        return $this->repository->findOne($id);
    }

    public function new(CreateSuporteDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }

    public function update(UpdateSuporteDTO $dto): stdClass|null
    {
        return $this->repository->update($dto);
    }

    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }
}
