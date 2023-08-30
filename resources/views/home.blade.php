@extends('layouts.main')


@section('main')
    <div class="container">
        <h2><a href="#">Home</a></h2>
        <a href="{{ route('students.index') }}">to index</a>
    </div>
@endsection
