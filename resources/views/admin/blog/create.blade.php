@extends('admin.layouts.app')


@section('content')
    <section id="extended">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title pull-left">Create New User</h4>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">

                        {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}

                        <div class="card-block">
                            <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput1">Name</label>
                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput2">Email</label>
                                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput3">E-mail</label>
                                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput4">Contact Number</label>
                                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput4">Role:</label>
                                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Submit</button>

                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
