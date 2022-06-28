@extends('adminlte::page')

@section('title', 'Relatórios do PROEDI')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('reports.index')}}">Menu</a></li>
    </ol>
@stop

@section('content')

<div class="card-body">
    <thead>
      <div class="small-box bg-info"  style=" display: inline-block; width: 40%">
        <div class="inner">
          <h4>PROEDI</h4>
          <p>Relatórios Personalizados Do  PROEDI <strong></strong></p>
        </div>
        <div class="icon">
            <i class="fas fa-industry"></i>
        </div>
        <a href="{{ route('reports.proedi.index')}}" class="small-box-footer">
            Criar Relatórios Do PROEDI <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
@stop