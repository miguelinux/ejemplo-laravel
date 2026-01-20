@props(['type' => 'info'])

@php
	switch($type) {
		case 'info':
			$class="info blabla";
			break;
		case 'warning':
			$class="warning blabla";
			break;
		default:
			$class="default blabla";
			break;
	}
@endphp

<h1>Alerta en h1</h1>
<h2>{{$titulo ?? 'opcion por default' }}</h2>
<h3>{{$slot}}</h3>
<p>{{$class}}</p>
