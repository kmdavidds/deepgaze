<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CorrectAnswer;
use Illuminate\Http\Request;

class CorrectAnswerController extends Controller
{
    public function index()
    {
        $correctAnswers = CorrectAnswer::paginate(10);
        return response()->json($correctAnswers);
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer_id' => 'required|exists:answers,id',
        ]);

        $correctAnswer = CorrectAnswer::create($request->all());
        return response()->json($correctAnswer, 201);
    }

    public function show(CorrectAnswer $correctAnswer)
    {
        return response()->json($correctAnswer);
    }

    public function update(Request $request, CorrectAnswer $correctAnswer)
    {
        $validated = $request->validate([
            'question_id' => 'exists:questions,id',
            'answer_id' => 'exists:answers,id',
        ]);

        $correctAnswer->update($validated);
        return response()->json($correctAnswer);
    }

    public function destroy(CorrectAnswer $correctAnswer)
    {
        $correctAnswer->delete();
        return response()->json(null, 204);
    }
}
