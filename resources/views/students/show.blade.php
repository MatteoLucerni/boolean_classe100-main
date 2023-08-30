@extends('layouts.main')


@section('main')
    <div class="container my-5">
        <a class="d-block text-center" href="{{ route('students.index') }}">Torna alla lista studenti</a>
        <div class="buttons text-center mt-5">
            <a class="btn btn-warning mx-3" href="{{ route('students.edit', $student) }}">Modifica
                studente</a>
            <a class="btn btn-danger" href="{{ route('students.destroy', $student) }}">Elimina studente</a>
        </div>
        <div class="card p-5 mt-5">
            <h1>
                Studente: {{ $student->first_name }} {{ $student->last_name }}
            </h1>
            <h3>Età': {{ $student->age }}</h3>
            <p>Indirizzo: {{ $student->address }}</p>
            <p>Città: {{ $student->city }}</p>
            <p>Paese: {{ $student->country }}</p>
            <p>CAP: {{ $student->post_code }}</p>
        </div>
    </div>
@endsection
