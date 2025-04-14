<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index()
    {
        $answers = Answer::paginate(10);
        return response()->json($answers);
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'description' => 'required|string',
        ]);

        $answer = Answer::create($request->all());
        return response()->json($answer, 201);
    }

    public function show(Answer $answer)
    {
        return response()->json($answer);
    }

    public function update(Request $request, Answer $answer)
    {
        $validated = $request->validate([
            'description' => 'string',
        ]);

        $answer->update($validated);

        return response()->json($answer);
    }

    public function destroy(Answer $answer)
    {
        $answer->delete();
        return response()->json(null, 204);
    }
}
