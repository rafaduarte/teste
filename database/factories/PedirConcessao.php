<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\proedi\PedirConcessaoProedi;
use Faker\Generator as Faker;
use Illuminate\Validation\Rules\Unique;

$factory->define(PedirConcessaoProedi::class, function (Faker $faker) {
    return [
        'tenant_id' => factory(PedirConcessaoProedi::class),
        'nome_empresa' => $faker->unique()->name,
        'requerimento' => 'teste.pdf',
        'projeto' => 'teste.pdf',
        'cnpj' => uniqid() . date('YmdHis'),
        'inscricao_estadual' => 'teste.pdf',
        'certidao_federal' => 'teste.pdf',
        'certidao_estadual' => 'teste.pdf',
        'certidao_municipal' => 'teste.pdf',
        'certidao_trabalhista' => 'teste.pdf',
        'certidao_fgts' => 'teste.pdf',
        'ata_constituicao' => 'teste.pdf',
        'procuracao_responsavel' => 'teste.pdf',
        'rg_responsavel' => 'teste.pdf',
        'comprovante_residencia' => 'teste.pdf',
        'relatorio_gfip' => 'teste.pdf',
        'relatorio_faturamento' => 'teste.pdf',
        'documentos' => 'teste.pdf',
    ];
});
