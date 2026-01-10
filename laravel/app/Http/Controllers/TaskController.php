<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // View a single task
    public function show($id)
    {
        $task = Task::findOrFail($id);

        // Authorization
        // $this->authorize('view', $task);

        return response()->json($task);
    }

    // Update task status
    public function updateStatus(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        // Authorization
        // $this->authorize('updateStatus', $task);

        $request->validate([
            'status' => 'required|string'
        ]);

        $task->status = $request->status;
        $task->save();

        return response()->json([
            'message' => 'Task status updated successfully',
            'task' => $task
        ]);
    }
}
