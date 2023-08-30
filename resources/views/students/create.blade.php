@extends('layouts.main')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center my-5">AGGIUNGI UN NUOVO STUDENTE</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('students.index') }}" class="btn btn-secondary"><-- Torna indietro</a>
        </div>

        {{-- FORM --}}
        @include('includes.form')
    </div>
@endsection
