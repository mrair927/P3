<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;


class UserController extends Controller
{





    /**
     * Show the form for generating new users.
     *
     */
    public function create()
    {
        //
            return view('user.create');
    }

    /**
     *controller to generate and show users
     */
    public function show(Request $request)
    {
      $this->validate($request, [
      'num_users' => 'required|numeric|min:1|max:50',
      ]);
      $data = $request->all();
      $faker = Faker::create();
      $finalUsers = Array();
      for($i = 0; $i < $data['num_users']; $i++){
        $tempUser = Array();
        $tempUser['name'] = $faker->name;
        $tempUser['address'] = $faker->address;
        if(isset($data["birthdate"])){
          $tempUser['birthdate'] = $faker->date;
        }
        if(isset($data["profile"])){
          $tempUser['profile'] = $faker->text;
        }
          $finalUsers[$i] = $tempUser;
      }

      return view('user.show')->with(['data' => $data, 'finalUsers' => $finalUsers]);
    }



}
