@extends('admin.layout.master')
@section('title','Edit Service Type')
@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <form action="{{ route('admin.service-type.update',$service_type->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="card-header"><strong>Edit Service Type</strong></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="company">Service Type</label>
                                    <input name="type_name" value="{{ $service_type->type_name }}" class="form-control" id="type_name" type="text"
                                           placeholder="Enter service type name">
                                    @error('type_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
