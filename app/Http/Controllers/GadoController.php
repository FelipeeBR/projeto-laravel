<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GadoService;

class GadoController extends Controller {
    protected $gadoService;

    public function __construct(GadoService $gadoService) {
        $this->gadoService = $gadoService;
    }

    public function index() {
        $gados = $this->gadoService->getAllGados();
        return view('gado.index', compact('gados'));
    }
}
