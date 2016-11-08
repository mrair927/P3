@extends('lipsum.index')

@section('content')
    @parent

    <blockquote>
    @foreach ($paragraphs as $paragraph)
        <p>{{ $paragraph }}</p>
    @endforeach
    </blockquote>

    <a href='/lipsum/create'> Generate more text!...</a>
@endsection
