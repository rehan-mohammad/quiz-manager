<div>

    <div class="row">
        <div class="col-sm-6">
            <p>
                Submission date: {!! $submission->created_at->format('jS F Y') !!}
            </p>
        </div>

        <div class="col-sm-6">
            <p>
                Submission time: {!! $submission->created_at->format('G:i') !!} GMT
            </p>
        </div>


    </div>
    <div class="row">
        <div class="col-sm-12">
            <p>
                IP Address: {!! $submission->ip_address !!}
            </p>
        </div>
    </div>

    <hr>

    @foreach($submission->answers as $answer)

        <div class="card my-3">
            <div class="card-block row">
                <div class="col-sm-3">
                    <h4 class="card-title">
                        {{ $answer->question->title }}
                    </h4>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ $answer->question->description }}
                    </h6>
                </div>
                <div class="col-sm-9">
                    <p class="card-text">
                        {{ $answer->answer }}
                    </p>
                </div>
            </div>
        </div>

    @endforeach

</div>