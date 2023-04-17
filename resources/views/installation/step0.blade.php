@extends('layouts.blank')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="text-center">
                    <a href="{{ route('step1') }}" class="btn btn-info text-light">
                        Ready ? Then start <i class="fa fa-forward"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
