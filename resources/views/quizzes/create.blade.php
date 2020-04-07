@extends('layouts.app')

@section('content')

    <div class="container quiz-container">

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
                <input type="hidden" name="user_id"
                       value="{{ Auth::user()->id }}">

                <div class="row">

                    @foreach($quiz->questions()->get() as $question)

                        <div class="form-group col-sm-12 quiz-form">
                            <hr>

                            <h4>{!! Form::label('answer', $question->title) !!}</h4>
                            <small class="question-desc">{{ $question->description }}</small>
                            <br>

                            <?php

                            $questionOptions = json_decode($question->question_options);

                            ?>

                            @foreach ($questionOptions as $option)

                            <p class='option-text'>{{$option}}<p>

                            {{ Form::radio('answer[' . $question->id . '][answer]', $option) }}

                            @endforeach


                            <input type="hidden" name="answer[{{ $question->id }}][question_id]"
                                   value="{{ $question->id }}">
                            <input type="hidden" name="answer[{{ $question->id }}][quiz_id]"
                                   value="{{ $quiz->id }}">
                        </div>

                    @endforeach

                </div>

                <!-- Submit Field -->
                <div class="form-group">

                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

                </div>

                {!! Form::close() !!}


            </div>

        @else
            Quiz can't be found
        @endif

    </div>

@endsection