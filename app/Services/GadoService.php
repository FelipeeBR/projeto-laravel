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
        return $this->gadoRepository->create($data);
    }

    public function updateGado($id, array $data) {
        return $this->gadoRepository->update($id, $data);
    }
}