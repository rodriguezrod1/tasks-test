<?php

namespace App\Repositories;

interface TaskRepositoryInterface
{
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
    public function getAll();
    public function getOne(int $id);
}
