<h2>{{$name}}</h2>
{{strlen($name)}}
@if(strlen($name) < 0)
	String
@else
	Str
@endif