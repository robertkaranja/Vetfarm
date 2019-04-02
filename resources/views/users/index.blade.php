@extends('layouts.app')

@section('content')

		@if(count($users) > 0)

              @foreach($users as $user)


              	<P>
              		{{$user->name}}
              		<!--<a href="" class="btn btn-danger"  onclick="
					                          var result =confirm('Are you sure you want to remove user')
					                          if(result) {
					                              event.preventDefault();
					                              document.getElementById('delete-form').submit();

					                            }">

					                            Remove User
                            		</a>

										      <form id="delete-form" action="{{ route('users.destroy', [$user->id]) }}"
										                method="POST" style="display: none;">

										                <input type="hidden" name="_method" value="delete">
										                {{ csrf_field() }}
										      </form>
										  -->
              	</P>

              @endforeach

              @endif
@endsection