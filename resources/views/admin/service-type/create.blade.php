@extends('admin.layout.master')
@section('title','Create Service Type')
@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <form action="{{ route('admin.service-type.store') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="card-header"><strong>Service Type Form</strong></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="company">Service Type</label>
                                    <input name="type_name" class="form-control" id="type_name" type="text"
                                           placeholder="Enter service type name">
                                    @error('type_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
