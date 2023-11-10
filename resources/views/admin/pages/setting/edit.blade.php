@extends('admin.app')
@section('title' , 'Add Account')
@section('breadcrumb' , 'Edit Account')
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
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.accounts.update' , $account_edit)}}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="row">
                <div class="form-group col-sm-12">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" value="{{$account_edit->name}}" id="exampleInputEmail1" placeholder="name" name="name">
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