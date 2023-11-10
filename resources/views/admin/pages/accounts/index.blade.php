@extends('admin.app')
@section('title' , 'Accounts')
@section('breadcrumb' , 'Accounts')
@section('content')
    <div class="container-fluid">
        <div class="card">
<div class="d-flex justify-content-between">
    <div class="card-header float-left">Manage Customers</div>
    <div class="card-header float-right"><a class="btn btn-primary" href="{{route('admin.accounts.create')}}"> Add New Account</a></div>
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
                    @foreach($accounts as $account)

                    <tr>
                        <td>{{$account->id}}</td>
                        <td>{{$account->name}}</td>
                        <td>{{$account->current_balance}}</td>
                        <td>{{$account->active}}</td>
                        <td>
                            <a class="btn btn-outline-info" href="{{route('admin.accounts.show' , $account->id) }}">Show</a>
                            <a class="btn btn-secondary" href="{{route('admin.accounts.edit' , $account->id) }}">Edit</a>
                            <form class="d-inline-block" action="{{route('admin.accounts.destroy' , $account)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$accounts->links()}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
