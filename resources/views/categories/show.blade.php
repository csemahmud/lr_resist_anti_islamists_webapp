@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $category->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                </div>

                <div class="card-header">{{ $category->description }}</div>

                <span>Publication Status ::</span>
                @if ($category->ct_publication_status == 1)
                    <div class="alert alert-success" role="alert">
                        Published
                    </div>
                @elseif ($category->ct_publication_status == 0)
                    <div class="alert alert-danger" role="alert">
                        Unpublished
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
