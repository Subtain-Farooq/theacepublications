<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Manuscript;
use App\Models\User;
use PDF;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manuscripts = Manuscript::with('invoice')->get();
        return view('backend.invoices.index')->with('manuscripts', $manuscripts);
    }



    public function show($id)
    {
        $invoice = Invoice::where('manuscript_id', $id)->with('manuscript')->first();
        return view('backend.invoices.show')->with([
            'invoice' => $invoice
        ]);
    }

    public function invoice($id){

        $invoice = Invoice::where('id', $id)->with('manuscript')->first();

        $invoice = compact('invoice');

        $pdf = PDF::loadView('backend.invoices.invoice', $invoice);
        return $pdf->download('invoice.pdf');


    }
}
