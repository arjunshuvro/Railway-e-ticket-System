<?php

namespace App\Http\Controllers;

use App\Mail\PurchaseTicket;
use App\Models\Purchase;
use App\Models\Route;
use App\Models\Ticket;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $purchases=Purchase::where('purchased_id','=',Auth::id())->get();
            //dd($purchases);
            return view('panel.purchase',compact('purchases'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = Route::all();
        return view('panel.addpurchased', compact('routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dayAfter = (new \DateTime(Carbon::now()))->modify('+3 day')->format('Y-m-d');
        $date1 = Carbon::createFromFormat('Y-m-d', $dayAfter);

        $date2 = Carbon::createFromFormat('Y-m-d', $request->input('date'));


        $date3 = Carbon::createFromFormat('Y-m-d', (new \DateTime(Carbon::now()))->format('Y-m-d'));


        $result = $date1->gt($date2);
        $result1 = $date2->gt($date3);
        $message="";

        if (Auth::check()) {
            if ($result && $result1) {

                $purchaseCount = Purchase::where([
                    ['ticket_id', '=', $request->input('ticket_id')],
                    ['date', '=', $request->input('date')],
                ])->get();
                $ticketseats = Ticket::find($request->input('ticket_id'))->seats;
                if ($purchaseCount->count() < $ticketseats) {
                    $purchase = new Purchase();
                    $purchase->date = $request->input('date');
                    $purchase->ticket_id = $request->input('ticket_id');
                    $purchase->purchased_id = Auth::id();
                    $purchase->save();
                    Mail::to(Auth::user()->email)->send(new PurchaseTicket($purchase));
                    return redirect()->route('purchase.index');
                }
                else{
                    $message="Seat is not Available";
                    return view("panel.purchaseError",compact('message'));
                }

            } else {
                $message="Date Error";
                return view("panel.purchaseError",compact('message'));
            }
        }
    }

    public function history()
    {
        $purchases=Purchase::all();
        
        return view('panel.allpurchasehistroy',compact('purchases'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
