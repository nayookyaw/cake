@extends('layouts.cake.master')

@section('css')
	<link rel="stylesheet" href="/css/cake/about.css">
@endsection

@section('content')
<br>
	<hr>
	<table id="about_table">
		<tr>
			<th colspan= 2 class="super">Project Manager <br>
			Nay Oo Kyaw</th>
		</tr>
		<tr>
			<td class="first">Project Leader <br> Nay Oo Kyaw  </td>
			<td class="second">Senior Developer <br> Nay Oo Kyaw </td>
		</tr>
		<tr>
			<td class="third">Project Designer <br> Nay Oo Kyaw  </td>
			<td class="four">Project Tester <br> Nay Oo Kyaw  </td>
		</tr>
	</table>
	<hr>
	<div class="move">
		<br>
		<marquee behavior="scroll" direction="left" scrollamount="5">We are always with you</marquee>
	</div>

@endsection

@section('js')
	<script src="js/cake/cakeAbout.js"></script>
	<script src="js/common.js"></script>
@endsection
