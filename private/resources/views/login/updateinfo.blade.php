@extends('layouts.frontend')

@section('content')
    <div class="container">
<p></p>
        <div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
    
    <div class="panel-heading">
    <center> Search Data Peserta </center>
    </div>
    <div class="panel-body">
        {!! Form::open(['url' => '/updatepeserta']) !!}
        NIP: 
        {!! Form::text('nip', '', ['placeholder' => 'NIP', 'class' => 'form-control']) !!}
        <p></p>
        {!! Form::submit('Search', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
        @stop
    </div>
    </div>
</div>
</div>