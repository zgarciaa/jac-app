@extends('layouts.base')
@section('content')
    <h1>Cuestionario</h1>
    @if(session()->has('person'))
        @php
            $person = session('person');
        @endphp
        <div class="person-information">
            <h2 style="margin-bottom: 5px;">Persona encuestada:</h2>
            <p>Nombre: {{ $person->first_name . ' ' . $person->first_surname }}</p>
            <p>No. Documento: {{ $person->document_number }}</p>
        </div>
    @endif
    <div class="container-questions">
        <form action="{{ route('questionary.answers') }}" method="post">
            @csrf
            @if(isset($person))
                <input type="hidden" name="document_number" value="{{ $person->document_number }}">
            @endif
            <div class="questions">
                @foreach($questions as $question)
                    <x-question-component
                        :question="$question"
                    ></x-question-component>
                @endforeach
            </div>
            <div class="btn-send">
                <button type="submit">Enviar Respuestas</button>
            </div>
        </form>
    </div>
    <link rel="stylesheet" href="{{ asset('css/questionary.css') }}">
@endsection
