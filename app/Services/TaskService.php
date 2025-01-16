<?php

namespace App\Services;

use App\Repositories\TaskRepositoryInterface;

class TaskService implements TaskServiceInterface
{
    private $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function create(array $data)
    {
        return $this->taskRepository->create($data);
    }

    public function update(int $id, array $data)
    {
        return $this->taskRepository->update($id, $data);
    }

    public function delete(int $id)
    {
        return $this->taskRepository->delete($id);
    }

    public function getAll()
    {
        return $this->taskRepository->getAll();
    }

    public function getOne(int $id)
    {
        return $this->taskRepository->getOne($id);
    }
}
