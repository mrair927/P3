<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;
use Badcow\LoremIpsum;

class LipsumController extends Controller
{
public function index()
{



}



    public function create()
    {
      return view('lipsum.create');

    }


    public function show(Request $request)
    {


          $this->validate($request, [
            'numberParagraphs' => 'required|numeric|min:1|max:99',
            ]);
          $data = $request['numberParagraphs'];
          $generator = new LoremIpsum\Generator();
          $paragraphs = $generator->getParagraphs($data);
          return view('lipsum.show')->with(['paragraphs' => $paragraphs]);
    }




}
