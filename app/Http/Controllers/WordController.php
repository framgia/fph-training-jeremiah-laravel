<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Word;
use App\Answer;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Word $word)
    {
        return view('admin.word.index')->with('words', $word->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');

        return view('admin.word.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Answer $answer, Word $word)
    {
        $word->storeWord($request->word, $request->category);
        $answer->storeAnswer($request->answer, $word->id); 

        $request->session()->flash('status', 'You have adde a new Word');
        
        return redirect(route('word.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Word $word)
    {
        $categories = Category::pluck('name', 'id');

        return view('admin.word.edit', compact('word', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Word $word)
    {
        $word->updateWord($request->word, $request->category);
        $word->answers->updateAnswer($request->answer, $word->id); 

        $request->session()->flash('status', 'You have update a Word');
        
        return redirect(route('word.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Word $word)
    {
        $word->answers->delete();
        $word->delete();

        return redirect(route('word.index'))->with('status', 'Successfully deleted '.$word->content);
    }
}
