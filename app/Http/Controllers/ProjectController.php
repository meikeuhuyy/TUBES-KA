<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
use RealRashid\SweetAlert\Facades\Alert;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $project = Project::create($request->all());
        Alert::success('Okayy', 'ur file has been recorded');
        return redirect()->route('projects.create');

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('projects').$file->getClientOriginalName();
            $file-> move(public_path('public/gambar'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('projects.index');
    }
        // $data = Project();

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move(public_path('public/gambar'), $filename);
        //     $project->image = $filename;
        // } else {
        //     return $request;
        //     $project->image = '';
        // }

        // $project->save();

        // return view('gambar')->with('gambar',$project);
    

    // //Add image
    // public function addImage(){
    //     return view('projects.create');
    // }
    // //Store image
    // public function storeImage(Request $request){
    //     $data= new Project();

    //     if($request->file('image')){
    //         $file= $request->file('image');
    //         $filename= date('YmdHi').$file->getClientOriginalName();
    //         $file-> move(public_path('public/Images'), $filename);
    //         $data['image']= $filename;
    //     }
    //     $data->save();
    //     return redirect()->route('projects.index');
    // }
	// 	//View image
    // public function viewImage(){
    //     $imageData= Project::all();
    //     return view('projects.index', compact('imageData'));
    // }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return redirect()->route('projects.index')->with('success', 'Product
        updated successfully');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Product
        deleted successfully');
    }
}
?>
