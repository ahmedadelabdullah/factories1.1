@extends('admin.app')
@section('title' , 'Add Account')
@section('breadcrumb' , 'Add Account')
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
              <div class="card-header">Manage Accounts</div>
              <div class="card-header"><a class="btn btn-primary" href="{{route('admin.accounts.create')}}"> Add New Account</a></div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.accounts.store')}}" method="post">
              @csrf
              <div class="card-body">
                <div class="row">
                <div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name" name="name">
                </div>
                <div class="form-group col-sm-6">
                  <label for="exampleInputEmail2">current balance</label>
                  <input type="number" class="form-control" id="exampleInputEmail2" placeholder="current balance" name="current_balance">
                </div>

                  <div class="form-group col-sm-6">
                    <label for="exampleInputEmail3">Account Status</label>
                    <select class="form-control" id="exampleInputEmail3" name="start_balance_status">
                      <option value="">select one</option>
                      <option value="creditor">creditor</option>
                      <option value="debtor">debtor</option>
                      <option value="balanced">balanced</option>
                    </select>
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