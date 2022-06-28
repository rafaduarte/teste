@extends('adminlte::page')

@section('title', 'Relatórios do PROEDI')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('proedi.empresa.index')}}">Menu</a></li>
    </ol>
@stop

@section('content')

<div class="card-body">
    <thead>
      @if ($quantidadeProedi > 0)

      <div class="small-box bg-info"  style=" display: inline-block; width: 40%">
        <div class="inner">
          <h4>PROEDI</h4>
          <p>Visualizar meu PROEDI <strong></strong></p>
        </div>
        <div class="icon">
            <i class="fas fa-industry"></i>
        </div>
        <a href="{{ route('proedi.empresa.myproedi')}}" class="small-box-footer">
            Abrir página meu PROEDI <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
      @endif  
      
      @if ($quantidadeProedi < 1)
          
      
      <div class="small-box bg-info"  style=" display: inline-block; width: 40%">
        <div class="inner">
          <h4>PROEDI</h4>
          <p>Acompanhar processo do PROEDI <strong></strong></p>
        </div>
        <div class="icon">
            <i class="fas fa-industry"></i>
        </div>
        <a href="{{ route('proedi.empresa.myproedi')}}" class="small-box-footer">
            Abrir página do Processo Clique aqui <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
      @endif
      
     
      <div class="small-box bg-gradient-success"   style=" display: inline-block; width: 40%">
        <div class="inner">
          <h4>Pedidos de Concessão</h4>
          <p>Total de Pedidos: <strong>{{$quantidadeConcessao}}</strong></p>
        </div>
        <div class="icon">
          <i class="fas fa-sticky-note"></i>        </div>
        <a href="{{route('proedi.concessao.index')}}" class="small-box-footer">
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
        <a href="{{route('proedi.revisao.index')}}" class="small-box-footer">
          Abrir página de pedido de Revisão <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    
      <div class="small-box bg-pink"  style="display: inline-block; width: 40%">
        <div class="inner">
          <h4>Informações Periódicas</h4>
          <p>Envie Formulário de Acompanhamento Trimestral</p>
        </div>
        <div class="icon">
          <i class="fas fa-pager"></i>
        </div>
        <a href="{{ route('proedi.relatorio.index')}}" class="small-box-footer">
            Abrir página de Informações Periódicas <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </thead>
</div>


@stop