@extends('layouts.app')

@section('content')



<h2 style="margin-left: 50px;"> News</h2>

@if (count($notifications)>0)

@foreach($notifications as $notification)


		<div class="well" style="width: 70%; margin-left: 50px;">
           {{$notification->description}} <br>
         <small style="color: blue">Posted on: {{$notification->created_at}} </small>  
        </div>
		
@endforeach
        <div style="margin-left: 50px;">
         {{$notifications->links()}}   
         <button class="btn btn-primary" onclick="displayNotifications()" style="float: right;">Post News<button>
        </div>
        
@endif

<div class="notifications">
<form method="post" action="{{route('notifications.store') }}" enctype="multipart/data">
    {{ csrf_field() }}
<div style="margin-left: 50px;">
<div class="form-group">
            <label for="notification-content">Enter News</label>
            <textarea placeholder="Enter News"
                style="resize:vertical; width: 500px;"
                id="notification-content"
                name="description"
                rows="5"
                spellcheck="false"
                class="form-control autosize-target text-left">
  
                </textarea>
    </div>


<input type="submit" class="btn btn-primary" value="submit"/> 
 </div>
</form>
</div>


    <script type="text/javascript">
        
            function displayNotifications(){


                document.querySelector('.notifications').style.display = 'flex';
            }
        
    </script>

@endsection