@extends('layouts_blog.layout')

@section('isi')
<div class="header" style="margin-top: 50px">

</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Alumni</th>
        </tr>
    </thead>
    <tbody>
    @php
    $i = 1;
    @endphp
    @foreach($alumni as $value)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $value->nama }}</td>
        </tr>
        @php
        $i++;
        @endphp
    @endforeach
    </tbody>
</table>

@endsection
