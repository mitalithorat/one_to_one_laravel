<div class="container">
    <div class="row">
        <div class="col-md-6 py-2">
            <span style="color: red">* </span>
            {!! Form::label('firstname', 'FIRST NAME:', ['class' => 'form-label']) !!}

            {!! Form::text('firstname', null, [
                'class' => 'form-control',
                'id' => 'fname',

                'placeholder' => 'Enter FirstName',
            ]) !!}
            @error('firstname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-6 py-2">
            {{-- <label for="lname" class="form-label"><span style="color: red">* </span>LAST NAME:</label> --}}
            <span style="color: red">* </span>
            {!! Form::label('lastname', 'LAST NAME:', ['class' => 'form-label']) !!}

            {{-- <input type="text" class="form-control" id="lname" placeholder="Enter LastName" name="lastname"
                value="{{ isset($account) ? $account->lastname : '' }}"> --}}
            {!! form::text('lastname', null, [
                'class' => 'form-control',
                'id' => 'lname',
                'placeholder' => 'Enter LastName',
            ]) !!}

            @error('lastname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>
    <div class="row">
        <div class="col-md-6 py-2">
            <span style="color: red">* </span>
            {!! Form::label('username', 'USER NAME:', ['class' => 'form-label']) !!}
            {!! Form::text('username', null, [
                'class' => 'form-control',
                'id' => 'username',
                'placeholder' => 'Enter Username',
            ]) !!}
            @error('username')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 py-2">
            <span style="color: red">* </span>
            {!! Form::label('contact', 'CONTACT:', ['class' => 'form-label']) !!}
            {!! Form::text('contact', null, [
                'class' => 'form-control',
                'id' => 'contact',
                'placeholder' => '0000000000',
            ]) !!}
            @error('contact')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 py-2">
            <span style="color: red">* </span>
            {!! Form::label('email', 'EMAIL:', ['class' => 'form-label']) !!}
            {!! Form::email('email', null, [
                'class' => 'form-control',
                'id' => 'email',
                'placeholder' => 'xyz@gamil.com',
            ]) !!}
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6 py-2">
            {!! Form::label('country', 'COUNTRY:', ['class' => 'form-label']) !!}
            {!! Form::select('country', ['' => 'Choose country', 'India' => 'India', 'Us' => 'Us'], null, [
                'class' => 'form-select',
                'id' => 'country',
            ]) !!}
            {{-- <select id="country" name="country" class="form-select">
                <option selected>Choose country</option>
                <option value="India" {{ isset($account) && $account->country == 'India' ? 'selected' : '' }}>India
                </option>
                <option value="Us" {{ isset($account) && $account->country == 'Us' ? 'selected' : '' }}>United
                    States</option>
            </select> --}}

        </div>
        @error('country')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="row">
        <div class="col-md-6 py-2">
            {!! Form::label('state', 'STATE:', ['class' => 'form-label']) !!}
            {!! Form::select(
                'state',
                ['' => 'Choose State', 'Maharastra' => 'Maharastra', 'Punjab' => 'Punjab', 'Delhi' => 'Delhi'],
                null,
                ['id' => 'state', 'class' => 'form-select'],
            ) !!}
        </div>
        {{--
            <select id="state" name="state" class="form-select">
                <option selected>Choose state</option>
                <option value="Maharashtra"{{ isset($account) && $account->state == 'Maharastra' ? 'selected' : '' }}>
                    Maharastra</option>
                <option value="Punjab"{{ isset($account) && $account->state == 'Punjab' ? 'selected' : '' }}>Punjab
                </option>
                <option value="Delhi"{{ isset($account) && $account->state == 'Delhi' ? 'selected' : '' }}>Delhi
                </option>
            </select> --}}


        <div class="col-md-6 py-2">
            <span style="color: red">*</span>
            {!! Form::label('street', 'STREET:', ['class' => 'form-label']) !!}
            {!! Form::text('street', null, ['class' => 'form-control', 'id' => 'street']) !!}

            @error('street')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 py-2">
            <span style="color: red">*</span>
            {!! Form::label('pincode', 'PIN CODE', ['class' => 'form-label']) !!}
            {!! Form::number(
                'pincode',
                // isset($account) ? $account->pincode : ''
                null,
                [
                    'class' => 'form-control',
                    'id' => 'pin',
                ],
            ) !!}

            @error('pincode')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    {{-- <button type="submit" class="btn btn-primary"
        style="margin-top:10px">{{ isset($account) ? 'Update' : 'Save' }}</button> --}}
    {{ Form::submit(isset($account) ? 'Update' : 'Save', ['class' => 'btn btn-primary', 'style' => 'margin-top:10px']) }}
