<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClassroomController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    
    Route::apiResource('classrooms', ClassroomController::class);
    Route::apiResource('chapters', \App\Http\Controllers\Api\ChapterController::class);
    Route::apiResource('chapter-attempts', \App\Http\Controllers\Api\ChapterAttemptController::class);
    Route::apiResource('questions', \App\Http\Controllers\Api\QuestionController::class);
    Route::apiResource('answers', \App\Http\Controllers\Api\AnswerController::class);
    Route::apiResource('correct-answers', \App\Http\Controllers\Api\CorrectAnswerController::class);
    Route::apiResource('user-answers', \App\Http\Controllers\Api\UserAnswerController::class);
});
