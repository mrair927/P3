@extends('layouts.master')

@section('content')
    @parent


        <blockquote>
        <?php echo implode('<p>', $paragraphs); ?>
    </blockquote>
    <a href='/lipsums/create'> Generate more text!...</a>
@endsection
