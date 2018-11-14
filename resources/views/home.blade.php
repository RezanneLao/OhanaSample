@extends('layouts.app')

@section('content')

<!-- {{$userClanExists->user->firstName}} -->

@foreach($clans as $clan)
    @foreach($potentialUsers as $potentialUser)
        @if($potentialUser->pid === $clan->pid)
            {{$clan->potentialUser->firstName}}
        @endif
    @endforeach
@endforeach

<script type="text/javascript">
	var clans = {!! json_encode($clans) !!};
	var potentialUsers = {!! json_encode($potentialUsers) !!};

	for(var i = 0; i < clans.length; i++) {
		for(var j = 0; j < potentialUsers.length; j++) {
			if(potentialUsers[j].pid === clans[i].pid) {
				console.log(potentialUsers[j].firstName)
			}
		}
	}
</script>


@endsection
