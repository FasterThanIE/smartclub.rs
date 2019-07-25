@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/smartclub_finances') }}">SmartClub Finance</a> :
@endsection
@section("contentheader_description", $smartclub_finance->$view_col)
@section("section", "SmartClub Finances")
@section("section_url", url(config('laraadmin.adminRoute') . '/smartclub_finances'))
@section("sub_section", "Edit")

@section("htmlheader_title", "SmartClub Finances Edit : ".$smartclub_finance->$view_col)

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
				{!! Form::model($smartclub_finance, ['route' => [config('laraadmin.adminRoute') . '.smartclub_finances.update', $smartclub_finance->id ], 'method'=>'PUT', 'id' => 'smartclub_finance-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'amount')
					@la_input($module, 'type')
					@la_input($module, 'when')
					@la_input($module, 'currency')
					@la_input($module, 'reason')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/smartclub_finances') }}">Cancel</a></button>
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
	$("#smartclub_finance-edit-form").validate({
		
	});
});
</script>
@endpush
