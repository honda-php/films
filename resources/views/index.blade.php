@extends('layouts.app')
@section('content')
    <div class="wrapper">
        <div class="">
            <h1>filmsへようこそ</h1>
            {!! link_to_route('signup.get', 'まずは会員登録から始めましょう', [], ['class' => 'bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded']) !!}
        </div>
    </div>
@endsection