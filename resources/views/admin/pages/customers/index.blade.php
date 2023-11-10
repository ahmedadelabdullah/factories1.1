@extends('admin.app')
@section('title' , 'customers')
@section('breadcrumb' , 'customers')
@section('content')
    <div class="container-fluid">
        <div class="card">
<div class="d-flex justify-content-between">
    <div class="card-header float-left">Manage Customers</div>
    <div class="card-header float-right"><a class="btn btn-primary" href="{{route('admin.customers.create')}}"> Add New customer</a></div>
</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>name</th>
                        <th>current_balance</th>
                        <th>IS Active</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)

                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->current_balance}}</td>
                        <td>{{$customer->active}}</td>
                        <td>
                            <a class="btn btn-outline-info" href="{{route('admin.customers.show' , $customer->id) }}">Show</a>
                            <a class="btn btn-secondary" href="{{route('admin.customers.edit' , $customer->id) }}">Edit</a>
                            <form class="d-inline-block" action="{{route('admin.customers.destroy' , $customer)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$customers->links()}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
