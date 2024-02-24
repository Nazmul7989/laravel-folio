@extends('layouts.master')

@section('content')

    <?php

    use function Laravel\Folio\{middleware};

    middleware(['auth']);

    $user = \App\Models\User::findOrFail($id);

    ?>

    <h3>Users page </h3>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('users.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="example@example.com">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
