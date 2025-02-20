<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    //

    public function show($projectId)
    {
        $guides = Guide::where('project_id', $projectId)
            ->with('user', 'project')
            ->paginate(8);

        return view('guides.show', compact('guides', 'projectId'));
    }


    public function create($projectId)
    {
        // Get the existing guides for this project (if any)
        $guides = Guide::where('project_id', $projectId)->get();

        return view('guides.create', compact('guides', 'projectId'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'guide_pdf' => 'required|file|mimes:pdf|max:10240',
        ]);

        $guide = new Guide();
        $guide->project_id = $request->project_id;
        $guide->title = $request->title;
        $guide->user_id = $request->user_id;
        $guide->description = $request->description;

        // Handle the file upload
        if ($request->hasFile('guide_pdf')) {
            $guide->guide_pdf = $request->file('guide_pdf')->store('guide_pdfs', 'public');
        }

        $guide->save();

        return redirect()->route('project.guides', $guide->project_id)->with('success', 'Guide uploaded successfully!');
    }
}
