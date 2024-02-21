@extends('layouts.base')

@section('content')
    <div style="padding: 10px; display: flex; justify-content: center;">
        <form action="{{ route('persons.register') }}" method="post">
            @csrf
            <div style="display: flex; flex-direction: column;">
                <label for="document_number">Documento:
                    <input type="number" id="document_number" name="document_number">
                </label>
                <label for="phone_number">Teléfono:
                    <input type="number" id="phone_number" name="phone_number">
                </label>
                <label for="first_name">Primer nombre:
                    <input type="text" id="first_name" name="first_name">
                </label>
                <label for="other_name">Otros nombres:
                    <input type="text" id="other_name" name="other_name">
                </label>
                <label for="first_surname">Primer Apellido:
                    <input type="text" id="first_surname" name="first_surname">
                </label>
                <label for="second_surname">Segundo Apellido:
                    <input type="text" id="second_surname" name="second_surname">
                </label>
            </div>
            <div style="text-align: right; margin-top: 10px;">
                <button type="submit">Registrar</button>
            </div>
        </form>
    </div>
@endsection
