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
            return redirect()->route('gado.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id) {
        $this->gadoService->deleteGado($id);
        return redirect()->route('gado.index');
    }

    public function show($codigo) {
        $gado = $this->gadoService->getGadoByCodigo($codigo);
        return view('gado.show', compact('gado'));
    }

    public function edit($id) {
        $gado = $this->gadoService->getGado($id);
        return view('gado.edit', compact('gado'));
    }

    public function update(Request $request, $id) {
        try {
            $this->gadoService->updateGado($id, $request->all());
            return redirect()->route('gado.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function abate() {
        $gados = $this->gadoService->getGadoAbate();
        return view('gado.abate', compact('gados'));
    }

    public function updateAbate($id) {
        $this->gadoService->updateAbate($id);
        return redirect()->route('gado.abate');
    }

    public function listAbatidos() {
        $gados = $this->gadoService->getAllAbate();
        return view('gado.listAbatidos', compact('gados'));
    }

    public function getTotalLeite() {
        $totalLeite = $this->gadoService->getTotalLeite();
        return view('dashboard', compact('totalLeite'));
    }
}
