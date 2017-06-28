@extends('layouts.admin')

@section('content')

<ol class="breadcrumb">
  <li><a href="/admin/tramites">Tamites</a></li>
  <li><a href="#">{{$tramites->nombre}}</a></li>
</ol>






<ul class="nav nav-tabs" role="tablist">

      <li role="presentation"><a href="#tramites" aria-controls="tramites" role="tab" data-toggle="tab">Datos</a></li>
      <li role="presentation"><a href="#requisitos" aria-controls="requisitos" data-toggle="tab">Requisitos</a></li>   
      <li role="presentation"><a href="#oficinas" aria-controls="oficinas" data-toggle="tab">Oficinas</a></li>
      <li role="presentation"><a href="#preguntas" aria-controls="preguntas" data-toggle="tab">Preguntas Frecuentes</a></li>
  </ul>




<h3>{{$tramites->nombre}}</h3>

<div class="tab-content">

  @include('admin/main')
  @include('admin/requisitos')
  @include('admin/oficinas')
  @include('admin/preguntas')
 
 </div>

  @endsection
