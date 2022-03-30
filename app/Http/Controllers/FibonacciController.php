<?php

namespace App\Http\Controllers;

use App\Models\Fibonacci;
use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numbers = [];

        return view('fibonacci.index', compact('numbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $counter = 0;

        $num1 = 1;
        $num2 = 0;
        $numbers = []; 
        while ($counter <= $request->number) {
            $num3 = $num2 + $num1;
            $num1 = $num2;
            $num2 = $num3;
            $counter = $counter + 1;
            array_push($numbers, $num2);
        }

        return view('fibonacci.index', compact('numbers'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fibonacci  $fibonacci
     * @return \Illuminate\Http\Response
     */
    public function show(Fibonacci $fibonacci)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fibonacci  $fibonacci
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fibonacci  $fibonacci
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fibonacci $fibonacci)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fibonacci  $fibonacci
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fibonacci $fibonacci)
    {
        //
    }
}
