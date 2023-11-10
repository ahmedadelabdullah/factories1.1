
{{--<div>--}}
{{--@dd('livewire view');--}}
{{--    <form action="{{route('admin.invoices.store')}}" method="post">--}}
{{--    <form action="{{route('admin.invoices.store')}}" method="post">--}}
{{--        @csrf--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="invoice p-3 mb-3">--}}
{{--                    <!-- title row -->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <h4>--}}
{{--                                <i class="fas fa-globe"></i> AdminLTE, Inc.--}}
{{--                                <small class="float-right">Date: {{date('d.m.Y')}}</small>--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                        <!-- /.col -->--}}
{{--                    </div>--}}
{{--                    <!-- info row -->--}}
{{--                    <div class="row invoice-info">--}}
{{--                        <div class="col-sm-3 invoice-col">--}}
{{--                            From--}}
{{--                            <address>--}}
{{--                                <strong>Admin, Inc.</strong><br>--}}
{{--                                795 Folsom Ave, Suite 600<br>--}}
{{--                                San Francisco, CA 94107<br>--}}
{{--                                Phone: (804) 123-5432<br>--}}
{{--                            </address>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-3 invoice-col">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    To--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <select class="form-control" name="customer_id">--}}
{{--                                        <option>select</option>--}}
{{--                                        @foreach($customers as $customer)--}}
{{--                                            <option value="{{$customer->id}}">{{$customer->name}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                    <address>--}}
{{--                                        795 Folsom Ave, Suite 600<br>--}}
{{--                                        San Francisco, CA 94107<br>--}}
{{--                                        Phone: (804) 123-5432<br>--}}
{{--                                    </address>--}}
{{--                                </div>--}}
{{--                                <br>--}}
{{--                                <br>--}}

{{--                            </div>--}}

{{--                            <br>--}}
{{--                            <br>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-3 invoice-col">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    Models--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <input type="number" class="form-control" value="2" name="n_o_models" readonly>--}}
{{--                                </div>--}}
{{--                                <br>--}}
{{--                                <br>--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    Models--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <input type="number" class="form-control" value="2" readonly>--}}
{{--                                </div>--}}
{{--                                <br>--}}
{{--                                <br>--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    Pieces--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <input type="number" class="form-control" value="10" readonly>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <br>--}}
{{--                            <br>--}}
{{--                        </div>--}}

{{--                        <div class="col-sm-3 invoice-col">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    Date--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <input type="date" class="form-control" name="date">--}}
{{--                                </div>--}}
{{--                                <br>--}}
{{--                                <br>--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    Invc #--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <input type="text" class="form-control" name="invoice_number" value="2250">--}}
{{--                                </div>--}}

{{--                                <br>--}}
{{--                                <br>--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    Sale--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-9">--}}
{{--                                    <input type="number" class="form-control" name="sale_for_one" value="5">--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <br>--}}
{{--                            <br>--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <br>--}}
{{--                    </div>--}}
{{--                    <!-- /.col -->--}}
{{--                </div>--}}
{{--                <!-- /.row -->--}}

{{--                <!-- Table row -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 table-responsive">--}}
{{--                        <table class="table table-striped">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>#</th>--}}
{{--                                <th>Qty</th>--}}
{{--                                <th>Price</th>--}}
{{--                                <th>Description</th>--}}
{{--                                <th>Subtotal</th>--}}
{{--                                <th>Actions</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>1</td>--}}
{{--                                <td style="width: 100px"><input type="number" class="form-control"></td>--}}
{{--                                <td style="width: 100px"><input type="number" class="form-control"></td>--}}
{{--                                <td><input type="number" class="form-control"></td>--}}
{{--                                <td><input type="number" class="form-control" readonly></td>--}}
{{--                                <td>--}}
{{--                                    <button class="btn btn-secondary">Edit</button>--}}
{{--                                    <button class="btn btn-danger">remove</button>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>1</td>--}}
{{--                                <td><input type="number" class="form-control"></td>--}}
{{--                                <td><input type="number" class="form-control"></td>--}}
{{--                                <td><input type="number" class="form-control"></td>--}}
{{--                                <td><input type="number" class="form-control" readonly></td>--}}
{{--                                <td>--}}
{{--                                    <button class="btn btn-secondary">Edit</button>--}}
{{--                                    <button class="btn btn-danger">remove</button>--}}
{{--                                </td>--}}
{{--                            </tr>--}}



{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                    <!-- /.col -->--}}
{{--                </div>--}}
{{--                <!-- /.row -->--}}

{{--                <div class="row">--}}
{{--                    <!-- accepted payments column -->--}}
{{--                    <div class="col-6">--}}
{{--                    </div>--}}
{{--                    <!-- /.col -->--}}
{{--                    <div class="col-6">--}}
{{--                        <p class="lead">Amount Due 2/22/2014</p>--}}

{{--                        <div class="table-responsive">--}}
{{--                            <table class="table">--}}
{{--                                <tr>--}}
{{--                                    <th style="width:25%">Subtotal:</th>--}}
{{--                                    <td><input type="text" class="form-control" readonly></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <th>Total:</th>--}}
{{--                                    <td><input type="text" name="total" value="30900" class="form-control" readonly></td>--}}
{{--                                </tr>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.col -->--}}
{{--                </div>--}}
{{--                <!-- /.row -->--}}

{{--                <!-- this row will not appear when printing -->--}}
{{--                <div class="row no-print">--}}
{{--                    <div class="col-12">--}}
{{--                        <button type="button" class="btn btn-success float-right m-2"><i class="far fa-credit-card"></i> Reset</button>--}}

{{--                        <button type="button" class="btn btn-success float-right m-2" ><i class="far fa-credit-card"></i> Submit And New One</button>--}}
{{--                        <button type="submit" class="btn btn-success float-right m-2" ><i class="far fa-credit-card"></i> Submit</button>--}}

{{--                        <br>--}}
{{--                        <br>--}}
{{--                        <br>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- /.invoice -->--}}
{{--        </div><!-- /.col -->--}}
{{--    </form>--}}
{{--</div>--}}




<div>
{{--    @dd('livewire view');--}}
    {{--    <form action="{{route('admin.invoices.store')}}" method="post">--}}
    <form action="{{route('admin.invoices.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                <i class="fas fa-globe"></i>
                                <small class="float-right">Date: {{date('d.m.Y')}}</small>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-3 invoice-col">
                            From
                            <address>
                                <strong>Admin, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                Phone: (804) 123-5432<br>
                            </address>
                        </div>
                        <div class="col-sm-3 invoice-col">
                            <div class="row">
                                <div class="col-sm-3">
                                    To
                                </div>
                                <div class="col-sm-9">
                                    <select class="form-control" name="customer_id">
                                        <option>select</option>
                                        @foreach($customers as $customer)
                                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                                        @endforeach
                                    </select>
                                    <address>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        Phone: (804) 123-5432<br>
                                    </address>
                                </div>
                                <br>
                                <br>

                            </div>

                            <br>
                            <br>
                        </div>
                        <div class="col-sm-3 invoice-col">
                            <div class="row">
                                <div class="col-sm-3">
                                    Models
                                </div>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" value="2" name="n_o_models" readonly>
                                </div>
                                <br>
                                <br>
                                <div class="col-sm-3">
                                    Models
                                </div>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" value="2" readonly>
                                </div>
                                <br>
                                <br>
                                <div class="col-sm-3">
                                    Pieces
                                </div>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" value="10" readonly>
                                </div>
                            </div>

                            <br>
                            <br>
                        </div>

                        <div class="col-sm-3 invoice-col">
                            <div class="row">
                                <div class="col-sm-3">
                                    Date
                                </div>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="date">
                                </div>
                                <br>
                                <br>
                                <div class="col-sm-3">
                                    Invc #
                                </div>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="invoice_number" value="2250">
                                </div>

                                <br>
                                <br>
                                <div class="col-sm-3">
                                    Sale
                                </div>
                                <div class="col-sm-9">
                                    <input  type="number" class="form-control" name="sale_for_one" value="5">
                                </div>

                            </div>
                            <br>
                            <br>
                        </div>
                        <br>
                        <br>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->

                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Subtotal</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody >
{{--                            {{$test}}--}}
                            @foreach($invoice_models as $index => $invoice_model)
                                    <td> {{ $index + 1 }} </td>
                                    <td  wir:key="quantity-{{$index}}" style="width: 100px">
                                        <input  wire:keydown = "count({{$index}})" wire:model.live="inputs.{{$index}}.quantity" type="number"  name="quantity[]" class="form-control">
                                    </td>
                                    <td wir:key="price-{{$index}}" style="width: 100px">
                                        <input  wire:keydown = "count({{$index}})" wire:model.live="inputs.{{$index}}.price"  type="number"  name="price[]" class="form-control"  >
                                    </td>
                                    <td wir:key="description-{{$index}}" style="width: 300px">
                                        <select name="description[]" class="form-control" >
                                            <option value="">choose one .....</option>

                                        @foreach($models as $model)
                                            <option value="{{$model->description}}">{{$model->description}}</option>
                                            @endforeach </select>
                                    </td>
                                    <td wir:key="sub_total-{{$index}}"><input type="number" wire:model="inputs.{{$index}}.sub_total"  value="{{$sub_total}}[index]" name="sub_total[]" class="form-control" readonly></td>
                                    <td wir:key="delete-{{$index}}" wire:click.prevent="deleteModel({{$index}})">
                                        <a href = "#" class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-6">

                    </div>
                    <div class="col-6">
                        <button wire:click.prevent = "addModel" class="btn btn-primary m-2">Add new Model</button>
                    </div>
                    <div class="col-6">

                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:25%">Subtotal:</th>
                                    <td><input type="text" class="form-control" readonly></td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td><input type="text" name="total" value="30900" class="form-control" readonly></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-12">
                        <button type="button" class="btn btn-success float-right m-2"><i class="far fa-credit-card"></i> Reset</button>

                        <button type="button" class="btn btn-success float-right m-2" ><i class="far fa-credit-card"></i> Submit And New One</button>
                        <button type="submit"  class="btn btn-success float-right m-2" ><i class="far fa-credit-card"></i> Submit
{{--                        <div wire:loaing class="spinner-border spinner-border-sm"></div>--}}
                        </button>

                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <!-- /.invoice -->
        </div><!-- /.col -->
    </form>
</div>
