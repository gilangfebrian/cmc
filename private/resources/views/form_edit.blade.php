@extends('layouts/t_index')
@section('content')

<div class="container">
@if(Session::has('message'))
    <span class="label label-success">{{ Session::get('message') }}</span>
@endif
<p></p>
    <div class="panel panel-default">
    <div class="panel-heading">Ubah Data</div>
        <div class="panel-body">
        {!! Form::open(['url' => '/prosesedit']) !!}
        {!! Form::hidden('id', $trainee->id, ['class' => 'form-control']) !!}
            Nama
            {!! Form::text('nama', $trainee->nama, ['class' => 'form-control']) !!}
            Alamat
            {!! Form::text('nip', $trainee->nip, ['class' => 'form-control']) !!}
            Kelas
            {!! Form::text('unit', $trainee->unit, ['class' => 'form-control']) !!}
            <p></p>
            {!! Form::submit('Ubah Data', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        @stop
        </div>
    </div>
</div>