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
		$queries = DB::getQueryLog();
		print_r($queries);
		return View::make('post')->with('post', $post)->with('title', $title);
	}

}
