@extends('layouts.cake.master')

@section('css')
	<link rel="stylesheet" href="/css/cake/about.css">
@endsection

@section('content')
<br>
	<hr>
	<table id="about_table">
		<tr>
			<th colspan= 2 class="super">Supervisor <br>
			University of Computer Studies, Mandalay</th>
		</tr>
		<tr>
			<td class="first">First Name <br> 2CST- 34 <br> University of Computer Studies, Mandalay </td>
			<td class="second">Second Name <br> 2CST- 34 <br> University of Computer Studies, Mandalay </td>
		</tr>
		<tr>
			<td class="third">Third Name <br> 2CST- 34 <br> University of Computer Studies, Mandalay </td>
			<td class="four">Four Name <br> 2CST- 34 <br> University of Computer Studies, Mandalay </td>
		</tr>
	</table>
	<hr>
	<div class="move">
		<br>
		<marquee behavior="scroll" direction="left" scrollamount="5">Write here about you</marquee>
	</div>

@endsection

@section('js')
	<script src="js/cake/cakeAbout.js"></script>
@endsection
