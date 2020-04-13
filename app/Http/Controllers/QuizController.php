<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Http\Requests\CreateQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Http\Controllers\AppBaseController;
use App\Quiz;
use App\Submission;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuizController extends AppBaseController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Display a listing of the Quiz.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $now = new DateTime();

        $quizzes = Quiz::all()->where('starts_at', '<=', $now)->where('expires_at', '>=', $now);

        return view('quizzes.index', compact('quizzes'));

    }

    /**
     * Show the form for creating a new Quiz.
     *
     * @return Response
     */
    public function create($slug)
    {

        $quiz = Quiz::where('slug', '=', $slug)->first();

        $now = new DateTime();

        if($quiz->starts_at > $now) {


            Session::flash( 'flash_message', 'This Quiz is not available yet. Please contact an administrator' );

            return redirect( url( '/' ) );
        }

        if($quiz->expires_at <= $now) {


            Session::flash( 'flash_message', 'This Quiz has expired. Please contact an administrator' );

            return redirect( url( '/' ) );
        }

        return view('quizzes.create', compact('quiz'));

    }

    /**
     * Store a newly created Quiz in storage.
     *
     * @param CreateQuizRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $formInput = $request->all();

        $questionAnswers = $formInput["answer"];


        $submission = Submission::create([
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'quiz_id' => $formInput['quiz_id'],
            'user_id' => $formInput['user_id']
            ]);

        foreach ($questionAnswers as $answer) {


            if (gettype($answer["answer"]) == "array"){
                $answerContent = implode(", ", $answer["answer"]);
            }
            else{
                $answerContent = $answer["answer"];
            }

            $answerModel = $submission->answers()->create([
                'answer' => $answerContent,
                'question_id' => $answer["question_id"],
                'quiz_id' => $answer["quiz_id"]
            ]);
        }

        Session::flash('flash_message', 'This submission has been recorded. Thank you');

        return redirect(url('/'));

    }

}
