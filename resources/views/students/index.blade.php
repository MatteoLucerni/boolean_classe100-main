@extends('layouts.main')


@section('main')
    <div class="container">
        <h2><a href="#">Index</a></h2>
        <ul>
            @forelse ($students as $student)
                <li class="card my-3 p-4">
                    <div class="row">
                        <div class="col-6 left-side">
                            <h3>Nome: {{ $student->first_name }}</h3>
                            <h3>Cognome: {{ $student->last_name }}</h3>
                        </div>
                        <div class="col-6 right-side d-flex align-items-center ">
                            <a class="btn btn-success" href="{{ route('students.create') }}">Aggiungi studente</a>
                            <a class="btn btn-warning mx-3" href="{{ route('students.edit', $student) }}">Modifica
                                studente</a>
                            <a class="btn btn-danger" href="{{ route('students.destroy', $student) }}">Elimina studente</a>
                        </div>
                    </div>
                </li>
            @empty
                <h1 class="text-danger text-center">Nessuno studente disponibile</h1>
            @endforelse
        </ul>
    </div>
@endsection
