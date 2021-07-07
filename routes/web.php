<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Factory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', [
	'uses' => 'PostsController@getIndex',
	'as' => 'adminIndex',
]);

Route::get('/list/{id}', function ($id) {
	return view('list.task');
})->name('listTask');

Route::get('/create/{id}', function () {
	return view('changes.create');
})->name('changeCreate');

Route::get('/edit/{id}', function ($id) {
	return view('changes.edit');
})->name('changeEdit');

Route::get('/delete/{id}', function ($id) {
//delete
	return redirect()->route('adminIndex')->with([
		'info' => 'Deleted Post',
	]);
})->name('changeDelete');

Route::post('/edit', function (Request $req, Factory $validation) {
//edit
	$validator = $validation->make($req->all(),
		[

			'editedTask' => 'required|min:2|regex:/^\w+$^/',
		]

	);
	if ($validator->fails()) {

		return redirect()->back()->withErrors($validator->errors());
	}

	return redirect()->route('adminIndex')->with([
		'info' => 'This task is updated ' . $req->input('editedTask'),
	]);
})->name('adminEditPost');

Route::post('/create', function (Request $req, Factory $validation) {
//create
	$validator = $validation->make($req->all(),
		[

			'newTask' => 'required|min:2|regex:/^\w+$^/',
		]

	);
	if ($validator->fails()) {

		return redirect()->back()->withErrors($validator->errors());
	}

	return redirect()->route('adminIndex')->with([
		'info' => 'This is a new created post ' . $req->input('newTask'),
	]);
})->name('adminCreatePost');
