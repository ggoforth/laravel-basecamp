@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $project->title }}</div>

				<div class="panel-body">
                    {{ $project->description }}

                    <div style="margin-top: 30px;">
                        {!! HTML::linkRoute('projects.edit', 'Edit this project', [$project->id], ['class' => 'btn btn-default']) !!}
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
