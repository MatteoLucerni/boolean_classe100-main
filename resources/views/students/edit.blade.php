@extends('layouts.main')

@section('main')
    <div class="container">

        <h1 class="text-center my-5">Modifica i dati dello studente</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('students.index') }}" class="btn btn-secondary my-5"><--- Torna indietro</a>
        </div>

        @include('includes.form')
    </div>
@endsection
