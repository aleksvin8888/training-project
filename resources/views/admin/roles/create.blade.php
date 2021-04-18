@extends('admin.layouts.app')

@section('title', 'Add New Role')

@section('mainContent')

    <div class="container-fluid col-lg-10 mt-2">
        <div class="row bg-info ">
            <h2>New Role</h2>
        </div>
        <form method="POST" action="{{ route('roles.store') }}">
            @csrf
            <div class="form-group col-lg-12 mb-2">
                <label for="inputTitle" class="col-xs-2 control-label">Title:</label>
                <div class="col-xs-8">
                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Role title"  value="{{old('title')}}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group col-lg-12 mb-2">
                <label for="inputDescription" class="col-xs-2 control-label">Description:</label>
                <div class="col-xs-8">
                    <input type="text" name="description" class="form-control" id="inputDescription" placeholder="Enter description for role" value="{{old('description')}}">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-primary">create</button>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
                </div>
            </div>
        </form>
    </div>

@endsection

