<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    //export
    public function export() {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

    //import
    public function importExportView()
    {
        return view('import.import');
    }

    public function import()
    {
        Excel::import(new ProductsImport,request()->file('file'));
        return back();
    }

}
