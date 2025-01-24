@extends('layouts.admin-master')

@section('meta-title')
    <title>RUT - Admin | Update Team Data</title>
@endsection


@section('content')
    {{-- ---- product upload -- = --}}
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            @if(session('success')) 
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <i class="fa fa-exclamation-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
            @endif
            <h3 class="mb-1 text-center">Update {{ $team->team_name }} Point</h3>
            <br>

            <form action="{{ url('/admin/teams/leaderboard/update/'.$team->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="form-floating mb-3">
                    <input type="number" name="match_played" value="{{ $team->match_played }}" required class="form-control" id="floatingInput" placeholder="Match Played">
                    <label for="floatingInput">Match Played</label>
                    @error('match_played')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="number" name="win" value="{{ $team->win }}" required class="form-control" id="floatingInput" placeholder="win">
                    <label for="floatingInput">Win Match</label>
                    @error('win')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="number" name="draw" value="{{ $team->draw }}" required class="form-control" id="floatingInput" placeholder="draw">
                    <label for="floatingInput">Draw</label>
                    @error('draw')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="number" name="lose" value="{{ $team->lose }}" required class="form-control" id="floatingInput" placeholder="Match Lose">
                    <label for="floatingInput">Match Lose</label>
                    @error('lose')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="points" value="{{ $team->points }}" required class="form-control" id="floatingInput" placeholder="Match points">
                    <label for="floatingInput">Match Points</label>
                    @error('points')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            
            
                
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
    {{-- ---- product upload -- = --}}

@endsection