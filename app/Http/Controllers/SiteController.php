<?php

namespace App\Http\Controllers;

use App\Apply;
use App\Models\Post;
use App\Portefeuille;
use App\Mail\TestMail;
use App\Models\Category;
use App\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts=  Post::orderBy('created_at','desc')->whereStatus('PUBLISHED')->take(3)->get();
      $portefeuilles = Portefeuille::orderBy('created_at','desc')->take(12)->get();
        return view('blog.index',['Myposts' => $posts],['Myportefeuilles' => $portefeuilles]);
        
    }
    public function blog()
    {
            $posts=  Post::orderBy('created_at','desc')
            ->whereStatus('PUBLISHED')
            ->paginate(10);
        $categories = Category::all();
        return view('blog.blog',['Myposts' => $posts, 'myCategories' => $categories]);
    }
    public function shows($slug){
        $post = Post::whereSlug($slug)->first();
        $post->visiteur++;
        $post->save();
        $categories = Category::all();

        return view('blog.show',['post'=>$post],['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $contact = new Contact();
        $contact-> nom = $request->input('nom');
        $contact-> email = $request->input('email');
        $contact-> subject = $request->input('subject');
        $contact-> message = $request->input('message');
        $contact->save();
        
        return redirect('/#contact')->with('success','Votre message a été envoyé avec succès');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
