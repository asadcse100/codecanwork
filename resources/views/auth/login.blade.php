@extends('admin.default.layouts.blank')

@section('content')
<div class="auth-container d-flex">

    <div class="container mx-auto align-self-center">

        <div class="row">

            <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                <div class="card mt-3 mb-3">
                    <div class="card-body">

                        <form method="POST" action="{{ route('login') }}" class="needs-validation">
                            @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">

                                <h2>Sign In</h2>
                                <p>Enter your email and password to login</p>

                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" required>
                                    @error('email')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4">
                                    <label class="form-label ">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="********" name="password" required>
                                    @error('password')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                                </div>
                            </div>

                            <div class="col-12 ">
                                <a href="{{ route('password.request') }}" class="text-secondary">
                                    Forgot Password ?
                                </a><br><br>
                                <div class="mb-4 col text-center">
                                    <button type="submit" class="btn btn-outline-info">SIGN IN</button>
                                </div>
                            </div>


                        </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection

