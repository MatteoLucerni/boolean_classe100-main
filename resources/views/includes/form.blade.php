@if ($student->exist)
    <form method="POST" action="{{ route('students.update', $student) }}">
        @method('PUT')
    @else
        <form method="POST" action="{{ route('students.store', $student) }}">
@endif
@csrf
<div class="row">
    <div class="col-4">
        <div class="mb-3">
            <label for="fname" class="form-label"><strong>Nome</strong></label>
            <input type="text" class="form-control" id="fname" name="first_name"
                value="{{ old('fist_name', $student->first_name) }}" autofocus>
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
                value="{{ old('last_name', $student->last_name) }}">
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
            value="{{ old('age', $student->age) }}">
        @error('age')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="mb-3">
            <label for="address" class="form-label"><strong>Indirizzo</strong></label>
            <input type="text" class="form-control" id="address" name="address"
                value="{{ old('address', $student->address) }}">
        </div>
    </div>
    <div class="col-4">
        <label for="city" class="form-label"><strong>Città</strong></label>
        <input type="text" class="form-control" id="city" name="city"
            value="{{ old('city', $student->city) }}">
    </div>
</div>
<div class="row">
    <div class="col-4">
        <label for="country" class="form-label"><strong>Paese</strong></label>
        <input type="text" class="form-control" id="country" name="country"
            value="{{ old('country', $student->country) }}">
    </div>
    <div class="col-2">
        <label for="postal-code" class="form-label"><strong>Codice postale</strong></label>
        <input type="number" class="form-control" id="postal-code" name="post_code"
            value="{{ old('post_code', $student->post_code) }}">
    </div>
</div>
<div class="buttons mt-5 d-flex justify-content-center">
    <button type="reset" class="btn btn-warning me-3">Reset</button>
    <button type="submit" class="btn btn-success ">Invia</button>
</div>
</form>
