@extends('layouts.admin-master')

@section('meta-title')
    <title>RUT - Admin | Update Leaderboar Group A</title>
@endsection

@section('content')

     <!-- Recent Sales Start -->
     <div class="container-fluid pt-4 px-4">

        <div class="d-flex justify-content-between row ">

            <div class="col-sm-12 col-xl-12 bg-secondary text-center rounded p-4 mb-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Group A - Team List</h6>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                
                                <th scope="col">ID</th>
                                <th scope="col">Team Name</th>
                                <th scope="col">Group</th>
                                <th scope="col">MP</th>
                                <th scope="col">W</th>
                                <th scope="col">D</th>
                                <th scope="col">L</th>
                                <th scope="col">Pts</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($teams as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->team_name }}</td>
                                    <td>{{ $item->team_group }}</td>
                                    <td>{{ $item->match_played }}</td>
                                    <td>{{ $item->win }}</td>
                                    <td>{{ $item->draw }}</td>
                                    <td>{{ $item->lose }}</td>
                                    <td>{{ $item->points }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary"  href="/admin/teams/leaderboard/edit/{{$item->id}}">Update</a>
                                    </td>
                                    
                                </tr>
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Recent Sales End -->



   

@endsection