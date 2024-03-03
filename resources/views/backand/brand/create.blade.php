@extends('layouts.backand')
@section('content')
<div class="card-header">
    <h4 class="card-title mb-0 d-flex justify-content-between">New Brand
        <a href="{{ route('brand.index') }}" class="btn btn-sm btn-outline-danger">Back</a>
    </h4>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-12 mx-auto">
            {{-- //alert include --}}
            @include('backand.include.alert')
            <form action="{{ route('brand.store') }}" method="POST">
                @csrf
                <div class="md-3">
                    <label for="brand_name" class="form-label">Brand Name</label>
                    <input type="text" name="brand_name" id="brand_name" class="form-control">
                </div>
                @error('brand_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="md-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="0">Pandding</option>
                        <option value="1">Published</option>
                    </select>
                    @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="text-end py-1">
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
