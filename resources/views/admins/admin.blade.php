@extends('layouts.app')

@section('content')



    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin Panel</div>
      <div class="list-group list-group-flush">
        <a href="#" onclick="displayTable()" class="list-group-item list-group-item-action bg-light">Manage Users</a>
        <a href="#" onclick="displayNews()"class="list-group-item list-group-item-action bg-light">Products</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">News</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
        
      </div>
    
    <!-- /#sidebar-wrapper -->


    <div class="limiter" id="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
   				 <div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">#</th>
								<th class="column100 column3" data-column="column3">User Name</th>
								<th class="column100 column4" data-column="column4">First Name</th>
								<th class="column100 column5" data-column="column5">Last Name</th>
								<th class="column100 column5" data-column="column5">Status</th>
								<th class="column100 column5" data-column="column5">Action</th>
								
							</tr>
						</thead>
						<tbody>
							@if(count($users) > 0)

             					@foreach($users as $user)
							<tr class="row100">
								<td class="column100 column1" data-column="column1">{{$user->id}}</td>
								<td class="column100 column2" data-column="column2">{{$user->name}}</td>
								<td class="column100 column3" data-column="column3">{{$user->last_name}}</td>
								<td class="column100 column4" data-column="column4">{{$user->email}}</td>
								<td class="column100 column4" data-column="column4" style="color: blue;">Approved</td>
								<td class="column100 column4" data-column="column4">
									<a href="#" class=" btn btn-primary">Approve </a> 
									
									<a href="" class="btn btn-danger"  onclick="
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
								</td>
							</tr>
								@endforeach
						@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	
	
</div>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->

  <script type="text/javascript">
  	
            function displayTable(){

            	document.querySelector('#limiter').style.display = 'flex';
                
            };


            function displayNews(){


            	document.querySelector('#news').style.display = 'flex';
            }
  </script>
 
  <script>

    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    // admin panel

    

  </script>

@endsection 