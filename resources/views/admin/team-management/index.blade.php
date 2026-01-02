@extends('layouts.admin-master')

@section('meta-title')
    <title>RUT - Admin | Update Team</title>
@endsection

@section('content')

     <!-- Recent Sales Start -->
     <div class="container-fluid pt-4 px-4">

        <div class="d-flex justify-content-between row ">

            <div class="col-sm-12 col-xl-8 bg-secondary text-center rounded p-4 mb-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Team List</h6>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                
                                <th scope="col">ID</th>
                                <th scope="col">Team Icon</th>
                                <th scope="col">Team Name</th>
                                <th scope="col">Team Group</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($teams as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        @if($item->team_icon_image)
                                            <img src="{{ asset($item->team_icon_image) }}" alt="Team Icon" style="width: 50px; height: 50px; object-fit: cover;">
                                        @else
                                            <span class="text-muted">No Icon</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->team_name }}</td>
                                    <td>{{ $item->team_group }}</td>
                                    
                                    <td>
                                        <a class="btn btn-sm btn-success me-1" href="/admin/team/edit/{{$item->id}}">Edit</a>
                                        <button type="button" class="btn btn-sm btn-danger btn-delete-team" 
                                                data-bs-toggle="modal" data-bs-target="#deleteModal" 
                                                data-delete-url="/admin/team/delete/{{$item->id}}" 
                                                data-team-name="{{ $item->team_name }}" 
                                                data-team-icon="{{ $item->team_icon_image ?? '' }}">
                                            Delete
                                        </button>
                                    </td>
                                    
                                </tr>
                            @endforeach
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- add category box --}}
            <div class="col-sm-12 col-xl-4">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <div class="bg-secondary rounded h-100 p-4">
                        @if(session('success')) 
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            
                        @endif
                        <h6 class="mb-1 text-center">Add Team</h6>

                        <form action="{{ url('/admin/team/add') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" name="team_name" required class="form-control" id="floatingInput"
                                    placeholder="insert new team">
                                <label for="floatingInput">Team Name</label>
                                @error('team_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="team_icon_image" class="form-label">Team Icon Image</label>
                                <input type="file" name="team_icon_image" class="form-control" id="team_icon_image" accept="image/*">
                                @error('team_icon_image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <h4>Select Team Group</h4>
                                <select name="team_group" required class="form-select mb-3" aria-label="Default select example">
                                    <option selected disabled>Open this select team group</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                   
                                </select>
                                @error('team_group')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>

                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-secondary text-white">
          <div class="modal-header border-0">
            <h5 class="modal-title neon-text" id="deleteModalLabel">Delete Team</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="d-flex align-items-center gap-3">
              <div id="modalTeamIconWrapper"></div>
              <div>
                <p class="mb-1">Are you sure you want to delete <strong id="modalTeamName"></strong>?</p>
                <p class="text-muted small mb-0">This action cannot be undone.</p>
              </div>
            </div>
          </div>
          <div class="modal-footer border-0">
            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
            <a href="#" class="btn btn-danger" id="confirmDeleteBtn">Delete</a>
          </div>
        </div>
      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.btn-delete-team');
        const modal = document.getElementById('deleteModal');
        const modalTeamName = document.getElementById('modalTeamName');
        const modalTeamIconWrapper = document.getElementById('modalTeamIconWrapper');
        const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');

        deleteButtons.forEach(btn => {
          btn.addEventListener('click', function (e) {
            const teamName = this.getAttribute('data-team-name');
            const deleteUrl = this.getAttribute('data-delete-url');
            const teamIcon = this.getAttribute('data-team-icon');

            modalTeamName.textContent = teamName;
            confirmDeleteBtn.setAttribute('href', deleteUrl);

            // render icon preview
            if (teamIcon) {
              modalTeamIconWrapper.innerHTML = `<img src="${teamIcon}" alt="${teamName}" style="width:64px;height:64px;object-fit:cover;border-radius:8px;border:2px solid rgba(255,255,255,0.05);">`;
            } else {
              modalTeamIconWrapper.innerHTML = `<div class="team-icon-placeholder" style="width:64px;height:64px;border-radius:8px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#00d4ff 0%,#0077ff 100%);font-weight:700;color:#0a0a1a;">${teamName.substring(0,2).toUpperCase()}</div>`;
            }
          });
        });
      });
    </script>

    <!-- Recent Sales End -->



   

@endsection