<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Calibration;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CalibrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $request = request();
        $user = $request->user;

        $calibrations = Calibration::where('user_id', $user)->get();

        return view('calibrations.index', compact('calibrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $calibration = new Calibration();

        return view('calibrations.create', compact('calibration'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'distance' => 'required|string|max:255'
        ]);

        $request->user()->calibrations()->create($validated);

        return redirect(route('calibrations.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Calibration $calibration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calibration $calibration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calibration $calibration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calibration $calibration)
    {
        //
    }
}
