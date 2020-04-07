@extends('layouts.app')

@section('content')

    <div class="container">

        @if (isset($quiz))

            <div>

                <h1>{{ $quiz->title }}</h1>
                <hr>
                <h3>{{ $quiz->description }}</h3>
                <br>
                <p>{{ $quiz->welcome_text }}</p>
                <br>


                {!! Form::open(['url' => '/quizzes/create', 'method' => 'POST' ]) !!}
                <input type="hidden" name="quiz_id"
                       value="{{ $quiz->id }}">

                <div class="row">

                    @foreach($quiz->questions()->get() as $question)

                        <div class="form-group col-sm-12">
                            <hr>

                            <h4>{!! Form::label('answer', $question->title) !!}</h4>
                            <small>{{ $question->description }}</small>
                            <br>

                            <?php

                            $questionOptions = json_decode($question->question_options);

                            foreach ($questionOptions as $option) {
                                echo "<p>$option<p>", Form::radio('answer[' . $question->id . '][answer]', $option);
                            }

                            ?>


                            <input type="hidden" name="answer[{{ $question->id }}][question_id]"
                                   value="{{ $question->id }}">
                            <input type="hidden" name="answer[{{ $question->id }}][quiz_id]"
                                   value="{{ $quiz->id }}">

                        </div>

                    @endforeach

                </div>

                <!-- Submit Field -->
                <div class="form-group col-sm-12">

                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

                </div>

                {!! Form::close() !!}


            </div>

        @else
            Quiz can't be found
        @endif

    </div>

@endsection