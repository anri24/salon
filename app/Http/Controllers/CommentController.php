<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    function commentInsert(Request $request){
        $comment = new Comment();
        $comment->fullname = $request->input('fullname');
        $comment->comment = $request->input('comment');
        $comment->save();
        return redirect('');
        
    }

}
