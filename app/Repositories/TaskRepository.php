<?php

namespace App\Repositories;

use App\Models\Task;
use App\Repositories\TaskRepositoryInterface;

class TaskRepository implements TaskRepositoryInterface
{

    public function create(array $data)
    {
        return Task::create($data);
    }


    public function update(int $id, array $data)
    {
        $task = Task::find($id);
        if ($task) {
            $task->update($data);
            return true;
        }
        return false;
    }


    public function delete(int $id)
    {
        return Task::destroy($id);
    }


    public function getAll()
    {
        return Task::orderBy('created_at', 'desc')->get();
    }


    public function getOne(int $id)
    {
        return Task::find($id);
    }
}
