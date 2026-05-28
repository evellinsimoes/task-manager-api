<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = $request->user()->tasks()->latest()->get();
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pending,in_progress,completed',
        ]);

        $task = $request->user()->tasks()->create($request->all());
        return response()->json($task, 201);
    }

    public function show(Request $request, Task $task)
    {
        if ($request->user()->id !== $task->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        return response()->json($task);
    }

    public function update(Request $request, Task $task)
    {
        if ($request->user()->id !== $task->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'status' => 'in:pending,in_progress,completed',
        ]);

        $task->update($request->all());
        return response()->json($task);
    }

    public function destroy(Request $request, Task $task)
    {
        if ($request->user()->id !== $task->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $task->delete();
        return response()->json(['message' => 'Task deleted successfully']);
    }
}