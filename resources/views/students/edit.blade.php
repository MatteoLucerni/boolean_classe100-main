@extends('layouts.main')

@section('main')
    <div class="container">
        <a href="{{ route('students.index') }}" class="btn btn-secondary my-5">Torna indietro</a>

        <form method="POST" action="{{ route('students.update', $student) }}">

            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-5 mb-5">
                    <label for="first_name" class="form-label">Nome</label>
                    <input type="text" class="form-control" value="{{ old('first_name', $student->first_name) }}"
                        id="first_name" name="first_name" placeholder="Nome">
                </div>
                <div class="col-5 mb-5">
                    <label for="last_name" class="form-label">Cognome</label>
                    <input type="text" class="form-control" value="{{ old('last_name', $student->last_name) }}"
                        id="last_name" name="last_name" placeholder="Cognome">
                </div>
                <div class="col-2 mb-5">
                    <label for="age" class="form-label">Età</label>
                    <input type="number" class="form-control" value="{{ old('age', $student->age) }}" id="age"
                        name="age" placeholder="Età">
                </div>
                <div class="col-5 mb-5">
                    <label for="city" class="form-label">Città</label>
                    <input type="text" class="form-control" value="{{ old('city', $student->city) }}" id="city"
                        name="city" placeholder="Città">
                </div>
                <div class="col-7 mb-5">
                    <label for="country" class="form-label">Paese</label>
                    <input type="text" class="form-control" value="{{ old('country', $student->country) }}"
                        id="country" name="country" placeholder="Paese">
                </div>
                <div class="col-10 mb-5">
                    <label for="address" class="form-label">Indirizzo</label>
                    <input type="text" class="form-control" value="{{ old('address', $student->address) }}"
                        id="address" name="address" placeholder="Indirizzo">
                </div>
                <div class="col-2 mb-5">
                    <label for="post_code" class="form-label">CAP</label>
                    <input type="text" class="form-control" value="{{ old('post_code', $student->post_code) }}"
                        id="post_code" name="post_code" placeholder="CAP">
                </div>
            </div>
            <button type="submit" class="btn btn-success my-3">Salva</button>
        </form>
    </div>
@endsection
