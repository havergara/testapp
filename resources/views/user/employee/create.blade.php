@extends('layout.app')

@section('content')
    <div class="flexContainer">
        {!! Form::open(['route'=>'storeEmployee', 'name'=>'frmEmployee', 'novalidate']) !!}
        @csrf
        @include('user.employee.form')
        {!! Form::close() !!}
    </div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/employee.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/employee.js') }}"></script>
@endsection
