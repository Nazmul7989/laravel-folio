@extends('layouts.master')

@section('content')

    <?php

    use function Laravel\Folio\{withTrashed};
    use function Laravel\Folio\{middleware};

    withTrashed();
    middleware(['auth']);

    ?>

   <h3>Users page </h3>
    <div class="row">
        <div class="col-12">
            <form action="" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="example@example.com">
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
