<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Carbon\Carbon;
use Guzzle\Tests\Plugin\Redirect;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller {

    /**
     * Show the form for uploading a new resource.
     *
     * @return Response
     */
    public function upload(){
        // Redirect to image upload form
        return view('imageupload');
    }

    /**
     * Store a newly uploaded resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $image = new Image();
        $this->validate($request, [
            'image' => 'required',
            'activite_id' => 'required'
        ]);
        if($request->hasFile('image')) {
            $file = Input::file('image');
            //dd($file);
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

            $name = $timestamp. '-' .$file->getClientOriginalName();

            $image->image = $name;

            $file->move(public_path().'/images/', $name);
        }
        DB::table('image')->insert(
            ['image' => $name, 'activite_id' => $request['activite_id']]
        );
        //$image->save();
        return redirect()->route('users.index')
            ->with('success','User created successfully');
    }

    public function create()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function show(Request $request)
    {
        $images = Image::all();
        return view('image.showLists', compact('images'));

    }
}