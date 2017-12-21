@extends('main')

@section('title', '| Register')

@section('content')
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
                    <script type= "text/javascript" src = "../js/countries.js"></script>
                    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
			{!! Form::open(array('data-parsley-validate' => '' )) !!}

				{{ Form::label('name', "Name:") }}
				{{ Form::text('name', null, ['class' => 'form-control','required' => '', 'maxlength' => '255']) }}

				{{ Form::label('email', 'Email:') }}
				{{ Form::email('email', null, ['class' => 'form-control','required' => '']) }}
                                
                                {{ Form::label('number', 'Contact Number :') }}
				{{ Form::text('number', null, ['class' => 'form-control','required' => '']) }}
                                
				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', ['class' => 'form-control', 'required' => '', 'minlength' => '6', 'maxlength' => '255']) }}

				{{ Form::label('password_confirmation', 'Confirm Password:') }}
				{{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => '', 'minlength' => '6', 'maxlength' => '255']) }}
                                <br>
                                {{ Form::label( 'Birth  Date') }}
				{{ Form::selectYear('year',1970,2007) }}
                                {{ Form::selectMonth('month') }}
                                {{ Form::selectRange('day', 1, 31) }}
                                <br>
                                <br>
				{{ Form::label('country', 'Select Country:') }}
                                <select id="country"  class="form-control" name ="country"></select> 

				{{ Form::label('state', 'Select state:') }}
                                <select name ="state" class="form-control" id ="state"></select>
                                <br>
                                <br>
                                
			
				{{ Form::submit('Register', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

			{!! Form::close() !!}
		</div>
	</div>
<script language="javascript">
	populateCountries("country", "state");
        
        
</script>

@endsection
@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>

@endsection