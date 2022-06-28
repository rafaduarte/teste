@extends('adminlte::page')

@section('title', 'Relatórios do PROEDI')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('proedi.index')}}">Menu</a></li>
    </ol>
@stop

@section('content')

<div class="card-body">
    <thead>
      
      <div class="small-box bg-info"  style=" display: inline-block; width: 40%">
        <div class="inner">
          <h4>PROEDI</h4>
          <p>Total de Empresas: <strong>{{$quantidadeProedi}}</strong></p>
        </div>
        <div class="icon">
            <i class="fas fa-industry"></i>
        </div>
        <a href="{{ route('proedi.proedi')}}" class="small-box-footer">
            Cadastrar empresa no PROEDI <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
     
      <div class="small-box bg-gradient-success"   style=" display: inline-block; width: 40%">
        <div class="inner">
          <h4>Pedidos de Concessão</h4>
          <p>Total de Pedidos: <strong>{{$quantidadeConcessao}}</strong></p>
        </div>
        <div class="icon">
          <i class="fas fa-sticky-note"></i>        </div>
        <a href="{{route('concessao.proedi.index')}}" class="small-box-footer">
          Visualizar Pedidos de Concessão <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    
      <div class="small-box bg-gradient-warning"  style="display: inline-block; width: 40%">
        <div class="inner">
          <h4>Pedidos de Revisão</h4>
          <p>Total de Pedidos: <strong>{{$countRevision}}</strong></p>
        </div>
        <div class="icon">
          <i class="far fa-sticky-note"></i>        </div>
        <a href="{{route('revisao.proedi.index')}}" class="small-box-footer">
          Visualizar Pedidos de Revisão <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    
      <div class="small-box bg-pink"  style="display: inline-block; width: 40%">
        <div class="inner">
          <h4>Informações Periódicas</h4>
          <p>total de Relatórios: <strong>@if (isset($soma)) {{$soma}} @else 0 @endif              
          </strong></p>
        </div>
        <div class="icon">
          <i class="fas fa-pager"></i>
        </div>
        <a href="{{ route('index.relatorio.proedi.index')}}" class="small-box-footer">
            Visualizar Informações Periódicas <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>

      <div class="small-box bg-blue"  style="display: inline-block; width: 40%">
        <div class="inner">
          <h4>SEI</h4>
          <p>Inserir Número do Protocolo e Link<strong></strong></p>
        </div>
        <div class="icon">
          <i class="fas fa-paste"></i>
        </div>
        <a href="{{ route('proedi.sei.index')}}" class="small-box-footer">
            Cadastrar informações do SEI <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </thead>
</div>
@stop