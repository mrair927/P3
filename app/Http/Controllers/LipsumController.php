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
      return 'vhfajfhdsj';
    }


    public function create()
    {
      return view('lipsum.create');

    }


    public function show(Request $request)
    {

      $this->validate($request, ['numberParagraphs' => 'required|integer|min:1|max:15',]);
			$numberParagraphs = $request->input('numberParagraphs');
		$lipsum = new joshtronic\LoremIpsum();
			$paragraphs = $lipsum->paragraphs($numberParagraphs, 'p');
			return view('text')->with('paragraphs', $paragraphs);
    }



}
