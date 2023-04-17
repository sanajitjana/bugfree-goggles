@extends('layouts.blank')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-12">
                @if (session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="mar-ver pad-btm text-center">

                </div>
                <div class="text-muted font-13">
                    <form method="POST" action="{{ route('purchase.code') }}">
                        @csrf
                        <div class="text-center">
                            <button type="submit" class="btn btn-info">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
