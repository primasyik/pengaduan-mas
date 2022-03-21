@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Profil Admin') }}</div>

                <div class="card-body">
                   @foreach($admin as $admin)
                        <ul>
                            <li>
                                Nama : {{$admin->name}}
                                <br>
                                Email : {{$admin->email}}
                            </li>
                        </ul>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
