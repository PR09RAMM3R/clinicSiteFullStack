<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('adminPage.services.index')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminPage.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (isset($request->photo)) {
            $path = $request->file('photo')->store('serviceImg');
        }

        Service::create([
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $path ?? null,
        ]);
        return redirect()->route('services.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        return view('adminPage.services.edit')->with('service',$service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        $photo = $service->photo;
        if (isset($request->photo)) {
            Storage::delete($service->photo);
            $photo = $request->file('photo')->store('serviceImg');
        }

        $service->update([
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $photo ?? null,
        ]);
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        $service->delete();
        if(isset($service->photo)) {
            Storage::delete($service->photo);
        }
        return redirect()->back();
    }
}
