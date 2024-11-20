@extends('layouts.app')

@section('template_title')
    {{ $asistente->name ?? __('Show') . " " . __('Asistente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Asistente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('asistentes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $asistente->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $asistente->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Rol Id:</strong>
                                    {{ $asistente->rol_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
