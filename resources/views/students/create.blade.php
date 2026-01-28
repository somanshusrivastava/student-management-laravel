@extends('layout')

@section('content')
<h2>Add Student</h2>

<form method="POST" action="{{ route('students.store') }}">
@csrf

<input class="form-control mb-2" name="name" placeholder="Name">
<input class="form-control mb-2" name="email" placeholder="Email">
<input class="form-control mb-2" name="course" placeholder="Course">
<input class="form-control mb-2" name="phone" placeholder="Phone">

<button class="btn btn-success">Save</button>
</form>
@endsection
