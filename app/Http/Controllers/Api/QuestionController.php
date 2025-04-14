<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::paginate(10);
        return response()->json($questions);
    }

    public function store(Request $request)
    {
        $request->validate([
            'chapter_id' => 'required|exists:chapters,id',
            'description' => 'required|string',
        ]);

        $question = Question::create($request->all());
        return response()->json($question, 201);
    }

    public function show(Question $question)
    {
        return response()->json($question);
    }

    public function update(Request $request, Question $question)
    {
        $validated = $request->validate([
            'chapter_id' => 'exists:chapters,id',
            'description' => 'string',
        ]);

        $question->update($validated);

        return response()->json($question);
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return response()->json(null, 204);
    }
}
