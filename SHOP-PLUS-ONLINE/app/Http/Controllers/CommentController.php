<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Services\Users\UserService;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    protected $product;
    protected $userService;
    protected $comment;

    public function __construct(Product $product, UserService $userService, Comment $comment)
    {
        $this->product = $product;
        $this->userService =$userService;
        $this->comment = $comment;
    }

    public function postComments(Request $request, $id)
    {
        $product =Product::find($id);
        $comment = new Comment();
        $comment->comment_user = $request->comment_user;
        $comment->productId = $id;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return redirect("product/detail/".$product->name."html");

    }
}
