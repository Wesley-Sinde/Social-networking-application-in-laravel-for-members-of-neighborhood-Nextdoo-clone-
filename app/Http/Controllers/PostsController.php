<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use  Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $post=Post::all();
        // dd($post);
        // return view('blog.index')
        //     ->with('posts', Post::orderBy('id', 'Desc') -> skip(0)->take(5)->get());


        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        if ($request->ajax()) {
            return view('blog.index', compact('posts'));
        }

        return view('blog.index', compact('posts'));
    }


    /** ::stake(4)
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /** ::stake(4)
     *store image.
     */

    public function upload(Request $request)
    {
        $fileName = $request->file('file')->getClientOriginalName();
        $fileName = time() . '_' . $fileName;
        $path = $request->file('file')->storeAs('uploads', $fileName, 'public');
        return response()->json(['location' => "/storage/$path"]);

        /*$imgpath = request()->file('file')->store('uploads', 'public'); 
        return response()->json(['location' => "/storage/$imgpath"]);*/
    }

    public function searchQuery(Request $request)
    {
        $data = Post::select("title")
            ->where("title", "LIKE", "%{$request->get('query')}%")
            ->get();

        return response()->json($data);
    }

    /**
     * Store a newly 
     * created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //code...

            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|mimes:jpg,png,gif,jpeg,webp,|max:5048'
            ]);
            $imagename = $request->file('image')->getClientOriginalName();

            $newImageName = uniqid() . '-' . $imagename . '.' . $request->image->extension();
            //dd($newImageName);
            //dd($newImageName);
            $request->image->move(public_path('images'), $newImageName);


            Post::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::CreateSlug(Post::class, 'slug', $request->title),
                'image_path' => $newImageName,
                'user_id' => auth()->user()->id
            ]);
            return redirect('/blog')->with('message', 'Your Post Has Beem Added!');
        } catch (\Throwable $th) {
            //throw $th;
            //dd($th);
            return redirect('/blog')->with('message', 'An errror occured! Kindly try again. If the error persisist comtact the support team');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::CreateSlug(Post::class, 'slug', $request->title),
                'user_id' => auth()->user()->id
            ]);
        return redirect('/blog')->with('message', 'Your Post Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();


        return redirect('/blog')->with('message', 'Your Post Has Been Deleted!');
    }
}
