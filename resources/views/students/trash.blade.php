@extends('layouts.main')


@section('main')
    <div class="container">
        <h2>TRASH</h2>
        <ul>
            @forelse ($students as $student)
                <li class="card my-3 p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1>{{ $student->first_name }} {{ $student->last_name }}</h1>
                        <form data-name="{{ $student->first_name }} {{ $student->last_name }}" class="delete-form"
                            action="{{ route('students.drop', $student) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina definitivamente</button>
                        </form>
                    </div>
                </li>
            @empty
                <h1 class="text-danger">Non ci sono studenti nel cestino</h1>
            @endforelse
        </ul>
        <form action="{{ route('students.dropAll') }}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">
                SVUOTA CESTINO
            </button>
        </form>
        <a href="{{ route('students.index') }}">Torna alla lista studenti</a>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/alert.js')
@endsection
