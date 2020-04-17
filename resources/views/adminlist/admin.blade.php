@extends('layouts.master')
@section('content')
@if(Session::has('info'))
<div class="task-header">
	<h1>Info</h1>
</div>
<div class="task-body">
	{{Session::get('info') }}
</div>
@endif
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
@for($i=0;$i<1;$i++)
<ul id="myUL">
	<li>
		<div class="task">
			Hit the gym
		</div>
		<div class="action">
			<a href="{{route('changeEdit', ['id'=>$i]) }}" method="post"><i class="fa fa-edit"></i></a>
		</div>
		<div class="action">
			<a href="{{route('changeDelete', ['id'=>$i]) }}"><i class="fa fa-trash-alt"></i></a>
		</div>
	</li>
	<li>
		<div class="task">
			Make some food
		</div>
		<div class="action">
			<a href="{{route('changeEdit', ['id'=>$i]) }}"><i class="fa fa-edit"></i></a>
		</div>
		<div class="action">
			<a href="{{route('changeDelete', ['id'=>$i]) }}"><i class="fa fa-trash-alt"></i></a>
		</div>
	</li>
	<li>
		<div class="task">
			Finish quiz
		</div>
		<div class="action">
			<a href="{{route('changeEdit', ['id'=>$i]) }}"><i class="fa fa-edit"></i></a>
		</div>
		<div class="action">
			<a href="{{route('changeDelete', ['id'=>$i])}}"><i class="fa fa-trash-alt"></i></a>
		</div>
	</li>
</ul>
@endfor
@endsection