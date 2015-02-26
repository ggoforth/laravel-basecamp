<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Project;
use App\Task;

class ProjectController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $projDetails = array_except($request->all(), ['_token']);
        $project = Project::create($projDetails);

        return redirect()->route('projects.show', [$project->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @return Response
     */
    public function show(Project $project)
    {
        return view('project', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @return Response
     */
    public function edit(Project $project)
    {
        return view('edit', compact('project'));
    }

    /**
     * @param Project $project
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Project $project, Request $request)
    {
        $values = array_except($request->all(), ['_method', '_token']);
        $project->update($values);
        return redirect()->route('projects.show', [$project->id]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Project $project
     * @return Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }

    public function createTask(Request $request)
    {
        //create the task
        $taskDetails = array_except($request->all(), ['_token']);
        Task::create($taskDetails);

        //redirect back to projects.show
        return redirect()->route('projects.show', [$request->get('project_id')]);
    }

}
