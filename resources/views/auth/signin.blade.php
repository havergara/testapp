@extends('layout.guest')

@section('content')
    {!! Form::open(['route'=>'authorize', 'name'=>'frmSignIn', 'id'=>'frmSignIn', 'novalidate']) !!}
    @csrf
    <h1>Login Account</h1>
    <div class="frmElContainer">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, []) !!}
    </div>
    <div class="frmElContainer">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', null, []) !!}
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
        <a href="{{ route('register') }}">Register</a>
        {!! Form::submit('Sign Me In') !!}
    </div>
    {!! Form::close() !!}
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/signin.js') }}"></script>
@endsection
