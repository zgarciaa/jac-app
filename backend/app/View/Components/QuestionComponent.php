<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Question;

class QuestionComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Question $question,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.question-component');
    }
}
