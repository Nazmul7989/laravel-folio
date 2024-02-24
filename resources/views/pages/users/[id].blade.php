@extends('layouts.master')

@section('content')

    <?php

    $user = \App\Models\User::findOrFail($id);

    ?>

    <div class="clearfix mt-3">
        <h3 class="float-start">User details page </h3>
        <a href="/users" class="btn btn-primary btn-sm float-end">Back</a>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

