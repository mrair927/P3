@extends('layouts.master')

@section('title')



@section('content')
  <a href='/'>Back to Home</a>

    <h1>Generate some Lorem Ipsum Text!</h1>
    <br>

     <form method="post" action="/lipsums">
         {{ csrf_field() }}
        Number of paragraphs (max: 9): <input type="text" maxlength="1" name="numberParagraphs">
        <br>
      <br>
        <button type="submit" class="btn btn-primary">Generate Some Lorem Ipsum!</button>

        @if(count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </form>

@endsection
