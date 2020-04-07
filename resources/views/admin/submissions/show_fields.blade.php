<div>

    <div class="row p-3">
        <div class="col-sm-6">
            <p class="m-0">
                Submission date: {!! $submission->created_at->format('jS F Y') !!}
            </p>
        </div>

        <div class="col-sm-6">
            <p class="m-0">
                Submission time: {!! $submission->created_at->format('G:i') !!} GMT
            </p>
        </div>


    </div>
    <div class="row p-3">
        <div class="col-sm-6">
            <p class="m-0">
                IP Address: {!! $submission->ip_address !!}
            </p>
        </div>
        <div class="col-sm-6">
            <p class="m-0">
                User: {!! $user->name !!} ({!! $user->email !!})
            </p>
        </div>
    </div>

    <hr>

    <table class="table table-bordered table-striped table-hover" id="answers-table">

        <thead>

        <th>Question</th>
        <th>Description</th>
        <th>Answer</th>

        </thead>

        <tbody>

    @foreach($submission->answers as $answer)

        <tr>

            <td>{{ $answer->question->title }}</td>
            <td>{{ $answer->question->description }}</td>
            <td>{{ $answer->answer }}</td>
        </tr>

    @endforeach
        </tbody>
    </table>

</div>