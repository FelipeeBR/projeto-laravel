<?php

namespace App\Repositories;

use App\Models\Gado;

class GadoRepository {

    public function getGados() {
        return Gado::all();
    }

    public function findGado($id) {
        return Gado::findOrFail($id);
    }

    public function createGado($data) {
        return Gado::create($data);
    }

    public function updateGado($id, array $data) {
        $gado = Gado::findOrFail($id);
        $gado->update($data);
        return $gado;
    }
}