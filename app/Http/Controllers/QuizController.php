<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Http\Requests\CreateQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Http\Controllers\AppBaseController;
use App\Quiz;
use App\Submission;
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

        $quizzes = Quiz::all();

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
            'quiz_id' => $formInput['quiz_id']
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

        Session::flash('flash_message', 'Thanks for your submission');

        return redirect(url('/'));

    }

}
