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
        if(isset($data['codigo']) && $this->getGado($data['codigo'])) {
            throw new \Exception('Código já cadastrado.');
        }
        return $this->gadoRepository->create($data);
    }

    public function updateGado($id, array $data) {
        return $this->gadoRepository->update($id, $data);
    }
}