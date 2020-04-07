<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Http\Controllers\AppBaseController;
use App\Question;
use App\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Prettus\Repository\Criteria\RequestCriteria;

class QuestionController extends AppBaseController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');

    }

    /**
     * Display a listing of the Question.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $questions = Question::all();

        $quizzes = Quiz::pluck('title', 'id');

        return view('admin.questions.index', compact('questions', 'quizzes'));

    }

    /**
     * Show the form for creating a new Question.
     *
     * @return Response
     */
    public function create()
    {

        $quizzes = Quiz::pluck('title', 'id');


        return view('admin.questions.create', compact('quizzes'));

    }

    /**
     * Store a newly created Question in storage.
     *
     * @param CreateQuestionRequest $request
     *
     * @return Response
     */
    public function store(CreateQuestionRequest $request)
    {

        $formInput = $request->all();

        if(isset($formInput['question_options'])){
            $formInput['question_options'] = json_encode($formInput['question_options']);
        }

        $question = Question::create($formInput);

        Session::flash('flash_message', 'Question saved successfully.');

        return redirect(route('questions.index'));

    }

    /**
     * Display the specified Question.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {

        $question = Question::find($id);

        if (empty($question)) {

            return redirect(route('questions.index'))->withErrors(['notfound' => 'Question not found']);

        }

        return view('admin.questions.show', compact('question'));

    }

    /**
     * Show the form for editing the specified Question.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $question = Question::find($id);

        $quizzes = Quiz::pluck('title', 'id');


        if (empty($question)) {

            return redirect(route('questions.index'))->withErrors(['notfound' => 'Question not found']);

        }

        return view('admin.questions.edit', compact('question', 'quizzes'));

    }

    /**
     * Update the specified Question in storage.
     *
     * @param  int $id
     * @param UpdateQuestionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuestionRequest $request)
    {

        $question = Question::find($id);
        $formInput = $request->all();

        if(isset($formInput['question_options'])){
            $formInput['question_options'] = json_encode($formInput['question_options']);
        }


        if (empty($question)) {

            return redirect(route('questions.index'))->withErrors(['notfound' => 'Question not found']);

        }

        $question->update($formInput);

        Session::flash('flash_message', 'Question updated successfully.');

        return redirect(route('questions.index'));

    }

    /**
     * Remove the specified Question from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {

        $question = Question::find($id);

        if (empty($question)) {

            return redirect(route('questions.index'))->withErrors(['notfound' => 'Question not found']);

        }

        $question->destroy($id);

        Session::flash('flash_message', 'Question deleted successfully.');

        return redirect(route('questions.index'));

    }

}
