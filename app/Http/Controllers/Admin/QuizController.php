<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Http\Controllers\AppBaseController;
use App\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuizController extends AppBaseController {

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct() {

        $this->middleware( 'auth' );

    }

    /**
     * Display a listing of the quiz.
     *
     * @param Request $request
     * @return Response
     */
    public function index( Request $request ) {

        $quizzes = Quiz::all();

        return view( 'admin.quizzes.index', compact( 'quizzes' ) );

    }

    /**
     * Show the form for creating a new quiz.
     *
     * @return Response
     */
    public function create() {

        return view( 'admin.quizzes.create' );

    }

    /**
     * Store a newly created quiz in storage.
     *
     * @param CreateQuizRequest $request
     *
     * @return Response
     */
    public function store( CreateQuizRequest $request ) {

        $formInput = $request->all();

        $quiz = Quiz::create( $formInput );

        Session::flash( 'flash_message', 'Quiz saved successfully.' );

        return redirect( route( 'quizzes.index' ) );

    }

    /**
     * Display the specified quiz.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {

        $quiz = Quiz::find( $id );

        if ( empty( $quiz ) ) {

            return redirect( route( 'quizzes.index' ) )->withErrors( [ 'notfound' => 'Quiz not found' ] );

        }

        $questions = $quiz->questions()->get();

        return view( 'admin.quizzes.show', compact( 'quiz', 'questions' ) );

    }

    /**
     * Show the form for editing the specified quiz.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id ) {

        $quiz = Quiz::find( $id );

        if ( empty( $quiz ) ) {

            return redirect( route( 'quizzes.index' ) )->withErrors( [ 'notfound' => 'Quiz not found' ] );

        }

        return view( 'admin.quizzes.edit', compact( 'quiz' ) );

    }

    /**
     * Update the specified quiz in storage.
     *
     * @param  int              $id
     * @param UpdateQuizRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdateQuizRequest $request ) {

        $quiz = Quiz::find( $id );
        $formInput = $request->all();

        if ( empty( $quiz ) ) {

            return redirect( route( 'quizzes.index' ) )->withErrors( [ 'notfound' => 'Quiz not found' ] );

        }

        $quiz->update( $formInput );

        Session::flash( 'flash_message', 'Quiz updated successfully.' );

        return redirect( route( 'quizzes.index' ) );

    }

    /**
     * Remove the specified quiz from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id ) {

        $quiz = Quiz::find( $id );

        if ( empty( $quiz) ) {

            return redirect( route( 'quizzes.index' ) )->withErrors( [ 'notfound' => 'Quiz not found' ] );

        }

        $quiz->destroy( $id );

        Session::flash( 'flash_message', 'Quiz deleted successfully.' );

        return redirect( route( 'quizzes.index' ) );
    }
}
