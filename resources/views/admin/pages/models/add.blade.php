@extends('admin.app')
@section('title' , 'Add model')
@section('breadcrumb' , 'Add model')
@section('content')
<div class="card-body">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card">
            <div class="">
              <div class="card-header">Manage models</div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.models.store')}}" method="post">
              @csrf
              <div class="card-body">
                <div class="row">
                <div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">Class Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name" name="description">
                </div>
                                    <div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">price</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="price" name="price">
                </div>
                                    <div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">materials</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name" name="materials">
                </div>
                                    <div class="form-group col-sm-6">
                  <label for="exampleInputEmail1">accessories</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="accessories" name="accessories">
                </div>

                <div class="form-group col-sm-6">
                  <label for="exampleInputEmail2">colors</label>
                  <input type="number" class="form-control" id="exampleInputEmail2" placeholder="colors" name="colors">
                </div>

                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail2">images</label>
                        <input type="number" class="form-control" id="exampleInputEmail2" placeholder="images" name="image">
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
