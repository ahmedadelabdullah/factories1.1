@extends('admin.app')
@section('title' , 'Models')
@section('breadcrumb' , 'Models')
@section('content')
    <div class="container-fluid">
        <div class="card">
<div class="d-flex justify-content-between">
    <div class="card-header float-left">Manage Customers</div>
    <div class="card-header float-right"><a class="btn btn-primary" href="{{route('admin.models.create')}}"> Add New model</a></div>
</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th style="width: 250px">description</th>
                        <th>price</th>
                        <th>materials</th>
                        <th>accessories</th>
                        <th>colors</th>
                        <th>images</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($models as $model)

                    <tr>
                        <td>{{$model->id}}</td>
                        <td>{{$model->description}}</td>
                        <td>{{$model->price}}</td>
                        <td>{{$model->materials}}</td>
                        <td>{{$model->accessories}}</td>
                        <td>{{$model->colors}}</td>
                        <td>{{$model->image}}</td>
                        <td>
                            <a class="btn btn-outline-info" href="{{route('admin.models.show' , $model->id) }}">Show</a>
                            <a class="btn btn-secondary" href="{{route('admin.models.edit' , $model->id) }}">Edit</a>
                            <form class="d-inline-block" action="{{route('admin.models.destroy' , $model)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$models->links()}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
