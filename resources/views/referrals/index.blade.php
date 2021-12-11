
@extends('layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Referrals</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Referrer</th>
                                <th>Tier</th>
                                <th>Created Date</th>
                             
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Referrer</th>
                                <th>Tier</th>
                                <th>Created Date</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($referrals as $referral)
                                <tr>
                                    <td>{{ $referral->id }}</td>
                                    <td>{{ $referral->user->name }}</td>
                                    <td>{{ $referral->referrer->name }}</td>
                                    <td>{{ $referral->tier->tier }}</td>
                                    <td>{{ $referral->created_at }}</td>
                                    
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
