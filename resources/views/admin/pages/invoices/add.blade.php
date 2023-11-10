@extends('admin.app')
@section('breadcrumb' , 'Add an invoice')
@section('title' , 'Add an invoice')
@section('content')
    <section class="content">
      <div class="container-fluid">
{{--        @dd('original view') --}}
          <livewire:admin.customer-invoices/>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
