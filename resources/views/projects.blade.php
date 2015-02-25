@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
                    {!! HTML::linkRoute('projects.create', '+', [], ['class' => 'btn btn-xs btn-default pull-right']) !!}
                    Project List
                </div>

				<div class="panel-body">
                    <ul>
                        @foreach ($projects as $project)
                            <li>
                                {!! HTML::linkRoute('projects.show', $project->title, [$project->id]) !!}
                            </li>
                        @endforeach
                    </ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
