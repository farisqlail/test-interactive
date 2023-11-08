<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Settings;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Settings::whereNotNull('title_service')->get();

        return view('admin.service.index', [
            'service' => $service
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator  = Validator::make(request()->all(), [
                'title' => 'required',
                'desc'  => "required",
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator->errors());
            } else {
                $service                       = new Settings();

                if ($request->hasFile('image')) {
                    $file                   = $request->file('image');
                    $filename               = time() . '.' . $file->getClientOriginalExtension();
                    $service->image_service = 'file/service/'.$filename;
                    Storage::putFileAs("public/file/service", $file, $filename);
                }

                $service->title_service        = $request->get('title');
                $service->description_service  = $request->get('desc');
                $service->save();

                return redirect()->route('admin.service')->with('success', 'Berhasil menambah layanan kami');
            }
            
        } catch (QueryException $e) {
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Settings::findOrFail($id);

        return view('admin.service.edit', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validator = Validator::make(request()->all(), [
                'title' => 'required',
                'desc'  => "required",
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator->errors());
            } else {
                $service                       = Settings::findOrFail($id);
                
                if ($request->hasFile('image')) {
                    $file                   = $request->file('image');
                    $filename               = time() . '.' . $file->getClientOriginalExtension();
                    $service->image_service = 'file/service/'.$filename;
                    Storage::putFileAs("public/file/service", $file, $filename);
                }

                $service->title_service        = $request->get('title');
                $service->description_service  = $request->get('desc');
                $service->save();

                return redirect()->route('admin.service')->with('success', 'Berhasil mengubah layanan kami');
            }
            
        } catch (QueryException $e) {
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Settings::findOrFail($id);
        $service->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus layanan kami');
    }
}
