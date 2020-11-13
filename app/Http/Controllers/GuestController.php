<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $guests = new Guest;
        if ($request->has('search')) {
            $guests = $guests->where('guest_name', 'LIKE', "%$request->search%")
                ->orWhere('father_husband_name', 'LIKE', "%$request->search%")
                ->orWhere('cnic', 'LIKE', "%$request->search%")
                ->orWhere('contact', 'LIKE', "%$request->search%");
            $guests = $guests->get();
        } else {
            $guests = Guest::all();
        }
        return view('guest.index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->discount_type == "None") {
            $tatal_payable = $request->total_amount - $request->advance_payment;
            $request->merge(['total_payable' => $tatal_payable]);
        } elseif ($request->discount_type == "Fixed") {
            if (!empty($request->total_amount)) {
                $tatal_payable = ($request->total_amount - $request->advance_payment) - $request->discount;
                $request->merge(['total_payable' => $tatal_payable]);
            }
        } else {
            $tatal_payable = (($request->total_amount - ($request->total_amount * ($request->discount / 100))) - $request->advance_payment);
            $request->merge(['total_payable' => $tatal_payable]);
        }

        $id = Guest::create($request->all());

        session()->flash('message', 'Information successfully saved.');

        return redirect()->to('/guest');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Guest $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {

        return view('guest.show',compact('guest'));
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Guest $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {

        return view('guest.edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Guest $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {

        if ($request->discount_type == "None") {
            $tatal_payable = $request->total_amount - $request->advance_payment;
            $request->merge(['total_payable' => $tatal_payable]);
        } elseif ($request->discount_type == "Fixed") {
            if (!empty($request->total_amount)) {
                $tatal_payable = ($request->total_amount - $request->advance_payment) - $request->discount;
                $request->merge(['total_payable' => $tatal_payable]);
            }
        } else {
            $tatal_payable = (($request->total_amount - ($request->total_amount * ($request->discount / 100))) - $request->advance_payment);
            $request->merge(['total_payable' => $tatal_payable]);
        }

        $id = $guest->update($request->all());

        session()->flash('message', 'Information updated successfully.');

        return redirect()->to('/guest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Guest $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        //
    }
}
