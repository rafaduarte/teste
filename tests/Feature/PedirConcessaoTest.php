<?php

namespace Tests\Feature;

use App\Models\proedi\PedirConcessaoProedi;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PedirConcessaoTest extends TestCase
{
    /**
     * test All Pedidos de Concessão
     *
     * @return void
     */
    public function testAllPedidosConcessao()
    {
        factory(PedirConcessaoProedi::class, 2)->create();
        $response = $this->get('admin/concessao/proedi');

        $response->dump();

        $response->assertStatus(200);
    }
}
