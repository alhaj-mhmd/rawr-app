@extends('layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rewards</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Reward</th>
                                <th>Created Date</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Reward</th>
                                <th>Created Date</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($rewards as $reward)
                                <tr>
                                    <td>{{ $reward->id }}</td>
                                    <td>{{ $reward->user->name }}</td>
                                    <td>{{ $reward->reward }}</td>
                                    <td>{{ $reward->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
