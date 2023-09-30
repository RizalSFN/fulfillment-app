@extends('layouts.common')

@section('content')
    @include('partials.navbar')
    <div id="layoutSidenav">
        @include('partials.sidebar')
        <div id="layoutSidenav_content" style="background-color: rgb(244, 244, 244);">
            <main>
                <div class="container-fluid px-4">
                    @yield('container')
                </div>
            </main>
        </div>
    </div>
@endsection
