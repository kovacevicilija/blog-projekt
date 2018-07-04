<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Http\Requests\CommentRequest;


class CommentsController extends Controller
{
	public function store(Post $post){
		
		$this->validate(request(), ['body' => 'required']);
		
		$post->addComment(request('body'));
		
		return back();
		
		
	}
	
