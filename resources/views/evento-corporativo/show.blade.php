@extends('layouts.app')

@section('template_title')
    {{ $eventoCorporativo->name ?? __('Show') . " " . __('Evento Corporativo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evento Corporativo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('evento-corporativos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $eventoCorporativo->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $eventoCorporativo->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $eventoCorporativo->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Evento Id:</strong>
                                    {{ $eventoCorporativo->tipo_evento_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
