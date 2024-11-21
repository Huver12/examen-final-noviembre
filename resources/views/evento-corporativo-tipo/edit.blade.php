@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Evento Corporativo Tipo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Evento Corporativo Tipo</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('evento-corporativo-tipos.update', $eventoCorporativoTipo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('evento-corporativo-tipo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
