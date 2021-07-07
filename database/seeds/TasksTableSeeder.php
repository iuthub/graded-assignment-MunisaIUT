<?php

use Illuminate\Database\Seeder;

App\Task;

class TasksTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//
		$task = new Task([
		'str' => 'Sleeping'
		'str' => 'Eating'
		'str' => 'Reading book'
		'str' => 'Staying at home'
		'str' => 'Cleaning house'
		]);
		$task->save();
	}
}
