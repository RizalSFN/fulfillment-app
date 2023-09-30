@extends('layouts.common')

@section('content')
    <main>
        <div class="container pt-5">
            <div class="row align-items-center justify-content-center pt-5">
                <div class="col-lg-5">
                    <div class="card shadow-lg border rounded-lg">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="pb-4" method="POST" action="{{ route('login') }}">
                                @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="username" name="username" type="text"
                                        placeholder="username" required autofocus />
                                    <label for="inputEmail">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPassword" type="password" name="password"
                                        placeholder="Password" required />
                                    <label for="inputPassword">Password</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="password.html">Forgot Password?</a>
                                    <input type="submit" name="submit" value="Login" class="btn btn-primary col-sm-4" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <label class="d-flex justify-content-center mt-2">Made with <i
                            class="bi bi-heart-fill mx-1 text-danger"></i> by
                        Fulfillment</label>
                </div>
            </div>
        </div>
    </main>
@endsection
