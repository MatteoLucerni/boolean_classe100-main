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
                            <a class="btn btn-info text-white me-3" href="{{ route('students.show', $student) }}">Dettagli
                                studente</a>
                            <a class="btn btn-success" href="{{ route('students.create') }}">Aggiungi studente</a>
                            <a class="btn btn-warning mx-3" href="{{ route('students.edit', $student) }}">Modifica
                                studente</a>
                            <form data-name="{{ $student->first_name }} {{ $student->last_name }}" class="delete-form"
                                action="{{ route('students.destroy', $student) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina studente</button>
                            </form>
                        </div>
                    </div>
                </li>
            @empty
                <h1 class="text-danger text-center">Nessuno studente disponibile</h1>
            @endforelse
        </ul>
        <div class="text-center my-5">
            <a class="btn btn-secondary" href="{{ route('students.trash') }}">Vai al Cestino</a>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/alert.js')
@endsection
