<?php

namespace App\Http\Controllers;

class AdminController extends Controller {
    
    // Effettua il render della pagina principale
    public function index() {
        return view('admin', []);
    }
    
}
