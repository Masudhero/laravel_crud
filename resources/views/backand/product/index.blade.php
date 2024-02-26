@extends('layouts.backand')
@section('content')
<div class="card-header">
    <h4 class="card-title mb-0 d-flex justify-content-between">Product List
        <a href="{{ route('product.create') }}" class="btn btn-sm btn-outline-primary ">Add New</a>
    </h4>
</div>
<div class="card-body">
<table class="table table-sm table-striped table-hover table-bordered">
    <thead>
        <th>SL</th>
        <th>Brand</th>
        <th>Categury</th>
        <th>Product Name</th>
        <th>Product Code</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Feature Image</th>
        <th>Action</th>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    </tbody>
</table>
</div>
@endsection
