@extends('layouts.master')

@section('content')

    <?php

    use function Laravel\Folio\{withTrashed};
    use function Laravel\Folio\{middleware};
    use function Laravel\Folio\name;

    middleware(['auth']);
    name('home');

    withTrashed();
//    middleware(['auth']);

    $users = \App\Models\User::all();

    ?>

    <div class="clearfix mt-3">
        <h3 class="float-start">User List </h3>
        <a href="/users/create" class="btn btn-primary btn-sm float-end">Create</a>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                   @foreach($users as $user)
                       <tr>
                           <th scope="row">{{ $loop->iteration }}</th>
                           <td>{{ $user->name }}</td>
                           <td>{{ $user->email }}</td>
                           <td>
                               <a href="/users/{{ $user->id }}" class="btn btn-info btn-sm">View</a>
                               <a href="/users/edit/{{ $user->id }}" class="btn btn-primary btn-sm">Edit</a>
                               <form action="{{ route('users.destroy', $user->id) }}" method="post" class="d-inline">
                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete?')">Delete</button>
                               </form>
                           </td>
                       </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
