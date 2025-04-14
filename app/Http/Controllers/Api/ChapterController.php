<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function index()
    {
        $chapters = Chapter::paginate(10);
        return response()->json($chapters);
    }

    public function store(Request $request)
    {
        $request->validate([
            'classroom_id' => 'required|exists:classrooms,id',
            'category' => 'required|in:material,quiz,task',
            'icon' => 'required|integer',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $chapter = Chapter::create($request->all());
        return response()->json($chapter, 201);
    }

    public function show(Chapter $chapter)
    {
        return response()->json($chapter);
    }

    public function update(Request $request, Chapter $chapter)
    {
        $validated = $request->validate([
            'classroom_id' => 'exists:classrooms,id',
            'category' => 'in:material,quiz,task',
            'icon' => 'integer',
            'title' => 'string|max:255',
            'content' => 'string',
        ]);

        $chapter->update($validated);

        return response()->json($chapter);
    }

    public function destroy(Chapter $chapter)
    {
        $chapter->delete();
        return response()->json(null, 204);
    }
}
