<?php

namespace App\Modules\Question\Infrastructure;

use App\Models\Question;
use App\Modules\Question\Domain\QuestionRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class QuestionRepository implements QuestionRepositoryInterface
{
    public function all(): Collection
    {
        return Question::with('answer_options')->get();
    }
}
