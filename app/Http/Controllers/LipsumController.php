<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;


class LipsumController extends Controller
{
public function index()
{

  return view ('lipsums.show'  );

}



    public function create()
    {
      return view('lipsum.create');

    }


    public function show(Request $request)
    {

      $this->validate($request, ['numberParagraphs' => 'required|numeric|max:9']);
			$numberParagraphs = $request->input('numberParagraphs');
		$lipsum = new \joshtronic\LoremIpsum();
			$paragraphs = $lipsum->paragraphs($numberParagraphs, 'p');
			return view('lipsum.show')->with('paragraphs', $paragraphs);
    }



}
