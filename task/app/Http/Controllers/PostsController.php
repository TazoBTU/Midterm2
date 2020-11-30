<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Carbon\Carbon;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('verified');
    }

    public function index()
    {
        return view("posts.index",["posts"=>Posts::get()]);

    }
    public function dashboard()
    {
        return view("posts.admin",["posts"=>Posts::get()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("posts.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    
    {



        Posts::create([
            "title"=>$request->input("title"),
            "description"=>$request->input("description"),
            "answer"=>$request->input("answer"),
            "image"=>$request->file("image")->store('postedpics'),

            
            ]);
            return redirect("/");
                 

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts=Posts::where("id",$id)->firstOrFail();
       

    	return view("posts.show",["posts"=>$posts]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts=Posts::where("id",$id)->firstOrFail();
    	return view("posts.edit",["posts"=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Posts::where("id",$request->input("id"))->update([
    		"title"=>$request->input("title"),
            "description"=>$request->input("description"),
            "answer"=>$request->input("answer"),
            "image"=>$request->file("image")->store('postedpics'),

        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Posts::where("id",$request->input("id"))->delete();
        return redirect()->back();
          
    }
  

}
