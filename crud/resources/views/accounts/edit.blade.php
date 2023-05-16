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
            <div class="h4">ACCOUNTS</div>
            <div>
                <a href="{{ route('accounts.index') }}" class="btn btn-primary mb-3">BACK</a>
            </div>
        </div>

        {{-- <form action="{{ route('accounts.update', $account->id) }}" method="POST">

            @csrf
            @method('PUT')
            @include('accounts.form')

        </form> --}}
        {{-- {!! Form::open(['route' => ['accounts.update', $account->id], 'method' => 'PUT']) !!} --}}
        {{ Form::model($account, ['route' => ['accounts.update', $account->id], 'method' => 'PUT']) }}

        {{-- {!! Form::model(, [$options]) !!} --}}

        @include('accounts.form')
        {!! Form::close() !!}

    </div>
