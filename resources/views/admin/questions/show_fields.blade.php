<div class="row">

    <div class="col-sm-3">

        <p class="font-weight-bold mb-0">
            Id:
        </p>

        <p>
            {!! $question->id !!}
        </p>

        <hr>

    </div>

    <div class="col-sm-3">

        <p class="font-weight-bold mb-0">
            Order:
        </p>

        <p>
            {!! $question->order !!}
        </p>

        <hr>

    </div>

    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Active:
        </p>

        <p>
            @if ($question->active)
                Yes
            @else
                No
            @endif
        </p>

        <hr>

    </div>
</div>

<div class="row">

    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Question:
        </p>

        <p>
            {!! $question->title !!}
        </p>

        <hr>

    </div>

    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Quiz:
        </p>

        <p>
            {!! $question->quiz->title !!}
        </p>

        <hr>

    </div>


</div>
<div>

    <p class="font-weight-bold mb-0">
        Question Options:
    </p>

    <p>
    <?php
    $questionOptions = json_decode($question->question_options);
    ?>

    @foreach ($questionOptions as $option)
        <p>{{$option}}</p>
    @endforeach

    <hr>

</div>

<div class="row">
    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Created At:
        </p>

        <p>
            {!! $question->created_at !!}
        </p>

        <hr>

    </div>

    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Updated At:
        </p>

        <p>
            {!! $question->updated_at !!}
        </p>

        <hr>

    </div>

</div>