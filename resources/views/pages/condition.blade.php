<h2>{{$name}}</h2>
{{strlen($name)}} <hr>
@if(strlen($name) < 0)
	String
@elseif(strlen($name) > 5 && strlen($name) < 14)
	String {{strlen($name)}}
@else
	Str
@endif