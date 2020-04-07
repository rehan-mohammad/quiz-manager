<div>

    <?php switch ($user->is_admin) {

        default:
            echo "<h3>Guest</h3>";
            break;

        case 1:
            echo "<h3>Admin</h3>";
            break;

    }

    ?>

    <hr>

</div>

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