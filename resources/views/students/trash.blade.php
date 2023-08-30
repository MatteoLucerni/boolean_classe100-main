@extends('layouts.main')


@section('main')
    <div class="container">
        <h2>TRASH</h2>
        <ul>
            @forelse ($students as $student)
                <li class="card my-3 p-4">
                    <h1>{{ $student->first_name }} {{ $student->last_name }}</h1>
                </li>
            @empty
                <h1 class="text-danger">Non ci sono studenti nel cestino</h1>
            @endforelse
        </ul>
        <form action="{{ route('students.dropAll') }}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">
                SVUOTA CENSTINO
            </button>
        </form>
        <a href="{{ route('students.index') }}">Torna alla lista studenti</a>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/alert.js')
@endsection
