<?php

namespace App\Repositories;

use App\Models\Gado;

class GadoRepository {

    public function getAll() {
        return Gado::orderby('created_at', 'desc')->paginate(3);
    }

    public function getAllNotAbate() {
        return Gado::where('abatido', false)->orderBy('created_at', 'desc')->paginate(3);
    }

    public function getAllAbate() {
        return Gado::where('abatido', true)->orderBy('created_at', 'desc')->paginate(3);
    }

    public function find($id) {
        return Gado::where('id', $id)->first();
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

    public function findAbate() {
        $arroba = 18 * 15;

        return Gado::where(function ($query) use ($arroba) {
            $query->whereRaw('TIMESTAMPDIFF(YEAR, data_nascimento, CURDATE()) > 5')
                  ->orWhere('leite', '<', 40)
                  ->orWhere(function ($sub) {
                      $sub->where('leite', '<', 70)
                          ->whereRaw('(racao / 7) > 50');
                  })
                  ->orWhere('peso', '>', $arroba);
        })
        ->where('abatido', false)
        ->paginate(3);
    }

    public function updateAbate($id) {
        $gado = Gado::findOrFail($id);
        $gado->abatido = true;
        $gado->save();
    }

    public function findTotalLeite() {
        $gados = $this->getAllNotAbate();
        return $gados->sum('leite');
    }

    public function findTotalRacao() {
        $gados = $this->getAllNotAbate();
        return $gados->sum('racao');
    }

    public function findTotalIdadeAndConsumo() {
        $gados = $this->getAllNotAbate();
        $data_hoje = date_create();
        $resultado = array();
        foreach($gados as $gado) {
            $dataNascimento = date_create($gado->data_nascimento);
            $idade = date_diff($dataNascimento, $data_hoje)->y;
            if($idade <= 1 && $gado->racao > 500) {
                $resultado[] = $gado;
            }
        }
        return $resultado;
    }
}