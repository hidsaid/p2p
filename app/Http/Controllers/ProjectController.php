<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Project;

class ProjectController extends Controller
{
    //

    public function showPageProjects(Request $request)
    {
        // Get search query
        $search = $request->input('search');
    
        // Fetch projects from the database and apply search filter
        $query = Project::query();
    
        if ($search) {
            $query->where('name', 'LIKE', "%{$search}%");
        }
    
        // Paginate results
        $perPage = 16;
        $paginatedProjects = $query->paginate($perPage)->appends(['search' => $search]);
    
        return view("projects.show", compact('paginatedProjects', 'search'));
    }
}
