@extends('layouts.master')

@section('content')

    <?php

    use function Laravel\Folio\{withTrashed};
    use function Laravel\Folio\{middleware};

    withTrashed();
    middleware(['auth']);

    ?>

    <div class="clearfix mt-3">
        <h3 class="float-start">Create User</h3>
        <a href="/users" class="btn btn-primary btn-sm float-end">Back</a>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('users.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="example@example.com">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
@endsection
