<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoicesController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        $test = "przekazana lista faktur";
        return view('invoices.listaFaktur',['invoices' =>$invoices]);

    }

    public function create()
    {
        return view('invoices.dodajFakture');
    }
    public function edit($id)
    {
        $invoice = Invoice::find($id);

        return view('invoices.edit',['invoice'=>$invoice]);
    }

    public function update($id, Request $request)
    {
        $invoice = Invoice::find($id);


        $invoice->number=$request->number;
        $invoice->date=$request->date;
        $invoice->total=$request->total;


        $invoice->save();


        return redirect()->route('invoices.listaFaktur')->with('message','Pomyślnie edytowano fakture!');
    }

    public function delete($id, Request $request)
    {
        $invoice = Invoice::find($id);


        $invoice->number=$request->number;
        $invoice->date=$request->date;
        $invoice->total=$request->total;


        $invoice->delete();


        return redirect()->route('invoices.listaFaktur')->with('message','Pomyślnie usunięto fakture!');
    }



    public function store(request $request)
    {
        #dd($request);
        $invoice = new Invoice();
        $invoice->number=$request->number;
        $invoice->date=$request->date;
        $invoice->total=$request->total;
        $invoice->userID=$request->userID;
        $invoice->save();

        return redirect()->route('invoices.listaFaktur')->with('message','Pomyślnie dodano fakture do listy faktur!');
    }
}
