{{-- <form method="POST"
        action="{{ isset($student) ? route('students.update', $student->id) : route('students.store') }}">
        @csrf
        @if (isset($student))
            @method('PUT')
        @endif --}}
<div class="card border-0 shadow-lg">
    <div class="card-body">
        <div class="mb-3 mt-3">
            <span style="color: red">* </span>
            {!! Form::label('firstname', 'FIRST NAME:', [null]) !!}
            {!! Form::text('firstname', null, [
                'class' => 'form-control',
                'id' => 'fname',
                'placeholder' => 'Enter FirstName',
            ]) !!}
            @error('firstname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>



        <div class="mb-3 mt-3 py-2">
            <span style="color: red">* </span>
            {!! Form::label('lastname', 'LAST NAME:', [null]) !!}
            {!! Form::text('lastname', null, [
                'class' => 'form-control',
                'id' => 'lname',
                'placeholder' => 'Enter Lastname',
            ]) !!}

            @error('lastname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3 mt-3">
            <span style="color: red">* </span>
            {!! Form::label('email', 'EMAIL:', [null]) !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'xyz@gmail.com']) !!}

            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3 mt-3">

            {{ Form::label('hobbies', 'HOBBIES:') }}

            <div class="form-check">
                {{ Form::checkbox('hobbies[]', 'Read', null, ['class' => 'form-check-input', 'id' => 'check1']) }}
                {{ Form::label('check1', 'Read', ['class' => 'form-check-label']) }}
            </div>

            <div class="form-check">
                {{ Form::checkbox('hobbies[]', 'Travelling', null, ['class' => 'form-check-input', 'id' => 'check2']) }}
                {{ Form::label('check2', 'Travelling', ['class' => 'form-check-label']) }}
            </div>
        </div>
        {{-- <label for="Hobby">HOBBIES:</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check1" name="hobbies[]" value="Read"
                    {{ isset($student) && is_array($student->hobbies) && in_array('Read', $student->hobbies) ? 'checked' : '' }}>
                <label class="form-check-label" for="check1">Read</label>


            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check2" name="hobbies[]" value="Travelling"
                    {{ isset($student) && is_array($student->hobbies) && in_array('Read', $student->hobbies) ? 'checked' : '' }}>
                <label class="form-check-label" for="check2">Travelling</label>
            </div>
        </div> --}}

        <div class="mb-3 mt-3">
            {!! Form::label('gender', 'Gender') !!}

            <div class="form-check">
                {!! Form::radio('gender', 'Male', null, ['id' => 'radio1', 'class' => 'form-check-input']) !!}
                {!! Form::label('radio1', 'Male') !!}
            </div>

            <div class="form-check">
                {!! Form::radio('gender', 'Female', null, ['id' => 'radio2', 'class' => 'form-check-input']) !!}
                {!! Form::label('radio2', 'Female') !!}
            </div>
            {{-- <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male"
                    {{ isset($student) && $student->gender == 'Male' ? 'checked' : '' }}>
                <label for="male">Male</label>
            </div>

            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="gender" value="Female"
                    {{ isset($student) && $student->gender == 'Female' ? 'checked' : '' }}>
                <label for="female">Female</label>
            </div> --}}
        </div>

        <div class="mb-3 mt-3">
            <span style="color: red">* </span>
            {!! Form::label('contact', 'CONTACT:', [null]) !!}
            {!! Form::text('contact', null, ['class' => 'form-control', 'id' => 'contact', 'placeholder' => '0000000000']) !!}
            @error('contact')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


    </div>
</div>
<button type="submit" class="btn btn-primary">{{ isset($student) ? 'Update' : 'Save' }}</button>
