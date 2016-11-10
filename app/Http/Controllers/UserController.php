<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
