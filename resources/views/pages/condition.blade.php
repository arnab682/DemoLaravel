
{{$name}}
{{strlen($name)}} <hr>
@if(strlen($name) < 0)
	String
@elseif(strlen($name) > 5 && strlen($name) < 14)
	String {{strlen($name)}}
@else
	Str
@endif
<hr>
@isset($name)
@empty($name)
true
@endempty
{{$name}}
@endisset
<hr>
@foreach ($user as $u)
	<ur><li>{{$u}}</li></ur>
@endforeach
<hr>
@unless($check)
true
@endunless
<hr>
@for($i=0;$i<10;$i++)
	{{$i}}
@endfor
<hr>


<?php $i = 1?>
@while($i<5)
	{{$i++}}
@endwhile

<hr>
@foreach ($user as $u)
	{{$loop->index}} {{$u}}<br>
@endforeach