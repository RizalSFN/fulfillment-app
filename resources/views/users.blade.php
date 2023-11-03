@extends('layouts.main')

@section('container')
    <h3 class="mt-2">Users Management</h3>
    <label>Laravel > {{ $title }}</label>
    <hr class="bg-secondary">
    {{-- <div>
        @foreach ($data as $item)
            {{ $item['message'] }} <br>
            {{ $item['payload'] }}
        @endforeach
    </div> --}}
    <div class="container">
        <div class="row mt-5 align-items-center">
            <button type="button" class="btn btn-outline-primary col-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus-circle"></i> Tambah user
            </button>
            <div class="col-auto ms-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="autoSizingCheck" checked>
                    <label class="form-check-label" for="autoSizingCheck">
                        Aktif
                    </label>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                    <label class="form-check-label" for="autoSizingCheck">
                        Nonaktif
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah user</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <label for="nama" class="mb-1">Nama :</label>
                        <input type="text" id="nama" class="form-control" placeholder="Masukkan nama" required
                            autofocus>
                        <label for="username" class="mt-2 mb-1">Username :</label>
                        <input type="text" id="username" class="form-control" placeholder="Masukkan username" required>
                        <label for="password" class="mt-2 mb-1">Password :</label>
                        <div class="input-group">
                            <input type="password" id="password" class="form-control" placeholder="Masukkan password"
                                required>
                            <span class="input-group-text"><i class="bi bi-eye-slash-fill"></i></span>
                        </div>
                        <label for="k_password" class="mt-2 mb-1">Konfirmasi Password :</label>
                        <div class="input-group">
                            <input type="password" id="k_password" class="form-control"
                                placeholder="Masukkan konfirmasi password" required>
                            <span class="input-group-text"><i class="bi bi-eye-slash-fill"></i></span>
                        </div>
                        <label for="email" class="mt-2 mb-1">Email :</label>
                        <input type="email" id="email" class="form-control" placeholder="Masukkan email" required>
                        <label for="role" class="mt-2 mb-1">Role :</label>
                        <select id="role" class="form-control mb-5" required>
                            <option hidden>Pilih Role</option>
                            <option value="KRY">Karyawan</option>
                            <option value="SPV">Supervisor</option>
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <table id="datatablesSimple" class="table table-bordered table-striped shadow">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th class="col-3">Nama</th>
                    <th class="col-3">Email</th>
                    <th class="col-1">Status</th>
                    <th class="col-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Rizal</td>
                    <td>rizal@gmail.com</td>
                    <td class="text-center"><span class="badge text-bg-success">aktif</span></td>
                    <td>
                        <button class="btn btn-warning"><i class="bi bi-pencil-square px-1"></i></button>
                        <button class="btn btn-danger"><i class="bi bi-slash-circle px-1"></i></button>
                        <button class="btn btn-primary"><i class="bi bi-person-lines-fill px-1"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Sofiana</td>
                    <td>sofiana@gmail.com</td>
                    <td class="text-center"><span class="badge text-bg-danger">nonaktif</span></td>
                    <td>
                        <button class="btn btn-warning"><i class="bi bi-pencil-square px-1"></i></button>
                        <button class="btn btn-danger"><i class="bi bi-slash-circle px-1"></i></button>
                        <button class="btn btn-primary"><i class="bi bi-person-lines-fill px-1"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
