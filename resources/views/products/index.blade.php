@extends('dashboard.master')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <a href="{{ route('products.create') }}" class="btn btn-success" style="margin-left: 900px; ">Add Product</a>

                        </div>
                        <p class="card-title">Products Table</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="example" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Details</th>
                                                <th>Actions</th>

                                            </tr>

                                            @foreach($products as $product)
                                            <tr>
                                                <td>{{ $product -> name }}</td>
                                                <td>{{ $product -> Price }}</td>
                                                <td>{{ $product -> Details }}</td>
                                                <td>

                                                    <a href="{{ route('products.edit' , $product->id') }}" class="btn btn-warning"><i class="mdi mdi-grease-pencil"></i></a>

                                                    <form action="{{ route('products.destroy',$product->id) }}" method="post" style="display: inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class=" btn btn-danger"><i class="mdi mdi-delete-forever"></i></button>
                                                    </form>
                                                </td>

                                            </tr>
                                            @endforeach

                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
        </div>
    </footer>
    <!-- partial -->
</div>
@endsection