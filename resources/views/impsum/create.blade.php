@extends('layouts.master')




@section('content')

    <h1>Generate some Lorem Ipsum Text!</h1>
    <form method='POST' action='/lipsums'>
      {!! csrf_token() !!}
        Number of paragraphs (max: 9): <input type='number' name='numParagraphs' min="1" max="15">
        <input type='submit' value='Generate Some Lorem Ipsum!'>


    </form>

@endsection
