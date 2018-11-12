@extends('admin.layouts.app')


@section('content')
    <section id="extended">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title pull-left">Users Management</h4>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New
                                User</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <table class="table table-responsive-md-md text-center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Roles</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="custom-control custom-checkbox m-0">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="item1">
                                                <label class="custom-control-label" for="item1"></label>
                                            </div>
                                        </td>
                                        <td class="text-left">{{ $post->title }}</td>
                                        <td>{{ $post->user_id }}</td>
                                        <td>
                                            @if(!empty($post->user))
                                                @foreach($post->getRoleNames() as $v)
                                                    <label class="badge badge-success">{{ $v }}</label>
                                                @endforeach
                                            @else
                                                Hello
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-info"
                                               href="{{ route('blog.show',$post->id) }}">Show</a>
                                            <a class="btn btn-primary"
                                               href="{{ route('blog.edit',$post->id) }}">Edit</a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['blog.destroy', $post->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $posts->appends(request()->query())->links() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
