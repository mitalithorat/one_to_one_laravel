@extends('layout')
@section('content')

<div class="bg-dark py-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LARAVEL CRUD</a>

            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" action="#" href="{{ route('students.index') }}" target="_self">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" action="#" href="{{ route('accounts.index') }}" target="_self">Account</a>
                </li>
            </ul>
        </div>

    </nav>


</div>
    <div class="container py-3">
        <div class="d-flex justify-content-between">
            <div class="h4">STUDENTS</div>
            <div>
                <a href="{{ route('students.index') }}" class="btn btn-primary mb-3">BACK</a>
            </div>
        </div>
        {{-- <form action="{{ route('students.store') }}" method="post">
            @csrf --}}
            {!! Form::open(['url'=>route('students.store') , 'method'=>"post"]  ) !!}
            @include('students.form')
            {{-- <div class="card border-0 shadow-lg">
                <div class="card-body">


                    <div class="mb-3 mt-3">
                        <label for="fname">FIRSTNAME:</label>
                        <input type="text" class="form-control" id="fname" name="firstname" placeholder="Enter FirstName" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="lname">LASTNAME:</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter LastName" name="lastname" required>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="email">EMAIL:</label>
                        <input type="email" class="form-control" id="email"  name="email" placeholder="xyz@gamil.com">
                    </div>
                    <label for="Hobby">HOBBIES:</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="check1" name="hobbies[]" value="Read">
                        <label class="form-check-label" for="check1">Read</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="check2" name="hobbies[]" value="Travelling">
                        <label class="form-check-label" for="check2">Travelling</label>
                    </div>

                    <label for="gender">GENDER:</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male">
                        <label class="form-check-label" for="radio1">Male</label>
                    </div>

                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="Female">
                        <label class="form-check-label" for="radio2">Female</label>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="contact">CONTACT:</label>
                        <input type="number" class="form-control" id="contact" name="contact" required>
                    </div>


                </div>
            </div> --}}

            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
{!! Form::close() !!}
        {{-- </form> --}}
    </div>
