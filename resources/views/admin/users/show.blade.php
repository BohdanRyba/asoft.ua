@extends('admin.layouts.app')


@section('content')
    <section id="extended">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title pull-left">User Management</h4>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New
                                User</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card horizontal">
                                <div class="card-body">
                                    <div class="card-stacked align-self-center">
                                        <div class="px-3">
                                            <h4 class="card-title">{{ $user->name }}</h4>
                                            <p class="card-text">
                                                {{ $user->email }}

                                            </p>
                                            <p class="card-text">
                                                <strong>Roles:</strong>
                                                @if(!empty($user->getRoleNames()))
                                                    @foreach($user->getRoleNames() as $v)
                                                        <label class="badge badge-success">{{ $v }}</label>
                                                    @endforeach
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    {{--<div class="card-img">--}}
                                    {{--<img class="card-img-top img-fluid"--}}
                                    {{--src="../app-assets/img/photos/06.jpg" alt="Card image cap">--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
