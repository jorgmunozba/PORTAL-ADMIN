@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

            {!! Form::open(['route'=>['empresa.update',$empresa],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
                <div class="form-group">
                    <label for="title">INGRESE TITLE</label>
                    {!! Form::text('title',$empresa->title,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="description">INGRESE description</label>
                    {!! Form::textarea('description',$empresa->description,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>

                <div class="form-group">
                    <label for="somos">SOMOS</label>
                    {!! Form::textarea('somos',$empresa->somos,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlsomos">IMAGEN SOMOS</label> <br>
                    <img src="/img/empresa/{{$empresa->urlsomos}}">
                    {!! Form::file('urlsomos') !!}
                </div>

                <div class="form-group">
                    <label for="historia">HISTORIA</label>
                    {!! Form::textarea('historia',$empresa->historia,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlhistoria">IMAGEN HISTORIA</label> <br>
                    <img src="/img/empresa/{{$empresa->urlhistoria}}">
                    {!! Form::file('urlhistoria') !!}
                </div>

                <div class="form-group">
                    <label for="vision">VISIÓN</label>
                    {!! Form::textarea('vision',$empresa->vision,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlvision">IMAGEN VISIÓN</label> <br>
                    <img src="/img/empresa/{{$empresa->urlvision}}">
                    {!! Form::file('urlvision') !!}
                </div>

                <div class="form-group">
                    <label for="urlvalores">VALORES</label>
                    {!! Form::textarea('urlvalores',$empresa->urlvalores,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlurlvalores">IMAGEN VALORES</label> <br>
                    <img src="/img/empresa/{{$empresa->urlurlvalores}}">
                    {!! Form::file('urlurlvalores') !!}
                </div>
            </div>
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection