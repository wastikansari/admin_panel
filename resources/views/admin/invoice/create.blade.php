@extends('layouts.admin_app')

@section('content')
<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Create Invoice
    </h3>
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav>
</div>
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{route('admin.generateInvoice')}}">
            @csrf
            @method('POST')

            <div class="row">
                <div class="col-12">
                    <label for="" class="mb-1">Customer Name :</label>
                    <input type="text" name="customer_name" class="form-control" placeholder="Customer Name" />
                </div>

                <div class="col-12 mt-3">
                    <label for="" class="mb-1">Customer Address :</label>
                    <textarea name="customer_address" class="form-control" id="" rows="5"></textarea>
                </div>

                <div class="col-4 mt-3">
                    <label for="" class="mb-1">Invoice No. :</label>
                    <input type="text" class="form-control" name="invoice_no" placeholder="Invoice Number" />
                </div>
                <div class="col-4 mt-3">
                    <label for="" class="mb-1">Date :</label>
                    <input type="date" class="form-control" name="date" />
                </div>
                <div class="col-4 mt-3">
                    <label for="" class="mb-1">Discount :</label>
                    <input type="number" class="form-control" name="discount" placeholder="Discount" value="0" />
                </div>
            </div>

            <div class="row mt-3 border border-secondary py-3">
                <div class="col-8">
                    <h4 class="mb-4">Add Items</h4>
                </div>
                <div class="col-4">
                        <button type="button" class="btn btn-primary add_item">+ Add Item</button>
                </div>
                <div class="col-md-12 item_main">
                    <div class="row item">
                        <div class="col-3 mt-3">
                            <label for="" class="mb-1">Product :</label>
                            <input type="text" name="product_name[]" class="form-control" placeholder="Product Name" />
                        </div>
                        <div class="col-3 mt-3">
                            <label for="" class="mb-1">Quantity :</label>
                            <input type="number" class="form-control" name="quantity[]" placeholder="Quantity" />
                        </div>
                        <div class="col-3 mt-3">
                            <label for="" class="mb-1">Price :</label>
                            <input type="number" class="form-control" name="price[]" placeholder="Price" />
                        </div>
                        <div class="col-3 mt-3 pt-4">
                            <button class="btn btn-danger btn-sm remove_item" type="button"><i class="mdi mdi-close"></i></button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Generate Invoice</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('after-js')
<script>
    $('.add_item').click(function() {
        $('.item_main').append('<div class="row item"><div class="col-3 mt-3"><label for="" class="mb-1">Product :</label><input type="text" name="product_name[]" class="form-control" placeholder="Product Name" /></div><div class="col-3 mt-3"><label for="" class="mb-1">Quantity :</label><input type="number" class="form-control" name="quantity[]" placeholder="Quantity" /></div><div class="col-3 mt-3"><label for="" class="mb-1">Price :</label><input type="number" class="form-control" name="price[]" placeholder="Price" /></div><div class="col-3 mt-3 pt-4"><button class="btn btn-danger btn-sm remove_item" type="button"><i class="mdi mdi-close"></i></button></div></div>');
    })

    $(document).on('click', '.remove_item', function() {
        $(this).closest('.item').remove();
    });
</script>
@endsection
