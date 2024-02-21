<?php

namespace App\Http\Controllers;

use App\Http\Requests\Question\StoreQuestionRequest;
use App\Http\Requests\Question\UpdateQuestionRequest;
use App\Models\Question;
use App\Modules\Question\Infrastructure\QuestionRepository;
use Illuminate\Http\JsonResponse;

class QuestionController extends Controller
{

    public function __construct(
       public QuestionRepository $questionRepository
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $questions = $this->questionRepository->all();
        return response()->json($questions);
    }

}
