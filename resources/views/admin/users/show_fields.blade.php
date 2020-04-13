<div class="row">
    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Name:
        </p>

        <p>
            {!! $user->name !!}
        </p>

        <hr>

    </div>

    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Email:
        </p>

        <p>
            {!! $user->email !!}
        </p>

        <hr>

    </div>
</div>

<div class="row">
    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Created At:
        </p>

        <p>
            {!! $user->created_at !!}
        </p>

        <hr>

    </div>

    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Updated At:
        </p>

        <p>
            {!! $user->updated_at !!}
        </p>

        <hr>

    </div>
</div>

<div class="row">
    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Permissions:
        </p>

        <p>
            @if($user->is_admin == 1 && $user->limited == 0)
                Edit
            @endif

            @if($user->is_admin == 1 && $user->limited == 1)
                View
            @endif

            @if($user->is_admin == 0)
                Restricted
            @endif
        </p>

        <hr>

    </div>
</div>