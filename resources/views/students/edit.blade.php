@extends('layout')

@section('content')
<h2>Edit Student</h2>

<form method="POST" action="{{ route('students.update',$student->id) }}">
@csrf @method('PUT')

<input class="form-control mb-2" name="name" value="{{ $student->name }}">
<input class="form-control mb-2" name="email" value="{{ $student->email }}">
<input class="form-control mb-2" name="course" value="{{ $student->course }}">
<input class="form-control mb-2" name="phone" value="{{ $student->phone }}">

<button class="btn btn-primary">Update</button>
</form>
@endsection
