<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('site.blog.index', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        return view('site.blog.show', compact('blog'));
    }

    public function create()
    {
        return view('site.agency.blogs.add-blog');
    }

    public function store(BlogRequest $request)
    {

        // Check if there is an image uploaded
        if ($request->hasFile('image')) {
            // Get the uploaded image
            $image = $request->file('image');

            // Define the directory to save the image
            $directory = 'assets/images/blog/';

            // Generate a unique file name for the image
            $filename = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public directory
            $image->move(public_path($directory), $filename);

            // Add the image path to the request data
            $requestData = array_merge($request->validated(), [
                'image' => $directory . $filename,
                'author' => Auth::user()->name,
                'user_id' => Auth::user()->id
            ]);
        } else {
            // If no image uploaded, set image path to null or any default value you prefer
            $requestData = array_merge($request->validated(), [
                'image' => null,
                'author' => Auth::user()->name,
                'user_id' => Auth::user()->id
            ]);
        }

        // Create the Blog with validated data including the image path
        Blog::create($requestData);


        return back()->with('success', 'تم اضافة المدونة بنجاح.');
    }

    public function edit(Blog $blog)
    {
        return view('site.agency.blogs.edit', compact('blog'));
    }

    public function update(BlogRequest $request, $id)
    {
        
        // Find the blog post by its ID
        $blog = Blog::findOrFail($id);

        // Check if there is an image uploaded
        if ($request->hasFile('image')) {
            // Get the uploaded image
            $image = $request->file('image');

            // Define the directory to save the image
            $directory = 'assets/images/blog/';

            // Generate a unique file name for the image
            $filename = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public directory
            $image->move(public_path($directory), $filename);

            // Update the image path in the blog data
            $blog->image = $directory . $filename;
        }

        // Update other blog data from validated request data
        $blog->title = $request->validated()['title'];
        $blog->short_description = $request->validated()['short_description'];
        $blog->description = $request->validated()['description'];

        // Save the updated blog post
        $blog->save();

        return to_route('agency.blogs')->with('success', 'تم تحديث المدونة بنجاح.');
    }

    public function destroy(Blog $blog){
        $blog->delete();
        return back()->with('success', 'تم حذف المدونة بنجاح.');
    }
}
