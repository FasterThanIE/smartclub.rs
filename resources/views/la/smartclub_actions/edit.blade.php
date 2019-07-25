@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/smartclub_actions') }}">SmartClub Action</a> :
@endsection
@section("contentheader_description", $smartclub_action->$view_col)
@section("section", "SmartClub Actions")
@section("section_url", url(config('laraadmin.adminRoute') . '/smartclub_actions'))
@section("sub_section", "Edit")

@section("htmlheader_title", "SmartClub Actions Edit : ".$smartclub_action->$view_col)

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
				{!! Form::model($smartclub_action, ['route' => [config('laraadmin.adminRoute') . '.smartclub_actions.update', $smartclub_action->id ], 'method'=>'PUT', 'id' => 'smartclub_action-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'action_name')
					@la_input($module, 'action_from')
					@la_input($module, 'action_end')
					@la_input($module, 'action_description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/smartclub_actions') }}">Cancel</a></button>
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
	$("#smartclub_action-edit-form").validate({
		
	});
});
</script>
@endpush
