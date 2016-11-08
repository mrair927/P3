@extends('layouts.master')




@section('content')

    <h1>Generate some Lorem Ipsum Text!</h1>
    <form method='POST' action='/lipsums'>
         {{ csrf_field() }}
        Number of paragraphs (max: 9): <input type='number' name='numParagraphs' min="1" max="15">
        <input type='submit' value='Generate Some Lorem Ipsum!'>

        @if(count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </form>

@endsection
