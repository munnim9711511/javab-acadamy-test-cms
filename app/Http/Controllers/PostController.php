<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostPics;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post.index',['posts'=>Post::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $file = $request->file('fimage');
        $postImg = $request->file('images');
        $fileCover = time() . 'cover' . '.' . $file->extension();
        $file->move(public_path('coverImage'), $fileCover);

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->excerpt = $request->excerpt;
        $post->featured_img = $fileCover;
        $post->published_date = $request->date;
        $post->save();
        $last = $post->latest()->first();
        $inc = 1;
        if ($postImg !== null) {
            foreach ($postImg as $key => $file) {
                $fileName = time() . $inc . '.' . $file->extension();
                $inc++;
                $file->move(public_path('postRelPic'), $fileName);
                $phot = new PostPics();
                $phot->pic_img = $fileName;
                $phot->post_id = $last->id;
                $phot->save();


            }

        }
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        return view('post.edit',['post'=>Post::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->excerpt = $request->excerpt;
        $post->published_date = $request->date;

        if ($request->file('fimage') !== null) {

            $fileCover = time() . 'cover' . '.' .$request->file('fimage')->extension();
            $request->file('fimage')->move(public_path('coverImage'), $fileCover);
            $post->featured_img = $fileCover;
        }
        $inc = 1;
        if ($request->file('images') !== null) {
            foreach ($request->file('images') as $key => $file) {
                $fileName = time() . $inc . '.' . $file->extension();
                $inc++;
                $file->move(public_path('postRelPic'), $fileName);
                $phot = new PostPics();
                $phot->pic_img = $fileName;
                $phot->post_id = $request->id;
                $phot->save();


            }

        }
        $post->save();
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Post::find($id)::delete();
        return redirect('/post');
    }
}
