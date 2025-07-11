<?php

namespace App\Repositories;

use App\Models\Gado;

class GadoRepository {

    public function getAll() {
        return Gado::all();
    }

    public function find($id) {
        return Gado::where('codigo', $id)->first();
    }

    public function create($data) {
        return Gado::create($data);
    }

    public function update($id, array $data) {
        $gado = Gado::findOrFail($id);
        $gado->update($data);
        return $gado;
    }

    public function delete($id) {
        $gado = Gado::findOrFail($id);
        $gado->delete();
    }

    public function findByCodigo($codigo) {
        return Gado::where('codigo', $codigo)->first();
    }
}