@extends('layouts.main')


@section('main')
    <div class="container">
        <h2>TRASH</h2>
        <ul>
            @forelse ($students as $student)
                <li>
                    <h1>{{ $student->first_name }} {{ $student->last_name }}</h1>
                </li>
            @empty
                <h1 class="text-danger">Non ci sono studenti nel cestino</h1>
            @endforelse
        </ul>
        <a href="{{ route('students.index') }}">Torna alla lista studenti</a>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/alert.js')
@endsection
