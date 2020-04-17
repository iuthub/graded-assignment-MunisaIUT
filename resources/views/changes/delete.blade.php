

@if(Session::has('info'))
 	<div class="task-header">
			<h2>Info</h2>
 	</div>
 	<div class="task-body">
 		{{Session::get('info') }}
 	</div>