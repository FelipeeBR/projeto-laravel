<?php

namespace Tests\App\Http\Controllers;

use Tests\TestCase;
use App\Services\GadoService;
use App\Repositories\GadoRepository;

class GadoControllerTest extends TestCase {

    public function test_create_gado_excessao_data() {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Data de nascimento não pode ser maior que a data atual.");

        $repository = new GadoRepository();
        $service = new GadoService($repository);

        $service->createGado(
            [
                'codigo' => 'GADO_0001',
                'leite' => '1000',
                'racao' => '1000',
                'peso' => '1000',
                'data_nascimento' => now()->addDays(1)->toDateString(),
            ]
        );
    }

    public function test_create_gado_excessao_codigo() {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Código já cadastrado.");

        $repository = new GadoRepository();
        $service = new GadoService($repository);

        $service->createGado(
            [
                'codigo' => 'GADO_0001',
                'leite' => '1000',
                'racao' => '1000',
                'peso' => '1000',
                'data_nascimento' => now()->subDays(1)->toDateString(),
            ]
        );
    }
}