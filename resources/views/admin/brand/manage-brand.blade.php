@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Brand Form</h4>
                </div>
                <hr/>
                <div class="panel-body">
                    <h3 class="text-center text-success" id="x">{{ Session::get('message') }}</h3>
                    <table class="table table-bordered">
                        <tr class="bg-success">
                            <th>Sl No</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td>{{ $brand->brand_description }}</td>
                                <td>{{ $brand->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($brand->publication_status == 1)
                                        <a href="#" class="btn btn-warning btn-xs">
                                            Unpublish</span>
                                        </a>
                                    @else
                                        <a href="#" class="btn btn-info btn-xs">
                                            Publish</span>
                                        </a>
                                    @endif
                                    <a href="#" class="btn btn-success btn-xs">
                                        Edit</span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-xs">
                                        Delete</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
