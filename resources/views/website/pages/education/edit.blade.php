@extends('layouts.master-layouts')
@section('title')
    Users
@endsection
@section('css')
    {{-- CSS --}}
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Users
        @endslot
        @slot('title')
            Users
        @endslot
        @slot('subtitle')
            Edit User
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xxl-6">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Edit User Data</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    {{-- <p class="text-muted">Please fill form for user data.</p> --}}
                    <form action="{{ route('users.update', $user) }}" class="needs-validation" method="POST" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-lg-3 ">
                                <label for="nameInput" class="form-label">Name</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text"
                                    class="form-control @error('name') is-invalid
                                @enderror"
                                    id="nameInput" placeholder="Enter your name" value="{{ old('name', $user->name) }}"
                                    name="name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="emailInput" class="form-label">Email</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="email"
                                    class="form-control @error('email') is-invalid
                                @enderror"
                                    id="emailInput" placeholder="Enter your email" value="{{ old('email', $user->email) }}"
                                    name="email" readonly>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="phoneNumber" placeholder="+62 xxxxxxxxxx"
                                    name="phone" value="{{ old('phone', $user->phone) }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="role" class="form-label">Role</label>
                            </div>
                            <div class="col-lg-9">
                                <!-- Radio toggle buttons   -->
                                <div class="button-group">
                                    <div class="hstack gap-3 flex-wrap w-100">
                                        <input type="radio" class="btn-check" name="role" id="option1" value="admin"
                                            {{ $user->role == 'admin' ? 'checked' : '' }}>
                                        <label class="btn btn-outline-secondary flex-grow-1" for="option1">Admin</label>
                                        <input type="radio" class="btn-check" name="role" id="option2" value="dosen"
                                            {{ $user->role == 'dosen' ? 'checked' : '' }}>
                                        <label class="btn btn-outline-secondary flex-grow-1" for="option2">Dosen</label>
                                        <input type="radio" class="btn-check" name="role" id="option3"
                                            value="mahasiswa" {{ $user->role == 'mahasiswa' ? 'checked' : '' }}>
                                        <label class="btn btn-outline-secondary flex-grow-1"
                                            for="option3">Mahasiswa</label>
                                    </div>
                                    @error('role')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <label for="addressInput" class="form-label">Address</label>
                            </div>
                            <div class="col-lg-9">
                                <textarea class="form-control" id="addressInput" rows="3" placeholder="Enter your address" name="address">{{ $user->address ?? old('address') }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3 ">
                                <label for="cityInput" class="form-label">City</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text" class="form-control " id="cityInput" placeholder="Enter your city"
                                    name="city" value="{{ old('city', $user->city) }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3 ">
                                <label for="stateInput" class="form-label">State</label>
                            </div>
                            <div class="col-lg-9 position-relative">
                                <input type="text" class="form-control " id="cityInput" placeholder="Enter your state"
                                    name="state" value="{{ old('state', $user->state) }}">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-2">Submit</button>
                            <a href="{{ route('users.index') }}"
                                class="btn btn-danger waves-effect waves-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

    @section('script')
        {{-- JS --}}
        {{-- <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/password-addon.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script> --}}

        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>
        <script src="{{ asset('assets/js/pages/form-validation.init.js') }}"></script>

        <script>
            document.getElementById('password-addon').addEventListener('click', function() {
                var password = document.getElementById("passwordInput");

                if (password.type === "password") {
                    password.type = "text";
                } else {
                    password.type = "password";
                }
            });
        </script>
    @endsection
