<?php

namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Invoice_item;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    
    public function index()
    {
        $invoices = Invoice::orderby('created_at','desc')->with('client','invoice_item.service')->get();
        //dd($invoices);
        return view('admin/pages.client.invoice');
    }

    
    public function create()
    {
        //return 'ok';
        $invoices = Invoice::orderby('created_at','desc')->with('client','invoice_item.service')->get();
        //dd($invoices);
        return request()->json(200,$invoices);
    }

    public function clients()
    {       
        $clients = Client::orderby('created_at','desc')->get();
        return request()->json(200,$clients);
    }

    public function services()
    {       
        $services = Service::orderby('created_at','desc')->get();
        return request()->json(200,$services);
    }

   
    public function store(Request $request)
    {   
        $client_id = $request->selectedclient['id'];
        $bill_date = $request->dates['bill_date'];
        $due_date = $request->dates['due_date'];
        $selected_services = $request->selectedservices;

        $invoice = new Invoice;
        $invoice->client_id = $client_id;
        $invoice->bill_date = $bill_date;
        $invoice->due_date = $due_date;

        $saved = $invoice->save();


        //saving service lines
        foreach($selected_services as $service){
            $s_line = new Invoice_item;
            $s_line->invoice_id = $invoice->id;
            $s_line->service_id = $service['id'];
            $s_line->save();            
            //return request()->json(200,$service['id']);
        }
             
        if($saved){
            $invoices = Invoice::orderby('created_at','desc')->with('client','invoice_item.service')->get();
            return request()->json(200,$invoices);
        }
         
       
        
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {          
        $invoice = Invoice::where('id',$id)->with('client','invoice_item.service')->first();
        return request()->json(200,$invoice);
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
