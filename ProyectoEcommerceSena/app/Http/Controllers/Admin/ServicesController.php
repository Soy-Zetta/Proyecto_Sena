<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index () {
        return view('services');
    }

    public function mantenimiento () {
        return view('SubPagesServices.mantenimientoGeneral');
    }

    public function programacion () {
        return view('SubPagesServices.programacion');
    }

    public function reparacionMovil () {
        return view('SubPagesServices.reparacionMovil');
    }

    public function InstalacionCamaras () {
        return view('SubPagesServices.InstalacionCamaras');
    }
    
    public function EnsambleEquipos () {
        return view('SubPagesServices.EnsambleEquipos');
    }

    public function ReparacionBisagras () {
        return view('SubPagesServices.ReparacionBisagras');
    }
}
