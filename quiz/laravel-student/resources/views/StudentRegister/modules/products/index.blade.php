@extends('StudentRegister.layouts.index')

@section('main-content')
    <div class="row mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header fw-bold ">
                    List of Students
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">FullName</th>
                                <th scope="col">npm</th>
                                <th scope="col">email</th>
                                <th scope="col">prodi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $student)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <td>{{ $student->fullname }}</td>
                                    <td>{{ $student->npm }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->prodi }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a href="/details/{{ $student->id }}">
                                                <button type="button" class="btn btn-primary btn-sm">
                                                    <i class="bi bi-eye-fill"></i>
                                                </button>
                                            </a>
                                            <a href="/update/{{ $student->id }}">
                                                <button type="button" class="btn btn-success btn-sm">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                            </a>
                                            <a href="/delete/{{ $student->id }}">
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah data tersebut mau dihapus?')">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-3">
                {{-- {{ $data->links() }} --}}
            </div>
        </div>
        <div class="col-lg-4">
            @include('StudentRegister.modules.products.create')
        </div>
    </div>
@endsection
