@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-8">

            {{ csrf_field() }}

            <!-- Current Tasks -->
            @if (count($users) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Users
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped user-table">
                            <thead>
                            <th>ID</th>
                            <th>Email</th>
                            <th>name</th>
                            <th>Management</th>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="table-text"><div>{{ $user->id }}</div></td>
                                    <td class="table-text"><div>{{ $user->email }}</div></td>
                                    <td class="table-text"><div>{{ $user->name }}</div></td>

                                    <!-- Task Delete Button -->
                                    <td>
                                        <form action="/task/{{ $user->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-task-{{ $user->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
