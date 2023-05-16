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
                <h2 class="container p-3  text-center text-dark " style="margin-top:55px;" > Show Details</h2>
            <!-- </div> -->

        <!-- </div> -->
    <!-- </div> -->

    <form class="container form-control  text-dark  p-5">
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Firstname:</strong>
                {{ $student->firstname }}
            </div>
</div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Lastname:</strong>
                {{ $student->lastname }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $student->email }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Hobbies:</strong>
                {{ $student->hobbies }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $student->gender }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Contact:</strong>
                {{ $student->contact }}
            </div>
        </div>

        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </form>

