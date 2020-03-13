@extends('layouts.app')
@section('content')
<div class="">

    <div class="">
        <p>filmsへようこそ！こちらから会員登録をして始めましょう</p>
    </div>
        {!! Form::open(['route' => 'signup.post','method' => 'post']) !!}
        <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            {!! Form::label('name', 'ユーザー名', ['class' => 'block md:text-right mb-1 md:mb-0 pr-4']) !!}
        </div>
        <div class="md:w-2/3">
            {!! Form::text('name', old('name'), ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) !!}
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            {!! Form::label('email', 'メールアドレス', ['class' =>'block md:text-right mb-1 md:mb-0 pr-4']) !!}   
        </div>
        <div class="md:w-2/3">
            {!! Form::email('email', old('email'), ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) !!}
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            {!! Form::label('password', 'パスワード', ['class' => 'block md:text-right mb-1 md:mb-0 pr-4']) !!} 
        </div>
        <div class="md:w-2/3">
            {!! Form::password('password', ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) !!}
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            {!! Form::label('password_confirmation', 'パスワード（確認のため再入力して下さい）', ['class' => 'block md:text-right mb-1 md:mb-0 pr-4']) !!} 
        </div>
        <div class="md:w-2/3">
            {!! Form::password('password_confirmation', ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) !!}
        </div>
    </div>
        {!! Form::submit('新機会員登録', ['class' => 'bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded']) !!}
        {!! Form::close() !!}
</div>
@endsection