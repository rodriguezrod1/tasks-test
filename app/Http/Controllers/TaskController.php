<?php

namespace App\Http\Controllers;

use App\Services\TaskServiceInterface;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    private $taskService;

    public function __construct(TaskServiceInterface $taskService)
    {
        $this->taskService = $taskService;
    }


    public function index()
    {
        $tasks = $this->taskService->getAll();
        return view('tasks.index', compact('tasks'));
    }


    public function create()
    {
        $task = null;
        return view('tasks.create', compact('task'));
    }


    public function store(StoreTaskRequest $request)
    {
        $this->taskService->create($request->validated());
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }


    public function show($id)
    {
        $task = $this->taskService->getOne($id);
        return view('tasks.show', compact('task'));
    }


    public function edit($id)
    {
        $task = $this->taskService->getOne($id);
        return view('tasks.edit', compact('task'));
    }


    public function update(UpdateTaskRequest $request, $id)
    {
        $success = $this->taskService->update($id, $request->validated());
        if ($success) {
            return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
        }
        return back()->withErrors(['error' => 'Task not found']);
    }


    public function destroy($id)
    {
        $success = $this->taskService->delete($id);
        if ($success) {
            return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
        }
        return back()->withErrors(['error' => 'Task not found']);
    }
}
