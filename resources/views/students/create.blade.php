@extends('layouts.main')

@section('main')
    <div class="container mt-5">
        <h1 class="text-center my-5">AGGIUNGI UN NUOVO STUDENTE</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('students.index') }}" class="btn btn-secondary"><-- Torna indietro</a>
        </div>
        <form method="POST" action="{{ route('students.store', $student) }}">
            @csrf
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="fname" class="form-label"><strong>Nome</strong></label>
                        <input type="text" class="form-control" id="fname" name="first_name"
                            value="{{ old('fist_name') }}" autofocus>
                        @error('first_name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="lname" class="form-label"><strong>Cognome</strong></label>
                        <input type="text" class="form-control" id="lname" name="last_name"
                            value="{{ old('last_name') }}">
                        @error('last_name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-2">
                    <label for="age" class="form-label"><strong>Età</strong></label>
                    <input type="number" class="form-control" id="age" min="18" max="100" name="age"
                        value="{{ old('age') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="address" class="form-label"><strong>Indirizzo</strong></label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="{{ old('address') }}">
                    </div>
                </div>
                <div class="col-4">
                    <label for="city" class="form-label"><strong>Città</strong></label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="country" class="form-label"><strong>Paese</strong></label>
                    <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}">
                </div>
                <div class="col-2">
                    <label for="postal-code" class="form-label"><strong>Codice postale</strong></label>
                    <input type="number" class="form-control" id="postal-code" name="post_code"
                        value="{{ old('post_code') }}">
                </div>
            </div>
            <div class="buttons mt-5 d-flex justify-content-center">
                <button type="reset" class="btn btn-warning me-3">Reset</button>
                <button type="submit" class="btn btn-success ">Invia</button>
            </div>
        </form>
    </div>
@endsection
