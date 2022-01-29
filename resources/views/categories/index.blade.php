@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>

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
                    <table>
                            <tr>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                {{ link_to_route('category.show', $category->name, [$category->id]) }}
                                </td>
                                <td>
                                {!! Form::open(array('route' => ['category.destroy', $category->id], 'method' => 'DELETE')) !!}
                                    {{ link_to_route('category.edit', 'Edit', [$category->id], ['class' => 'brn btn-primary']) }}
                                    |
                                    {!! Form::button('Delete', ['type'=>'submit', 'class'=>'btn btn-danger']) !!} 
                                </td>
                                {!! Form::close() !!}
                            </tr>
                        @endforeach
                    </table>
                    {{ link_to_route('category.create', 'Add New Category', null, ['class' => 'brn btn-success']) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
