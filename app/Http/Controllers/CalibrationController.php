<?php

namespace App\Http\Controllers;

use App\Http\Requests\Calibrations\CreateCalibrationRequest;
use Illuminate\View\View;
use App\Models\Calibration;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

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
        return view('calibrations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCalibrationRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $user = Auth::user();

        $user->calibrations()->create($validated);

        return redirect(route('calibrations.index', $user->id));
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
