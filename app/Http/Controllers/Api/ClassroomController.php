<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClassroomResource;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::paginate(10);
        return response()->json($classrooms);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|integer',
            'color' => 'required|string|max:50',
            'user_id' => 'required|exists:users,id',
        ]);

        $classroom = $request->user()->classrooms()->create($request->all());
        return new ClassroomResource($classroom);
    }

    public function show(Classroom $classroom)
    {
        return response()->json($classroom);
    }

    public function update(Request $request, Classroom $classroom)
    {
        $validated = $request->validate([
            'title' => 'string|max:255',
            'icon' => 'integer',
            'color' => 'string|max:50',
        ]);


        $classroom->update($validated);

        return new ClassroomResource($classroom);
    }

    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return response()->json(null, 204);
    }
}