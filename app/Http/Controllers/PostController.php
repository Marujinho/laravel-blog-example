<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Storage;

use Image;


class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        
        return view('posts/index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;

        if($request->hasFile('pictureThumb')){
            $image = $request->file('pictureThumb');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'.$imageName);
            $image = Image::make($image)->resize(800,400)->save($location);
            $post->pictureThumb = $imageName;
        }

        $post->save();

        return redirect()->route('posts.index')
            ->with('success', 'Post criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts/show', ['post' => $post]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p = Post::findOrFail(['id'=> $id]);
        $post = $p['0'];
        return view('posts/edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $p = Post::findOrFail(['id'=>$id]);
        $post = $p['0'];
        $post->title = $request->title;
        $post->content = $request->content;

        if($request->pictureThumb){

            if($request->hasFile('pictureThumb')){
                $image = $request->file('pictureThumb');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/'.$imageName);
                Image::make($image)->resize(800,400)->save($location);
                
                $oldPhoto = $post->pictureThumb;

                $post->pictureThumb = $imageName;
                Storage::delete($oldPhoto);
            }
        }

        $post->save();

        return redirect()->route('posts.index')
            ->with('success', 'Post Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);  
        Storage::delete($post->pictureThumb);     
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post apagado com sucesso!');
    }

}
