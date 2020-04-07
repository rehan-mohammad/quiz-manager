@if (Session::has('flash_message'))

    <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            <i class="material-icons">close</i>
        </button>

        {!! Session::get('flash_message') !!}

    </div>

@endif