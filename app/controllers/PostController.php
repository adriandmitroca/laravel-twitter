<?php

class PostController extends BaseController {

	public function showTimeline() {
		$posts = Post::with('user')->orderBy('created_at', 'desc')->get();
		$title = 'Timeline';
		return View::make('timeline')->with('posts', $posts)->with('title', $title);
	}

	public function showPost($id, $slug) {
		$post = Post::with('user')->where('slug', 'LIKE', $slug)->find($id);
		$title = str_limit($post->content, 50);
		return View::make('post')->with('post', $post)->with('title', $title);
	}

	public function showTag($tag) {
		$posts = Post::with('user')->where('content', 'like', '%#'.$tag.'%')->orderBy('created_at', 'desc')->get();
		$title = '#'.$tag;
		return View::make('tag')->with('posts', $posts)->with('title', $title)->with('tag', $tag);
	}

	public function addPost() {
		$validator = Validator::make(Input::all(),
			array('content' => 'required'));

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput;
		}
		else {
			$post = new Post;

			$post->content = Input::get('content');
			$post->user_id = Auth::user()->id;

			$post->save();

			return Redirect::back()->with('success', 'Your post has been added.');
		}
	}

}
