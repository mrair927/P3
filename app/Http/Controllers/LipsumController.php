<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;


class LipsumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('lipsum.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('lipsum.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

      //validate input
      $this->validate($request, ['numParagraphs' => 'required|numeric|max:9']);


      $lipsum = new \joshtronic\LoremIpsum();
      $para = $lipsum->paragraphs($request->input('numParagraphs'));
        return ($para);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


}
