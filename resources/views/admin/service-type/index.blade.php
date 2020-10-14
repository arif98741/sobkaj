@extends('admin.layout.master')
@section('title','Service Types')
@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
            @endif @if(Session::has('error'))
                <div class="alert alert-success" role="alert">{{ Session::get('error') }}</div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><i class="fa fa-align-justify"></i>Service Type List</div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-bordered table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Service Name</th>
                                    <th>Created On</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $service_types as $key=>$service_type)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $service_type->type_name }}</td>
                                        <td>{{ date('d-m-Y',strtotime($service_type->created_at)) }}</td>

                                        <td>
                                            @if($service_type->status==1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-warning">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.service-type.edit',$service_type->id) }}"
                                               class="btn btn-primary"><i class="c-icon cil-pencil"></i></a>
{{--                                            <a href="{{ route('admin.service-type.destroy',$service_type->id) }}"--}}
{{--                                               class="btn btn-warning"><i class="c-icon cil-trash"></i></a>--}}

                                            <a class="btn btn-warning" href="{{ route('admin.service-type.destroy',$service_type->id) }}"
                                               onclick="event.preventDefault();document.getElementById('vendor-delete-form{{ $service_type->id }}').submit();">
                                                <i class="c-icon cil-trash"></i>
                                            </a>
                                            <form id="vendor-delete-form{{ $service_type->id }}"
                                                  onclick="return(confirm('are you sure to delete?'))"
                                                  action="{{ route('admin.service-type.destroy',$service_type->id) }}"
                                                  method="post" style="display: none;">
                                                {{ csrf_field() }} @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <nav>
                                {{ $service_types->links() }}

                            </nav>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
        </div>
    </div>

    @push('extra-css')
        @toastr_css('2.1.4')
    @endpush

    @push('extra-js')
        @jquery('3.2.1')
        @toastr_js('2.1.4')
        <script>
            $(document).ready(function () {

            });
        </script>
    @endpush
@endsection
