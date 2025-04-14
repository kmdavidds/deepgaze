<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ChapterAttempt;
use Illuminate\Http\Request;

class ChapterAttemptController extends Controller
{
    public function index()
    {
        $chapterAttempts = ChapterAttempt::paginate(10);
        return response()->json($chapterAttempts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'chapter_id' => 'required|exists:chapters,id',
        ]);

        $chapterAttempt = ChapterAttempt::create($request->all());
        return response()->json($chapterAttempt, 201);
    }

    public function show(ChapterAttempt $chapterAttempt)
    {
        return response()->json($chapterAttempt);
    }

    public function update(Request $request, ChapterAttempt $chapterAttempt)
    {
        $validated = $request->validate([
            'user_id' => 'exists:users,id',
            'chapter_id' => 'exists:chapters,id',
        ]);

        $chapterAttempt->update($validated);

        return response()->json($chapterAttempt);
    }

    public function destroy(ChapterAttempt $chapterAttempt)
    {
        $chapterAttempt->delete();
        return response()->json(null, 204);
    }
}
