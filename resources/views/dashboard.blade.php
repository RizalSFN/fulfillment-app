@extends('layouts.main')

@section('container')
    <h3 class="mt-2">Dashboard</h3>
    <label>Laravel > {{ $title }}</label>
    <hr class="bg-secondary">
    <div class="row mt-4">
        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                user</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Jumlah User</div>
                        </div>
                        <div class="col-auto">
                            <label class="fs-2 px-3">29</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Product</div>
                            <div class="h5 mb-0 font-weight-bold text-success">Ready</div>
                        </div>
                        <div class="col-auto">
                            <label class="fs-2 px-3">57</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Product</div>
                            <div class="h5 mb-0 font-weight-bold text-danger">Unready</div>
                        </div>
                        <div class="col-auto">
                            <label class="fs-2 px-3">46</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
