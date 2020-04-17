<link rel="stylesheet" href="{{URL::to('css/style.css')}}">

@if(Session::has('erors'))
<div class="article">
	<div id="myDIV" class="header">
		<h2>Validation eror</h2>
	</div>
	<div class="body">
		<ul>
			@foreach(Session::get('erorrs') as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
</div>
@endif



<form action="{{route ('adminEditPost')}}" method="post">
	@csrf
	<div id="myDIV" class="header">
		<h2>Enter  data for editing post</h2>
		<input type="text" name="editedTask" placeholder="Title...">
		<button type="submit" class="addBtn">Submit</button>
	</div>
</form>