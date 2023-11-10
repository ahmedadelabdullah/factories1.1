@extends('admin.app')
@section('title' , 'invoices')
@section('breadcrumb' , 'invoices')
@section('content')
    <div class="container-fluid">
        <div class="card">
<div class="d-flex justify-content-between">
    <div class="card-header float-left">Manage Invoices</div>
    <div class="card-header float-right"><a class="btn btn-primary" href="{{route('admin.invoices.create')}}"> Add New Invoice</a></div>
</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>invoice number</th>
                        <th>date</th>
                        <th>customer</th>
                        <th>models</th>
                        <th>total</th>
                        <th>actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($invoices as $invoice)

                    <tr>
                        <td>{{$invoice->id}}</td>
                        <td>{{$invoice->invoice_number}}</td>
                        <td>{{$invoice->date}}</td>
                        <td>{{$invoice->customer->name}}</td>
                        <td>{{$invoice->n_o_models}}</td>
                        <td>{{$invoice->total}}</td>
                        <td>
                            <a class="btn btn-outline-info" href="{{route('admin.invoices.show' , $invoice->id) }}">Show</a>
                            <a class="btn btn-secondary" href="{{route('admin.accounts.edit' , $invoice->id) }}">Edit</a>
                            <form class="d-inline-block" action="{{route('admin.accounts.destroy' , $invoice)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$invoices->links()}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
