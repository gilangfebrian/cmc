@extends('layouts/t_index')

@section('content')

<div class="container">
<p></p>
<div class="panel panel-default">
    <div class="panel-heading">
    Tambah Data
    </div>
    <div class="panel-body">
        {!! Form::open(['url' => '/prosestambah']) !!}
        Nama: @if($errors->has())
    <br/>
        <span class="label label-danger">{!! $errors->first('nama')!!}</span>
    <p></p>
        @endif
        
        {!! Form::text('nama', '', ['placeholder' => 'Nama', 'class' => 'form-control']) !!}
        Alamat:@if($errors->has())
    <br/>
        <span class="label label-danger">{!! $errors->first('alamat')!!}</span>
    <p></p>
        @endif
        
        {!! Form::text('alamat', '', ['placeholder' => 'Alamat', 'class' => 'form-control']) !!}
        Kelas:
        @if($errors->has())
    <br/>
        <span class="label label-danger">{!! $errors->first('kelas')!!}</span>
    <p></p>
        @endif
        
        {!! Form::text('kelas', '', ['placeholder' => 'Kelas', 'class' => 'form-control']) !!}
        <p></p>
        {!! Form::submit('Tambah Data', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        @stop
    </div>
</div>
</div>