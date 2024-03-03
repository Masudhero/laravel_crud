@extends('layouts.backand')
@section('content')
<div class="card-header">
    <h4 class="card-title mb-0 d-flex justify-content-between">Brand List
        <a href="{{ route('brand.create') }}" class="btn btn-sm btn-outline-primary ">Add New</a>
    </h4>
</div>
<div class="card-body">
<table class="table table-sm table-striped table-hover table-bordered">
    <thead>
        <th>SL</th>
        <th>Brand</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
    <tbody>
        @forelse ($brand as $value )
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{ $value->name }}</td>
            <td>
                @if($value->status==1)
                <span class="badge bg-success">Published</span>
                @else
                <span class="badge bg-danger">Pandding</span>
                @endif
            </td>
            <td>
                <div class="d-flex align-aitems-center">
                    <a href="{{ route('brand.edit',$value->id) }}" class="btn btn-sm btn-info me-1">Edit</a>
                    <a href="" class="btn brn-sm btn-danger">Delete</a>
                </div>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="4" class="text-danger">No data found</td>
            </tr>
        @endforelse
    </tbody>
</table>
</div>
@endsection
