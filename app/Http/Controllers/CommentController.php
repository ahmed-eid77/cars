<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        
        $request->validate([
            'content' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'blog_id' => 'required|exists:blogs,id',
            'rating' => 'nullable|integer|between:1,5', // Make the rating field nullable
        ]);

        DB::beginTransaction();

        try {
            $comment = new Comment();
            $comment->user_id = $request->user_id;
            $comment->blog_id = $request->blog_id;
            $comment->content = $request->content;
            $comment->save();

            if ($request->filled('rating')) {
                $rate = new Rate();
                $rate->comment_id = $comment->id;
                $rate->user_id = $request->user_id;
                $rate->blog_id = $request->blog_id;
                $rate->value = $request->rating;
                $rate->save();
            }

            DB::commit();

            return redirect()->back()->with('success', 'تم اضافة التعليق بنجاح.');
        } catch (\Exception $e) {

            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to add comment. Please try again.');
        }
    }
}
