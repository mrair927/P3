@extends('layouts.master')

@section('content')
    <a href='/'>Back to Home</a>


        <blockquote>
        <?php echo implode('<p>', $paragraphs); ?>
    </blockquote>
    <a href='/lipsums/create'> Generate more text!...</a>
@endsection
