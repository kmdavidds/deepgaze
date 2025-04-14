<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserAnswer;
use Illuminate\Http\Request;

class UserAnswerController extends Controller
{
    public function index()
    {
        $userAnswers = UserAnswer::paginate(10);
        return response()->json($userAnswers);
    }

    public function store(Request $request)
    {
        $request->validate([
            'chapter_attempt_id' => 'required|exists:chapter_attempts,id',
            'answer_id' => 'required|exists:answers,id',
            'answer_text' => 'nullable|string',
            'score' => 'nullable|numeric',
        ]);

        $userAnswer = UserAnswer::create($request->all());
        return response()->json($userAnswer, 201);
    }

    public function show(UserAnswer $userAnswer)
    {
        return response()->json($userAnswer);
    }

    public function update(Request $request, UserAnswer $userAnswer)
    {
        $validated = $request->validate([
            'chapter_attempt_id' => 'exists:chapter_attempts,id',
            'answer_id' => 'exists:answers,id',
            'answer_text' => 'nullable|string',
            'score' => 'nullable|numeric',
        ]);

        $userAnswer->update($validated);

        return response()->json($userAnswer);
    }

    public function destroy(UserAnswer $userAnswer)
    {
        $userAnswer->delete();
        return response()->json(null, 204);
    }
}
