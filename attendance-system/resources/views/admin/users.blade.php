@extends('admin.layouts.app')

@section('content')
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-12">
            	<div class="card">
                	<div class="card-header">
                  <div class="container" @style('display: flex; justify-content: space-between;')>
                    {{ __('Users') }} <a href="{{route('admin.create')}}" class="btn btn-primary" @style('padding:3px 10px;')>	<i class="fa-solid fa-plus"></i></a>
                  </div>
                  </div>

                	<div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                    </div>
              @endif
                        <table class="table table-hover">

                            <thead>
                              
                              <th>Id</th>
                              <th>Username</th>
                              <th>First name</th>
                              <th>Last name</th>
                              <th>Email</th>
                              <th>DOB</th>
                              <th>Phone</th>
                              <th>Current Address</th>
                              <th>Permanent Address</th>
                              <th>Date of Join</th>
                              <th>Actions</th>
                              
                            </thead>
                        
                            <tbody>
                        @foreach($users as $user)
                        
                                <tr>
                        
                                  <td>{{$user->id}} </td>
                                  <td>{{$user->name}} </td>
                                  <td>{{$user->firstname}} </td>
                                  <td>{{$user->lastname}} </td>
                                  <td>{{$user->email}} </td>
                                  <td>{{$user->date_of_birth}} </td>
                                  <td>{{$user->phone}} </td>
                                  <td>{{$user->current_address}} </td>
                                  <td>{{$user->permanent_address}} </td>
                                  <td>{{$user->joining_date}} </td>
                                  <td>
                                    {{-- <a href="#" class="btn btn-primary">Edit Profile</a> --}}
                                    <a href="{{ route('admin.edit', $user->id) }}" class="btn btn-primary" @style('padding:3px 10px;')><i class="fa-solid fa-pen-to-square"></i></a>
                                  </td>
                               
                                </tr>
                        @endforeach
                        
                            </tbody>
                        
                        </table>
                	</div>
            	</div>
        	</div>
    	</div>
	</div>
@endsection
