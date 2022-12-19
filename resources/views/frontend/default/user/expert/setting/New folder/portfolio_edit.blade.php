@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <div class="info">
                            <h6 class="">Edit Portfolio</h6>
                            <hr>
                            <form class="section general-info"
                                action="{{ route('user_profile.portfolio_update', $user_portfolio->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="card">
                                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                                <div class="row gutters-10">
                                                    <div class="col-md-6 mt-3">
                                                        <label>Title</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="portfolio_name"
                                                                value="{{ $user_portfolio->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label>Category</label>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                name="portfolio_category"
                                                                value="{{ $user_portfolio->type }}"
                                                                placeholder="Portfolio category">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="form-label">Details</label>
                                                        <textarea class="form-control" rows="3" name="portfolio_details" required>{{ $user_portfolio->description }}</textarea>
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"
                                                                id="inputGroup-sizing-sm">Portfolio
                                                                Image</span>

                                                            <img src="{{ asset('profile/portfolios/' . $user_portfolio->photo) }}"
                                                                class="img-thumbnail" width="60" />
                                                            <input class="form-control" type="file"
                                                                value="@if (!empty($user_portfolio->photo)) {{ $user_portfolio->photo }} @endif"
                                                                name="portfolio_img">

                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-md-6 mt-3">
                                                        <label class="form-label">Portfolio Image</label>
                                                        <input type="file" class="form-control" type="file"
                                                            name="portfolio_img" aria-label="Sizing example input"
                                                            aria-describedby="inputGroup"
                                                            value="{{ $user_portfolio->photo }}">
                                                    </div> --}}



                                                    <div class="col-md-12 mt-1 mb-3">
                                                        <div class="form-group text-end">
                                                            <button class="btn btn-success">Update
                                                                Portfolio</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
        </div>
    @endsection
