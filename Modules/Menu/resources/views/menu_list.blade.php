<x-menu::layouts.master>
        @section('title', 'Menu List')

        @section('content')
            <div style="padding: 10px;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom border-dashed">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-between">
                                        <h4 class="card-title mb-0 flex-grow-1">Menu List</h4>
                                        <a href="{{ route('menu.create') }}" class="btn btn-primary btn-sm bg-gradient">
                                            <i class="ti ti-plus align-middle me-1 fs-18"></i>Create Menu
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Route</th>
                                            <th>Parent Name</th>
                                            <th>Order</th>
                                            <th>Permission</th>
                                            <th>Status</th>
                                            <th>Module</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menus as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->route }}</td>
                                                <td>{{ $item->parent_id }}</td>
                                                <td>{{ $item->order }}</td>
                                                <td>{{ $item->permission }}</td>
                                                <td>{{ $item->is_active }}</td>
                                                <td>{{ $item->module }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm bg-gradient btn-icon">
                                                        <i class="ti ti-trash align-middle me-1 fs-18"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                               
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        @endsection
</x-menu::layouts.master>

