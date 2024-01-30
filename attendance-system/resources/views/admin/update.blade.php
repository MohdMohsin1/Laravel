<!-- resources/views/admin/edit-user.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit User Profile') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('user.update', $user->id) }}">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="firstname">{{ __('First Name') }}</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" value="{{ old('firstname', $user->firstname) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="lastname">{{ __('Last Name') }}</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" value="{{ old('lastname', $user->lastname) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="date_of_birth">{{ __('Date of Birth') }}</label>
                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ old('date_of_birth', $user->date_of_birth) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">{{ __('Phone') }}</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $user->phone) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="current_address">{{ __('Current Address') }}</label>
                                <input type="text" name="current_address" id="current_address" class="form-control" value="{{ old('current_address', $user->current_address) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="permanent_address">{{ __('Permanent Address') }}</label>
                                <input type="text" name="permanent_address" id="permanent_address" class="form-control" value="{{ old('permanent_address', $user->permanent_address) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="role">{{ __('Role') }}</label>
                                <input type="text" name="role" id="role" class="form-control" value="{{ old('role', $user->role) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="joining_date">{{ __('Joining Date') }}</label>
                                <input type="date" name="joining_date" id="joining_date" class="form-control" value="{{ old('joining_date', $user->joining_date) }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update Profile') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
