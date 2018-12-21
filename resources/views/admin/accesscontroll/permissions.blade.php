@extends('layouts.admin')

@section('title','| Permissions')



@section('content')
	<section class="permissions">
		
		@if(Session::has('message'))
			<p class="alert alert-info " id="successMessage">{{ Session::get('message') }}</p>
		@endif


		<div class="main-content-header box-shadow box">
			<div class="row">
				
				<div class="col-md-6 col-xs-12 mp-0 alt-font">
					<i class="fa fa-key"></i><span> Permissions</span>
				</div>
				
			</div>
		</div>
		
		
		<div class="main-content-body box-shadow box">
			<div class="row">
				
				<div class="col-md-6 col-xs-6">
					<form  role="form" class="form-horizontal" action=" {{ URL::route('accessmanagement.permission.save') }}" method="post">
						{{ csrf_field() }}
						<div class="input-group input-group-sm" >
							<input type="text" name="name" class="form-control pull-right" placeholder="Add new permission" required="">
							<div class="input-group-btn">
								<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Permission</button>
							</div>
						</div>
					</form>
				</div>
			
				<div class="col-md-12">
					
					<div class="box-body table-responsive no-padding" >
						<table class="table table-hover" style="margin-top:20px;">
							
							<thead>	
								<tr>
									<th>Name</th>
									<th>Actions</th>
								</tr>
							<thead>
							<tbody>	
								@if (count($permissions) > 0)
									@foreach ($permissions as $permission)
										<tr id="{{ $permission->id }}">
											<td>{{ $permission->name }}</td>
											<td>
												<i class="fa fa-pencil actionicon" aria-hidden="true"></i>
												<span class="role-action-seperator">|</span>
												<i class="fa fa-trash-o actionicon" aria-hidden="true" ></i>
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

		{{ $permissions->links() }}

	</section>
@endsection

@section('javascript')
	<script>
		$(document).ready(function(){
			
			setTimeout(function() {
			    $('#successMessage').fadeOut('fast');
			}, 30000); 

			//$("#successMessage").delay(3000).slideUp(300);

			window.setTimeout(function() {
			    $("#successMessage").fadeTo(500, 0).slideUp(500, function(){
			        $(this).remove(); 
			    });
			}, 4000);

		});
	</script>
@endsection