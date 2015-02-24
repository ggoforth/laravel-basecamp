@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Create New Project</div>

				<div class="panel-body">
                    {!! Form::open(['route' => 'projects.store']) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Project Title'); !!}
                        {!! Form::text('title', '', ['class' => 'form-control']); !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('description', 'Project description'); !!}
                        {!! Form::textarea('description', '', ['class' => 'form-control']); !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create Project', ['class' => 'btn btn-primary btn-lg']); !!}
                    </div>
                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
