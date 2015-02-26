@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $project->title }}</div>

				<div class="panel-body">
                    {{ $project->description }}

                    @if (count($project->tasks))
                        <div class="tasks" style="margin-top: 30px;">
                            <h4>Tasks</h4>
                            <ol>
                                @foreach ($project->tasks as $task)
                                <li>{{ $task->title }}</li>
                                @endforeach
                            </ol>
                        </div>
                    @else
                        <h4 style="margin-top: 30px;">No Tasks.</h4>
                    @endif

                    <div class="panel panel-default">
                        <div class="panel-heading">Add a task</div>
                        <div class="panel-body">
                            {!! Form::open(['route' => 'task.create']) !!}

                            <div class="form-group">
                                {!! Form::label('title') !!}
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Save Task', ['class' => 'btn btn-default']) !!}
                            </div>

                            {!! Form::hidden('project_id', $project->id) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <div style="margin-top: 30px;">
                        {!! Form::open(['method' => 'DELETE', 'route' => ['projects.destroy', $project->id]]) !!}
                        {!! Form::submit('DELETE', ['class' => 'btn btn-danger pull-right']) !!}
                        {!! Form::close() !!}

                        {!! HTML::linkRoute('projects.edit', 'Edit this project', [$project->id], ['class' => 'btn btn-default']) !!}
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
