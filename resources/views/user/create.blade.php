@extends('layouts.master')


@section('title')
    Random Users
@stop





@section('content')

    <a href='/'>Back to Home</a>

    <h3>Generate Some Random Users!</h3><br><br>

    <form method='POST' action='/users' class="form-horizontal">
        <input type='hidden' name='_token' value='{{csrf_token()}}'>

        @if(count($errors) > 0)
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif

        <label for="num_users" class="col-lg-3 control-label">How many users would you like to generate? (Max: 50)</label>
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
    </form>
@endsection
