@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/smartclub_users') }}">SmartClub User</a> :
@endsection
@section("contentheader_description", $smartclub_user->$view_col)
@section("section", "SmartClub Users")
@section("section_url", url(config('laraadmin.adminRoute') . '/smartclub_users'))
@section("sub_section", "Edit")

@section("htmlheader_title", "SmartClub Users Edit : ".$smartclub_user->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($smartclub_user, ['route' => [config('laraadmin.adminRoute') . '.smartclub_users.update', $smartclub_user->id ], 'method'=>'PUT', 'id' => 'smartclub_user-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'first_name')
					@la_input($module, 'last_name')
					@la_input($module, 'phone')
					@la_input($module, 'email')
					@la_input($module, 'pib')
					@la_input($module, 'user_type')
					@la_input($module, 'address')
					@la_input($module, 'member_from')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/smartclub_users') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#smartclub_user-edit-form").validate({
		
	});
});
</script>
@endpush
