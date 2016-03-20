@extends('layouts.frontenduser')

@section('content')

<div class="wrapper">
@include('layouts.timer')
</div>

<div class="container">
    @if(Session::has('message'))
    <center><span class="label label-success">{{ Session::get('message') }}</span></center>
@endif
<p></p>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
    
    <div class="panel-heading">
    <center> Posttest Kelas Pelaporan EUT SAKTI </center>
    </div>
    <div class="panel-body">
    <div class="table-responsive">
    
    <table class="table table-bordered" border="0">
        {!! Form::open(['url' => '/prosesedit']) !!}
        
        <?php $no=1; ?>
        @foreach ($questions as $data) 
        {{ $no++ }} .
        {{$data->pro }}
        {{$data ->soal }} <br> 
        {{Form::radio('RbJawaban[$data[id]]', 'a')}}
        {{$data->jawab_a }} <br>
        {{Form::radio('RbJawaban[$data[id]]', 'b')}}
        {{$data->jawab_b }} <br>
        {{Form::radio('RbJawaban[$data[id]]', 'c')}}
        {{$data->jawab_c }} <br>
        {{Form::radio('RbJawaban[$data[id]]', 'd')}}
        {{$data->jawab_d }} <br><br>
        @endforeach
        
        {!! Form::submit('Process', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        @stop
        
    </table>
    </div>
    </div>
    </div>
</div>
</div>