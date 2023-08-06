@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users List</a></li>
                    <li class="breadcrumb-item active">Create User</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        @include('admin.partials._msg')

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Roznamcha</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {{ Form::open(['route' => 'roznamchas.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    <select name="country" id="country" class="form-control  {{ $errors->has('country') ? 'is-invalid' : '' }}">
                                        <option value="pakistan">Pakistan</option>
                                        <option value="afghanistan">Afghanistan</option>
                                    </select>
                                    @error('country')
                                        <span id="country-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_id">Select User:</label>
                                    <select name="user_id" id="user_id" class="form-control {{ $errors->has('user_id') ? 'is-invalid' : '' }}">
                                        <option value="">Select User</option>
                                        @foreach ($users as $userId => $userName)
                                            <option value="{{ $userId }}">{{ $userName }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <span id="user_id-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>            
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="total_name">Total Name:</label>
                                    <select name="total_name" id="total_name" class="form-control {{ $errors->has('total_name') ? 'is-invalid' : '' }}">
                                        @foreach ($totalNames as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                    @error('total_name')
                                        <span id="total_name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sr_no">Serial Number:</label>
                                    <input type="text" name="sr_no" class="form-control {{ $errors->has('sr_no') ? 'is-invalid' : '' }}"
                                        id="sr_no" placeholder="Enter Serial Number">
                                    @error('sr_no')
                                        <span id="sr_no-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="detail">Detail:</label>
                                    <textarea name="detail" class="form-control {{ $errors->has('detail') ? 'is-invalid' : '' }}"
                                        id="detail" placeholder="Enter Detail"></textarea>
                                    @error('detail')
                                        <span id="detail-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="afghani_date">Afghani Date:</label>
                                    <input type="date" name="afghani_date" class="form-control {{ $errors->has('afghani_date') ? 'is-invalid' : '' }}"
                                        id="afghani_date">
                                    @error('afghani_date')
                                        <span id="afghani_date-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Date:</label>
                                    <input type="date" name="date" class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }}"
                                        id="date">
                                    @error('date')
                                        <span id="date-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="afghani">Afghani:</label>
                                    <input type="date" name="afghani" class="form-control {{ $errors->has('afghani') ? 'is-invalid' : '' }}"
                                        id="afghani">
                                    @error('afghani')
                                        <span id="afghani-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="afghani_total">Afghani Total:</label>
                                    <input type="text" name="afghani_total" class="form-control {{ $errors->has('afghani_total') ? 'is-invalid' : '' }}"
                                        id="afghani_total" placeholder="Enter Afghani Total">
                                    @error('afghani_total')
                                        <span id="afghani_total-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pakistani_total">Pakistani Total:</label>
                                    <input type="text" name="pakistani_total" class="form-control {{ $errors->has('pakistani_total') ? 'is-invalid' : '' }}"
                                        id="pakistani_total" placeholder="Enter Pakistani Total">
                                    @error('pakistani_total')
                                        <span id="pakistani_total-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Image:</label>
                                    <input type="file" name="image" class="form-control-file {{ $errors->has('image') ? 'is-invalid' : '' }}"
                                        id="image">
                                    @error('image')
                                        <span id="image-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>  
        </div>   
    </div>
</section>
@endsection
