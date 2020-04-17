<?php

namespace App\Http\Controllers;

class PostsController extends Controller {
	public function getIndex() {
		return view('adminlist.admin');
	}
}
