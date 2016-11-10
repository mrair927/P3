@extends('layouts.master')


@section('title')
    Random Users
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')


    <a href='/'>Back to Home</a>

    <h3>Random Users</h3><br><br>

    <form method='POST' action='/users' class="form-horizontal">
        <fieldset>
        <input type='hidden' name='_token' value='{{csrf_token()}}'>

        @if(count($errors) > 0)
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif

        <div class="form-group">
        <label for="num_users" class="col-lg-3 control-label">How many users? (Max: 50)</label>
      <div class="col-xs-1">
        <input type="text" class="form-control" id="num_users" name="num_users" value="3">
      </div>

      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">

          <br>

    <div class="checkbox">
          <label>
            <input type="checkbox" id="birthdate" name="birthdate"> Add Birthdate
          </label>
        </div>



        <div class="checkbox">
          <label>
            <input type="checkbox" id="profile" name="profile"> Add Profile Info
          </label>
        </div>

        <br>


        <button type="submit" class="btn btn-primary">Generate users!</button>
      </div>
    </div>
  </fieldset>
    </form>

    <blockquote>

    @for ($i = 0; $i < $data['num_users']; $i++)

    <h4>{{$finalUsers[$i]["name"]}}</h4>

    <p>{{$finalUsers[$i]["address"]}} <br>

    <?php
      if(isset($data['birthdate']))
      {
        echo $finalUsers[$i]["birthdate"];
      }
      if(isset($data['birthdate']) and isset($data['profile'])){
        echo nl2br("\n");
      }
      if(isset($data['profile']))
      {
        echo $finalUsers[$i]["profile"];
      }
     ?>

   </p>

   <br>

    @endfor
  </blockquote>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
