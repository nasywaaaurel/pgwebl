<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PolylinesModel;

class PolylinesController extends Controller
{
    public function __construct()
    {
        $this->polylines = new PolylinesModel();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Map',
        ];
        return view('map', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request
        $request->validate(
            [
                'name' => 'required|unique:polylines,name',
                'description' => 'required',
                'geom_polyline' => 'required',
                'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2000',

            ],
            [
                'name.required' => 'Name is required',
                'name.unique' => 'Name already exists',
                'description.required' => 'Description is required',
                'geom_polyline.required' => 'Geometry Polyline is required',
            ]
        );

        // Create images directory if not exists
        if (!is_dir('storage/images')) {
            mkdir('./storage/images', 0777);
        }

        // Get image file
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_image = time() . "_polyline." . strtolower($image->getClientOriginalExtension());
            $image->move('storage/images', $name_image);
        } else {
            $name_image = null;
        }

        $data = [
            'geom' => $request->geom_polyline,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $name_image,
            'user_id' => auth()->user()->id,
        ];

        // Create data
        if (!$this->polylines->create($data)) {
            return redirect()->route('map')->with('error', 'Polyline failed to add');
        }

        // Redirect to map
        return redirect()->route('map')->with('success', 'Polyline has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'title' => 'Edit Polyline',
            'id' => $id,
        ];

        return view('edit-polyline', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Validation

        $request->validate(
            [
                'name' => 'required|unique:polylines,name,' . $id, //BARU
                'description' => 'required',
                'geom_polyline' => 'required',
                'image' => 'nullable|mimes:jpeg,png,gif,svg|max:2048',
            ],
            [
                'name.required' => 'Name is required',
                'name.unique' => 'Name all ready exists',
                'description.required' => 'Description is required',
                'geom_polyline.required' => 'Geometry polyline is required'
            ]
        );

        // Create image directory if not exist
        if (!is_dir('storage/images')) {
            mkdir('./storage/images', 0777);
        }

        // Get old image file name (BARU)
        $old_image = $this->polylines->find($id)->image;

        // Get image file
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_image = time() . "_polyline." . strtolower($image->getClientOriginalExtension());
            $image->move('storage/images', $name_image);


            //Delete old image file BARU
            if ($old_image != null) {
                if (file_exists('./storage/images/' . $old_image)) {
                    unlink('./storage/images/' . $old_image);
                }
            }
        } else {
            $name_image = $old_image;
        }

        $data = [
            'geom' => $request->geom_polyline,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $name_image,
        ];

        //update data (BARU)
        if (!$this->polylines->find($id)->update($data)) {
            return redirect()->route('map')->with('success', 'Polyline failed to add');
        }

        //Redirect to Map
        return redirect()->route('map')->with('success', 'Polyline has been added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imagefile  = $this->polylines->find($id)->image;

        if (!$this->polylines->destroy($id)) {
            return redirect()->route('map')->with('error', 'Polyline failed to delete');
        }

        // Delete image file
        if ($imagefile != null) {
            if (file_exists('./storage/images/' . $imagefile)) {
                unlink('./storage/images/' . $imagefile);
            }
        }

        return redirect()->route('map')->with('success', 'Polyline has been deleted');
    }
}
