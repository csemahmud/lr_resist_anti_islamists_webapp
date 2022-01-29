@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Category</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Create Category
                    {!! Form::open(array('route' => 'category.store')) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Enter Name :: ') !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', 'Enter Description :: ') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('ct_publication_status', 'Select Publiction Status :: ') !!}
                            {!! Form::radio('ct_publication_status', 1, true) !!}
                            {!! Form::label('ct_publication_status', 'Published') !!}
                            {!! Form::radio('ct_publication_status', 0) !!}
                            {!! Form::label('ct_publication_status', 'Unpublished') !!}
                        </div>

                        <div class="form-group">
                            {!! Form::button('Create', ['type'=>'submit', 'class'=>'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}

                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
