@extends('layouts.app')
@section('content')
<div class="">

    <div class="">
        <p>filmsへようこそ！こちらから会員登録をして始めましょう    </p>
    </div>
    <form class="w-full max-w-sm">
    <div class="md:flex md:items-center mb-6">
        {!! Form::open(['route' => 'signup.post']) !!}
        <div class="md:w-1/3">
            {!! Form::label('name', 'name', ['class' => 'block md:text-right mb-1 md:mb-0 pr-4']) !!}
        </div>
        <div class="md:w-2/3">
            {!! Form::text('name', old('name'), ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) !!}
        </div>
    </div>
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
            {!! Form::label('password', 'password', ['class' => 'block md:text-right mb-1 md:mb-0 pr-4']) !!} 
        </div>
        <div class="md:w-2/3">
            {!! Form::password('password', ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) !!}
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            {!! Form::label('password_confirmation', 'confirmation', ['class' => 'block md:text-right mb-1 md:mb-0 pr-4']) !!} 
        </div>
        <div class="md:w-2/3">
            {!! Form::password('password_confirmation', ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) !!}
        </div>
    </div>
        {!! Form::close() !!}
    </form>
</div>
@endsection