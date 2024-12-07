<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Form;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('forms.index', compact('forms'));
    }

    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        $form = Form::create($request->all());
        Alert::success('Okayy', 'ur message has been recorded');
        return redirect()->route('forms.index');
    }
}
?>