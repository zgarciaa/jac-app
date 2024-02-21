<?php

namespace App\Modules\Question\Domain;

use Illuminate\Database\Eloquent\Collection;

interface QuestionRepositoryInterface
{
    public function all(): Collection;
}
