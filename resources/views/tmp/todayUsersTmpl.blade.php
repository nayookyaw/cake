@if (count($users) == 0)
	<tr><td colspan="2">There is no customers today</td></tr>
@endif
@foreach( $users as $user)
		<tr>
			<td class="name"><h4>{{ $user->user_name }}</h4></td>
			<td class="description">{{ $user->total }} kyats</td>
		</tr>
@endforeach
