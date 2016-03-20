@extends('layouts.frontend')

@section('content')

<div class="container">
    @if(Session::has('message'))
    <center><span class="label label-success">{{ Session::get('message') }}</span></center>
@endif
<p></p>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
    
    <div class="panel-heading">
    <center>Selamat datang {{ Auth::user()->username}}</center>
    </div>
    <div class="panel-body">
    <div class="table-responsive">
    
    <table class="table table-bordered" border="0">
    <center><a href="{{ URL('logout')}}" class="btn btn-success">Logout</a></center>
    </table>
    </div>
    </div>
    </div>
</div>
</div>
@stop