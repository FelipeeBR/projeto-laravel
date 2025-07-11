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

    public function create() {
        return view('gado.create');
    }

    public function store(Request $request) {
        try {
            $this->gadoService->createGado($request->all());
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id) {
        $this->gadoService->deleteGado($id);
        return redirect()->route('dashboard');
    }
}
