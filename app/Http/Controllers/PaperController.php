<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Assuming you have a Project model

class PaperController extends Controller
{
    /**
     * Show the paper page with the document editor.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Find the project by ID
        $project = Project::findOrFail($id);

        // Return the project show view with the project data
        return view('paper.show', ['project' => $project]);
    }
    

    /**
     * Save the document edited in the document editor.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        // Process and save the edited document data here
        // For example:
        $documentData = $request->input('document_data');

        // You can then save $documentData to your database or file system
        
        // Optionally, return a response indicating success or failure
        return response()->json(['message' => 'Document saved successfully']);
    }
}
