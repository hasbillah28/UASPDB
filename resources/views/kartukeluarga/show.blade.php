@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('kartukeluarga.detail')

        </div>

        <div class="col-lg-12">
            @include('kartukeluarga.index')
        </div>
    </div>
@endsection