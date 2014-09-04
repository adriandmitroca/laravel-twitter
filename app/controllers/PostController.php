	<?php

class PostController extends BaseController {

	public function showTimeline() {
		$posts = Post::with('user')->orderBy('created_at', 'desc')->get();
		$title = 'Timeline';
		return View::make('timeline')->with('posts', $posts)->with('title', $title);
	}

	public function showPost($id) {
		$post = Post::find($id);
		return View::make('post')->with('post', $post);
	}

}
