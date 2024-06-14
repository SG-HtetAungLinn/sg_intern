<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $projects = Project::with('user')
                    ->inRandomOrder()
                    ->take(9)
                    ->get();
        return view('student.index', compact('projects'));
    }

    public function projectDetails($id)
    {
        $project = Project::where('student_id', $id)
                    ->first();

        return view('student.projects.details', compact('project'));
    }
}
