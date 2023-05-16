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
            <div class="h4">Accounts</div>
            <div>
                <a href="{{ route('accounts.index') }}" class="btn btn-primary mb-3">BACK</a>
            </div>
        </div>
        {{-- <form action="{{ route('accounts.store') }}" method="post"> --}}
        {!! Form::open([
            'url' => route('accounts.index'),
            'method' => 'post',
        ]) !!}

        @include('accounts.form')
        {{-- <div class="card border-0 shadow-lg">
            <div class="card-body">


                <div class="mb-3 mt-3">
                    <label for="fname">FIRSTNAME:</label>
                    <input type="text" class="form-control" id="fname" name="firstname" placeholder="Enter FirstName"
                        required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="lname">LASTNAME:</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter LastName" name="lastname"
                        required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="lname">USERNAME:</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter LastName" name="lastname"
                        required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="contact">CONTACT:</label>
                    <input type="number" class="form-control" id="contact" name="contact" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">EMAIL:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="xyz@gamil.com">
                </div>
                <div class="mb-3 mt-3">
                    <label for="country">Country</label>
                    <select id="Country" name="country" class="form-control">
                        <option selected>Choose country</option>
                        <option value="India">India</option>
                        <option value="Us">United state</option>
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="state">State</label>
                    <select id="State" name="state" class="form-control">
                        <option selected>Choose state</option>
                        <option>Maharastra</option>
                        <option>Punjab</option>
                        <option>Delhi</option>
                    </select>
                </div>

                <div class="mb-3 mt-3">
                    <label for="street">STREET:</label>
                    <input type="text" class="form-control" id="street" name="street" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="pin">PIN CODE:</label>
                    <input type="number" class="form-control" id="pin" name="pin" required>
                </div>




            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div> --}}
        {!! Form::close() !!}
    </div>
