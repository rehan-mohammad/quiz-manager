@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Quizzes</h2>
        <hr>
        <table class="table table-bordered table-striped table-hover" id="surveys-table">

            <thead>

            <th>Title</th>
            <th>Description</th>
            <th></th>

            </thead>

            <tbody>

            @foreach($quizzes as $quiz)

                @if ($quiz->active && date('Y-m-d') <= $quiz->expires_at && date('Y-m-d') >= $quiz->starts_at)

                    <tr>

                        <td>{!! $quiz->title !!}</td>
                        <td>{!! $quiz->description !!}</td>

                        <td>

                            <div>

                                <a href="{!! url('/quizzes', [$quiz->slug]) !!}" class='btn btn-success btn-sm'>
                                    <i class="material-icons">keyboard_arrow_right</i>
                                </a>

                            </div>

                        </td>

                    </tr>

                @endif

            @endforeach

            </tbody>

        </table>


    </div>

@endsection