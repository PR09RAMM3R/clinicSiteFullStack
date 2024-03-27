<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\File;
use Storage;

class DoctorsController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminPage.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (isset($request->photo)) {
            $path = $request->file('photo')->store('doctorsImg');
        }

        Doctor::create([
            'name' => $request->name,
            'telefon_raqam' => $request->telefon_raqam,
            'photo' => $path ?? null,
            'job' => $request->job,
            'ish_vaqti' => $request->ish_vaqti,
            'ish_kuni' => $request->ish_kuni,
            'xona_raqami' => $request->xona_raqami,
            'malakasi' => $request->malakasi
        ]);
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $doctor = Doctor::find($id);
        return view('adminPage.doctors.show')->with('doctr', $doctor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::find($id);
        return view('adminPage.doctors.edit')->with('doctor',$doctor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $doctor = Doctor::find($id);
        if (isset($request->photo)) {
            Storage::delete($doctor->photo);
            $path = $request->file('photo')->store('doctorsImg');
        }
        $doctor->update([
            'name' => $request->name,
            'telefon_raqam' => $request->telefon_raqam,
            'photo' => $path ?? $doctor->photo,
            'job' => $request->job,
            'ish_vaqti' => $request->ish_vaqti,
            'ish_kuni' => $request->ish_kuni,
            'xona_raqami' => $request->xona_raqami,
            'malakasi' => $request->malakasi
        ]);
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        if(isset($doctor->photo)) {
            Storage::delete($doctor->photo);
        }
        return redirect()->back();
    }
}
