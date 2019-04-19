@extends('layouts.app')
@section('content')



<table class="table table-stripped" style="background-color: gray; font-family: Montserrat-Regular; font-size: 20px; width: 70%; margin-left: 200px">
	<thead style="background-color: indigo;">
		<tr style="color: white;">
			<th>Notification</th>
			<th>Approval</th>
			<th>Remove News</th>
		</tr>
	</thead>

	<tbody style="color: #fff; font-family: sans-serif; font-size: 15px;">
		@foreach($notifications as $notification)
		<tr>
			<td>{{$notification->description}}</td>
			<td>
				<form action="{{url('/toggle-approve')}}" method="POST">
					{{csrf_field()}}
                 
                 	<input <?php if ($notification->approve == 1) {
                 		echo "checked";
                 	} ?> type="checkbox" name="approve">

                 	<input type="hidden" name="notificationId" value="{{$notification->id}}">
					<input style="margin-left: 20px;" class="btn btn-primary" type="submit" value="Done" >
                 
					

				</form>

			</td>
			<td>
				
				<a href="" class="btn btn-danger"  onclick="
					                          var result =confirm('Are you sure you want to remove news')
					                          if(result) {
					                              event.preventDefault();
					                              document.getElementById('delete-form').submit();

					                            }">

					                            Remove
                            		</a>

										      <form id="delete-form" action="{{ route('notifications.destroy', [$notification->id]) }}"
										                method="POST" style="display: none;">

										                <input type="hidden" name="_method" value="delete">
										                {{ csrf_field() }}
										      </form>
								</td>
			</td>
		</tr>

		@endforeach
	</tbody>
	
</table>


@endsection