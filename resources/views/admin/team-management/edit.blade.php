@extends('layouts.admin-master')

@section('meta-title')
    <title>RUT - Admin | Edit Team</title>
@endsection

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Edit Team</h6>
                    <a href="{{ route('admin.teams') }}" class="btn btn-sm btn-outline-light">Back</a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ url('/admin/team/update/'.$team->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" name="team_name" required class="form-control" id="teamName" value="{{ old('team_name', $team->team_name) }}">
                        <label for="teamName">Team Name</label>
                        @error('team_name') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="team_icon_image" class="form-label">Team Icon Image</label>
                        <div class="mb-2">
                            @if($team->team_icon_image)
                                <img src="{{ asset($team->team_icon_image) }}" alt="Team Icon" style="width:80px;height:80px;object-fit:cover;border-radius:8px;">
                            @else
                                <span class="text-muted">No Icon</span>
                            @endif
                        </div>
                        <input type="file" name="team_icon_image" class="form-control" id="team_icon_image" accept="image/*">
                        @error('team_icon_image') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="teamGroup" class="form-label">Team Group</label>
                        <select name="team_group" id="teamGroup" class="form-select">
                            <option value="A" {{ $team->team_group == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ $team->team_group == 'B' ? 'selected' : '' }}>B</option>
                        </select>
                        @error('team_group') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update Team</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection