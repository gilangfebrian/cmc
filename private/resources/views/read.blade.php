@extends('layouts/t_index')
@section('content')

<div class="container">
@if(Session::has('message'))
    <span class="label label-success">{{ Session::get('message') }}</span>
@endif

<p></p>
<div class="table-responsive">
    
    <table class="table table-bordered">
    
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Unit Kerja</th>
            <th>Action</th>
        </tr>
        <?php $no=1; ?>
        @foreach ($trainee as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->nip }}</td>
            <td>{{ $data->unit }}</td>
            <td><a href="hapus/{{$data->id}}" class="btn btn-danger">Delete</a> <a href="formedit/{{$data->id}}" class="btn btn-primary">Update</a></td>        
        </tr>
        @endforeach
    </table>
</div>
</div>
@stop