@extends('StudentRegister.layouts.index')

@section('main-content')
    <div class="mt-3">
        <a href="/" class="text-decoration-none ">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
        <div class="fullname mt-4">
            <span class="text-secondary">Fullname :</span>
            <h2>{{ $data->fullname }}</h2>
        </div>
        <div class="npm mt-4">
            <span class="text-secondary">npm :</span>
            <h2>{{ $data->npm }}</h2>
        </div>
        <div class="email mt-4">
            <span class="text-secondary">email :</span>
            <h2>{{ $data->email }}</h2>
        </div>
        <div class="prodi mt-4">
            <span class="text-secondary">prodi :</span>
            <h2>{{ $data->prodi }}</h2>
        </div>
    </div>
@endsection
