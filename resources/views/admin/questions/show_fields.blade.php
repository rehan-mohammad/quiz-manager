<div class="row">

    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Id:
        </p>

        <p>
            {!! $question->id !!}
        </p>

        <hr>

    </div>

    <div class="col-sm-6">

        <p class="font-weight-bold mb-0">
            Active:
        </p>

        <p>
            @if ($question->active)
                <i class="material-icons">check_box</i>
            @else
                <i class="material-icons">cancel</i>
            @endif
        </p>

        <hr>

    </div>
</div>

<div>

    <p class="font-weight-bold mb-0">
        Question:
    </p>

    <p>
        {!! $question->title !!}
    </p>

    <hr>

</div>

<div>

    <p class="font-weight-bold mb-0">
        Question Type:
    </p>

    <?php switch ($question->question_type) {

        case 1:
            echo "<p>Text</p>";
            break;

        case 2:
            echo "<p>Checkbox</p>";
            break;

        case 3:
            echo "<p>Radio</p>";
            break;

    }

    ?>

    <hr>

</div>

@if($question->question_type != 1)
    <div>

        <p class="font-weight-bold mb-0">
            Question Options:
        </p>

        <p>
            <?php switch ($question->question_type) {

                case 1:
                    break;

                case 2:
                    $questionOptions = json_decode($question->question_options);

                    foreach ($questionOptions as $option) {
                        echo "<p>$option<p>";
                    }
                    break;

                case 3:
                    $questionOptions = json_decode($question->question_options);

                    foreach ($questionOptions as $option) {
                        echo "<p>$option<p>";
                    }
                    break;

            }

            ?>
        </p>

        <hr>

    </div>
@endif
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