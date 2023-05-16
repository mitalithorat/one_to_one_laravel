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
<h2 class="container p-3  text-center text-dark " style="margin-top:30px;" > Show Details</h2>
<form class="container form-control p-5 shadow p-3 mb-5 bg-white rounded border border-secondary border border-2">
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Firstname:</strong>
            {{$account->firstname}}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Lastname:</strong>
            {{$account->lastname}}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Username:</strong>
            {{$account->username}}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Contact:</strong>
            {{$account->contact}}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Email:</strong>
            {{$account->email}}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Country:</strong>
            {{$account->country}}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>State:</strong>
            {{$account->state}}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Street:</strong>
            {{$account->street}}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Pincode:</strong>
            {{$account->pincode}}
        </div>
    </div>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('accounts.index') }}"> Back</a>
    </div>
</form>
