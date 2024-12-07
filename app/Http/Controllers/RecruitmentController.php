<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\RecruitmentExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
// use Barryvdh\DomPDF\Facade\Pdf;
// use PDF;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recruitments = Recruitment::all();
        return view('recruitments.index', compact('recruitments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recruitments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $recruitment = Recruitment::create($request->all());
        Alert::success('Okayy', 'ur data has been recorded');
        return redirect()->route('recruitments.create');

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('recruitments').$file->getClientOriginalName();
            $file-> move(public_path('public/gambar'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('recruitments.index');
    }

    public function edit(Recruitment $recruitment)
    {
        return view('recruitments.edit', compact('recruitment'));
    }

    public function update(Request $request, Recruitment $recruitment)
    {
        $recruitment->update($request->all());
        return redirect()->route('recruitments.index')->with('success', 'Product
        updated successfully');
    }

    public function destroy(Recruitment $recruitment)
    {
        $recruitment->delete();
        Alert::warning('Okayy', 'the data has been removed');
        return redirect()->route('recruitments.index');
    }

    public function export_excel()
    {
        return Excel::download(new RecruitmentExport, 'recruitment.xlsx');
    }

    // public function cetak_pdf()
    // {
    //     return pdf::download('laporan-recruitment.pdf');
    // }

    // public function createPDF() {
    //     // retreive all records from db
    //     $r = Recruitment::all();
    //     // share data to view
    //     view()->share('recruitments',$r);
    //     $pdf = PDF::loadView('pdf_view', $r);
    //     // download PDF file with download method
    //     return $pdf->download('pdf_file.pdf');
    //   }


    public function __construct()
    {
    $this->middleware('auth');
    }

    public function data()
    {
        return DataTables::of(Recruitment::query())->toJson();
    }
}
?>