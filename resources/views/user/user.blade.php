@extends('control_panel.master')

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <p class="card-title">User Table</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="example" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>Actions</th>

                                            </tr>

                                            @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user -> name }}</td>
                                                <td>{{ $user -> email }}</td>
                                                <td>{{ $user -> phone }}</td>
                                                <td>


                                                    <form action="{{ route('users.destroy',$user->id) }}" method="post" style="display: inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class=" btn btn-danger">delete</button>
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