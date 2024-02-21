<?php

namespace App\Http\Controllers;

use App\Modules\Question\Infrastructure\QuestionRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class QuestionaryController extends Controller
{

    public function __construct(
        public QuestionRepository $repository
    ) {}

    public function list(Request $request): View
    {
        $questions = $this->repository->all();
        return view('questionary.questions')->with(compact('questions'));
    }

    public function getAnswers(Request $request): array
    {
        return $request->all();
    }
}
