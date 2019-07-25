@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/smartclub_reminders') }}">SmartClub Reminder</a> :
@endsection
@section("contentheader_description", $smartclub_reminder->$view_col)
@section("section", "SmartClub Reminders")
@section("section_url", url(config('laraadmin.adminRoute') . '/smartclub_reminders'))
@section("sub_section", "Edit")

@section("htmlheader_title", "SmartClub Reminders Edit : ".$smartclub_reminder->$view_col)

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
				{!! Form::model($smartclub_reminder, ['route' => [config('laraadmin.adminRoute') . '.smartclub_reminders.update', $smartclub_reminder->id ], 'method'=>'PUT', 'id' => 'smartclub_reminder-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'date')
					@la_input($module, 'for')
					@la_input($module, 'text')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/smartclub_reminders') }}">Cancel</a></button>
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
	$("#smartclub_reminder-edit-form").validate({
		
	});
});
</script>
@endpush
