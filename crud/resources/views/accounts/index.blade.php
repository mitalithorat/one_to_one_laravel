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
                <a href="{{ route('accounts.create') }}" class="btn btn-primary mb-3">CREATE</a>
            </div>
        </div>
        <div class="card border-0 shadow-lg">
            <div class="card-body ">
                <table class="table table-light table-striped">
                    <thead>
                        <tr>

                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>USER NAME</th>
                            <th>CONTACT</th>
                            <th>EMAIL</th>
                            <th>COUNTRY</th>
                            <th>STATE</th>
                            <th>STREET</th>
                            <th>PIN CODE</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($accounts as $account)
                            <tr>

                                <td>{{ $account->firstname }}</td>
                                <td>{{ $account->lastname }}</td>
                                <td>{{ $account->username }}</td>
                                <td>{{ $account->contact }}</td>
                                <td>{{ $account->email }}</td>
                                <td>{{ $account->country }}</td>
                                <td>{{ $account->state }}</td>
                                <td>{{ $account->street }}</td>
                                <td>{{ $account->pincode }}</td>
                                <td>

                                    {{-- <form action="{{ route('accounts.destroy', $account->id) }}" method="POST"> --}}
                                    {!! Form::open(['route' => ['accounts.destroy', $account->id], 'method' => 'POST']) !!}

                                    <a
                                        class="btn-outline-success btn"href="{{ route('accounts.show', $account->id) }}">View</a>
                                    <a
                                        class="btn-outline-primary btn"href="{{ route('accounts.edit', $account->id) }}">Edit</a>



                                    @method('DELETE')
                                    {!! Form::submit('Delete', ['class' => 'btn-outline-danger btn']) !!}
                                    {{-- <button type="submit" class="btn-outline-danger btn">Delete</button> --}}
                                    {!! Form::close() !!}
                                    {{-- </form> --}}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>
@endsection
