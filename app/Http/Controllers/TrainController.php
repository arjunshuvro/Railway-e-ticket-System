<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Route;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trains=Train::all();
        return view('panel.train',compact('trains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes=Route::all();
        $drivers=Driver::all();
        return view('panel.addtrain',compact('routes','drivers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trains=Train::create($request->all());
        if (!empty($trains)){
            return redirect()->route('train.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Train  $train
     * @return \Illuminate\Http\Response
     */
    public function show(Train $train)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Train  $train
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $routes=Route::all();
        $drivers=Driver::all();
        $train=Train::where('id', $id)->firstOrFail();
        if($train){
            return view('panel.edittrain',compact('train','routes','drivers'));
        }
        return redirect()->route('train.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Train  $train
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        
        $train = Train::findOrFail($id);
        $train->update($request->all());
        return redirect()->route('train.index');
    }


    public function showTicket($id)
    {
        $train = Train::find($id);
        if($train){
            $tickets=$train->tickets->toArray();
            if($tickets){
                return response()->json([
                    'status' => true,
                    'tickets' => $tickets,
                ],200);
            }
            else{
                return response()->json([
                    'status' => false,
                ],200);
            }
                
        }
        else{
            return response()->json([
                'status' => false,
            ],200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Train  $train
     * @return \Illuminate\Http\Response
     */
    public function destroy(Train $train)
    {
        //
    }
}
