@extends('layouts.backand')
@section('content')
<div class="card-header">
    <h4 class="card-title mb-0 d-flex justify-content-between">Edit Categury
        <a href="{{ route('categury.index') }}" class="btn btn-sm btn-outline-danger">Back</a>
    </h4>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-12 mx-auto">
            {{-- //alert include --}}
            @include('backand.include.alert')

            <form action="{{ route('categury.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="md-3">
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" name="category_name" value="{{ $category->name }}" id ="category_name" class="form-control">
                </div>
                @error('category_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="md-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Pandding</option>
                        <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Published</option>
                    </select>
                    @error('category_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="text-end py-1">
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
