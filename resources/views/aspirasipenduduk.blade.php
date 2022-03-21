@extends('layouts.main')

@section('content')
@foreach($aspirasipenduduk as $as)
    <ul>
        <li>{{$as->nik}}</li>
    </ul>
@endforeach
@endsection