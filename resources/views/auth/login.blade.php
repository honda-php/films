@extends('layouts.app')
@section('content')
<div class="wrapper">
<h1>login</h1>
    {!! Form::open(['route' => 'login.post']) !!}
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            {!! Form::label('email', 'email', ['class' =>'block md:text-right mb-1 md:mb-0 pr-4']) !!}   
        </div>
        <div class="md:w-2/3">
            {!! Form::email('email', old('email'), ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) !!}
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            {!! Form::label('password', 'password', ['class' =>'block md:text-right mb-1 md:mb-0 pr-4']) !!}   
        </div>
        <div class="md:w-2/3">
            {!! Form::password('password', ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) !!}
        </div>
    </div>
    {!! Form::submit('ログイン', ['class' => 'bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded']) !!}
    {!! Form::close() !!}
    </div>
</div>
@endsection