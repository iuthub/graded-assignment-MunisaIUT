<?php


namespace App;


class PostsRepo{

	public function __construct(){
		$posts=[];

		for($i=0;i=<1;i++){
			$post=[
				'task'="Sleeping".$id

			];

		array_push($post,$post)
	   }

  		Session::('posts')
	}

		Session::put('posts',$posts)

	public function getPosts(){
		return Session::get('posts')
	}
	public function getPosts($id){
		return Session::get('posts')[$id]
	}

	public function addPost($task){
		$posts=Session::get('posts');
		array_push($posts,[
			'task'=>$task
		]
		Session::put('posts',$posts));
	}
}

	public function updatePost($id, $task){
		$posts=Session::get('posts');
		$posts[$id]=[
		'task'=>$task
		]
		Session::put('posts',$posts));
	}

	public function updatePost($id){
		$posts=Session::get('posts');
		unset($post[$id]);
		
		Session::put('posts',$posts));

	}
}

?>