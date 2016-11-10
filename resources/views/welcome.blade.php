
@extends('layouts.master')


@section('nav')
<nav>
    <ul>

        <li><a href='/lipsums/create'>Generate some Lorem Ipsum Text!</a></li>
        <li><a href='/users/create'>Generate some Fake Users!</a></li>
    </ul>
</nav>

@endsection

@section('title')
    A Developers Best Friend
@endsection

@section('content')
    <h1>Developers Best Friend</h1>
    <h2>Lorem Ipsum Generator</h2>
    <p>Use this tool to generate Lorem Ipsum text for your application!</p>
    <a href='/lipsums/create'>Lorem Ipsum Generator</a>
    <h2>Random User Generator</h2>
    <p>Use this tool to generate random users!</p>
    <a href='/users/create'>User Generator</a>


@endsection
