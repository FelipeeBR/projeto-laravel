<?php

namespace App\Services;

use App\Repositories\GadoRepository;

class GadoService {
    protected $gadoRepository;

    public function __construct(GadoRepository $gadoRepository) {
        $this->gadoRepository = $gadoRepository;
    }

    public function getAllGados() {
        return $this->gadoRepository->getAll();
    }

    public function getGado($id) {
        return $this->gadoRepository->find($id);
    }

    public function createGado($data) {
        if(isset($data['data_nascimento']) && $data['data_nascimento'] > now()) {
            throw new \Exception('Data de nascimento não pode ser maior que a data atual.');
        }
        if(isset($data['codigo']) && $this->getGadoByCodigo($data['codigo'])) {
            throw new \Exception('Código já cadastrado.');
        }
        return $this->gadoRepository->create($data);
    }

    public function updateGado($id, array $data) {
        if(isset($data['data_nascimento']) && $data['data_nascimento'] > now()) {
            throw new \Exception('Data de nascimento não pode ser maior que a data atual.');
        }
        if(isset($data['codigo']) && $this->getGadoByCodigo($data['codigo'])) {
            throw new \Exception('Código já cadastrado.');
        }
        return $this->gadoRepository->update($id, $data);
    }

    public function deleteGado($id) {
        return $this->gadoRepository->delete($id);
    }

    public function getGadoByCodigo($codigo) {
        return $this->gadoRepository->findByCodigo($codigo);
    }

    public function getGadoAbate() {
        return $this->gadoRepository->findAbate();
    }

    public function updateAbate($id) {
        return $this->gadoRepository->updateAbate($id);
    }

    public function getAllAbate() {
        return $this->gadoRepository->getAllAbate();
    }

    public function getTotalLeite() {
        return $this->gadoRepository->findTotalLeite();
    }

    public function getTotalRacao() {
        return $this->gadoRepository->findTotalRacao();
    }

    public function getTotalIdadeAndConsumo() {
        return $this->gadoRepository->findTotalIdadeAndConsumo();
    }
}