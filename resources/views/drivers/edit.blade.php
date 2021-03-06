@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h5 class="breadcrumb__title">Editar chofer</h5>
            <nav class="breadcrumb">
                <a class="breadcrumb__item" href="/">Dashboard</a>
                <a class="breadcrumb__item" href="/clientes">Choferes</a>
                <span class="breadcrumb__item active">Editar Chofer</span></nav>
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @include('layouts.admin.alerts')
        </div>
    </div>

    <div class="row">
        <div class="col-xs col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
            <div class="card">
                <div class="card__heading">
                    <h6 class="card__title">Información General</h6>
                </div>
                <div class="card__body">
                    <form class="form-horizontal" action="" method="post">
                        {{ csrf_field() }}
                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Nombre</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="name" value="{{ $driver->name }}">
                            </div>
                        </div>
                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Apellido</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="lastname" value="{{ $driver->lastname }}">
                            </div>
                        </div>

                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Licencia</label>
                            <div class="col-10">
                                <label class="custom-file d-block" id="licencia">
                                    <input type="file" class="custom-file-input" aria-describedby="fileHelp" name="licencia">
                                    <span class="custom-file-control form-control-file"></span>
                                </label>
                            </div>

                        </div>
                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Certificado Médico</label>
                            <div class="col-10">
                                <label class="custom-file d-block" id="certificado">
                                    <input type="file" class="custom-file-input" aria-describedby="fileHelp" name="certificado">
                                    <span class="custom-file-control form-control-file"></span>
                                </label>
                            </div>

                        </div>


                        <div class="form__group row">
                            <label for="" class="col-2 col__form__label">Observaciones</label>
                            <div class="col-10">
                                <textarea class="form-control" name="observation" rows="8">{{ $driver->observation }}</textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
