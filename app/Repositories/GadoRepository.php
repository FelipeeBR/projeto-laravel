<?php

namespace App\Repositories;

use App\Models\Gado;

class GadoRepository {

    public function getAll() {
        return Gado::all();
    }

    public function getAllNotAbate() {
        return Gado::where('abatido', false)->get();
    }

    public function getAllAbate() {
        return Gado::where('abatido', true)->get();
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

    public function findAbate() {
        $gados = $this->getAllNotAbate();
        $data_hoje = date_create();
        $resultado = array();
        $arroba = 18 * 15;
        foreach($gados as $gado) {
            $dataNascimento = date_create($gado->data_nascimento);
            $idade = date_diff($dataNascimento, $data_hoje)->y;
            $racao_dia = $gado->racao / 7;

            if($idade > 5 || $gado->leite < 40) {
                $resultado[] = $gado;
            }
            if($gado->leite < 70 && $racao_dia > 50) {
                $resultado[] = $gado;
            }
            if($gado->peso > $arroba) {
                $resultado[] = $gado;
            }
        }
        return $resultado;
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
}