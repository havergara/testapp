@extends('layout.guest')

@section('content')

    {!! Form::open(['route'=>'registerUser', 'name'=>'frmRegister', 'id'=>'frmRegister', 'novalidate']) !!}
    @csrf
    <h1>Register New Account</h1>
    <div class="frmElContainer">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, []) !!}
    </div>
    <div class="frmElContainer">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, []) !!}
    </div>
    <div class="frmElContainer">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', null, []) !!}
    </div>
    <div class="frmElContainer">
        {!! Form::label('password_confirmation', 'Confirm Password') !!}
        {!! Form::password('password_confirmation', null, []) !!}
    </div>
    <div class="errorContainer @if ($errors->any()) displayError @endif">
        <ul class="errors">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endif
        </ul>
    </div>

    <hr>
    <div class="frmControl">
        <a href="{{ route('signin') }}">Sign In</a>
        {!! Form::submit('Register Account') !!}
    </div>
    {!! Form::close() !!}

@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/register.js') }}"></script>
@endsection
