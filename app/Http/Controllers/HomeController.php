<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Mapper::location('23 avenue du président François Mitterrand Floirac')->map();
        return view('home');
    }

    public function __construct()
    {
        $this->middleware('auth');

    }

}
