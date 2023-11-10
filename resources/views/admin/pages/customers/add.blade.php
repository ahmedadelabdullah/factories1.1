@extends('admin.app')
@section('title' , 'Add customer')
@section('breadcrumb' , 'Add customer')
@section('content')
<div class="card-body">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card">
            <div class="d-flex justify-content-between">
              <div class="card-header">Manage customers</div>
              <div class="card-header"><a class="btn btn-primary" href="{{route('admin.customers.create')}}"> Add New customer</a></div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.customers.store')}}" method="post">
              @csrf
              <div class="card-body">
                <div class="row">
                <div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name" name="name">
                </div>

               <div class="form-group col-sm-6">
                  <label for="exampleInputEmail2">phone</label>
                  <input type="text" class="form-control" id="exampleInputEmail2" placeholder="phone" name="phone">
                </div>

                  <div class="form-group col-sm-6">
                  <label for="exampleInputEmail3">address</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" placeholder="address" name="address">
                </div>

                  <div class="form-group col-sm-6">
                  <label for="exampleInputEmail4">initial_balance_status</label>
{{--                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="initial balance status" name="initial_balance_status">--}}
           <select class="form-control" name="initial_balance_status" id="exampleInputEmail4">
             <option value="balanced">balanced</option>
             <option value="creditor">creditor</option>
             <option value="debitor">debitor</option>
           </select>
                </div>

                  <div class="form-group col-sm-6">
                  <label for="exampleInputEmail5">initial balance</label>
                  <input type="number" class="form-control" id="exampleInputEmail5" placeholder="initial balance" name="initial_balance">
                </div>

                <div class="form-group col-sm-6">
                  <label for="exampleInputEmail6">current balance</label>
                  <input type="number" class="form-control" id="exampleInputEmail6" placeholder="current balance" name="current_balance">
                </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->


        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
</div>

@endsection