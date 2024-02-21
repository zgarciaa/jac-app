<div>
    <p>{{ $question->id . '. ' . $question->statement }}</p>
    <ul>
        @foreach ($question->answer_options as $option)
            @if($question->multiple_answers === 1)
                <label>
                    <input
                        type="checkbox"
                        name="answers[{{ $question->id }}][]}"
                        value="{{ $option->id }}"
                    >
                </label>
                {{ $option->letter . '. ' . $option->value }}
            @else
                <label>
                    <input
                        type="radio"
                        name="answers[{{ $question->id }}]"
                        value="{{ $option->id }}"
                        required
                    >
                </label>
                {{ $option->letter . '. ' . $option->value }}
            @endif
            @if ($option->is_other === 1)
                <label>
                    <input
                        type="text"
                        placeholder="Especificar"
                    >
                </label>
            @endif
            <br>
        @endforeach
    </ul>
</div>
