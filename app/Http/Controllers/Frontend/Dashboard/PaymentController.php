<?php

namespace App\Http\Controllers\Frontend\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Manuscript;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\Notifications\InvoiceGenerated;
use App\Notifications\InvoiceGeneratedAdmin;
use Illuminate\Notifications\Notifiable;
use Notification;


class PaymentController extends Controller
{

    public function index()
    {
        $manuscripts = Manuscript::where('user_id', Auth::id())->with('invoice')->get();
        return view('frontend.dashboard.payment.index')->with([
            'manuscripts' => $manuscripts
        ]);
    }

   function show($id)
    {

        $invoice = Invoice::where('manuscript_id', $id)->with('manuscript')->first();
        return view('frontend.dashboard.payment.show')->with([
            'invoice' => $invoice
        ]);
    }

    public function update(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);

        if(isset($request->choice)){

            $invoice->amount = 500;

        }else{

            $invoice->amount = 350;

        }
        $invoice->save();

        Auth::user()->notify(new InvoiceGenerated($invoice));
        Notification::route('mail', 'asdf@gmail.com')->notify(new InvoiceGeneratedAdmin($invoice));

     //   $data = compact('invoice');
      //  $pdf =  PDF::loadView('frontend.dashboard.payment.invoice', $data)->save(storage_path().'/app/public/invoices/'.$invoice->invoice_number.'.pdf');

        return redirect()->back();

    }

    public function invoice($id){

        $invoice = Invoice::where('manuscript_id', $id)->with('manuscript')->first();
        $invoice = compact('invoice');

        $pdf = PDF::loadView('frontend.dashboard.payment.invoice', $invoice);
        return $pdf->download('invoice.pdf');


    }


}
