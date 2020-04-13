<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateAnswerRequest;
use App\Http\Requests\UpdateAnswerRequest;
use App\Http\Controllers\AppBaseController;
use App\Answer;
use App\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Prettus\Repository\Criteria\RequestCriteria;

class AnswerController extends AppBaseController {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware( 'auth' );

    }

    /**
     * Display a listing of the Answer.
     *
     * @param Request $request
     * @return Response
     */
    public function index( Request $request ) {

        $answers = Answer::all();

        return view( 'admin.answers.index', compact( 'answers' ) );

    }

    /**
     * Show the form for creating a new Answer.
     *
     * @return Response
     */
    public function create() {

        return view( 'admin.answers.create' );

    }

    /**
     * Store a newly created Answer in storage.
     *
     * @param CreateAnswerRequest $request
     *
     * @return Response
     */
    public function store( CreateAnswerRequest $request ) {

        $formInput = $request->all();

        $answer = Answer::create( $formInput );

        Session::flash( 'flash_message', 'Answer saved successfully.' );

        return redirect( route( 'answers.index' ) );

    }

    /**
     * Display the specified Answer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {

        $answer = Answer::find( $id );

        if ( empty( $answer ) ) {

            return redirect( route( 'answers.index' ) )->withErrors( [ 'notfound' => 'Answer not found' ] );

        }

        return view( 'admin.answers.show', compact( 'answer' ) );

    }

    /**
     * Show the form for editing the specified Answer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id ) {

        $answer = Answer::find( $id );

        if ( empty( $answer ) ) {

            return redirect( route( 'answers.index' ) )->withErrors( [ 'notfound' => 'Answer not found' ] );

        }

        return view( 'admin.answers.edit', compact( 'answer' ) );

    }

    /**
     * Update the specified Answer in storage.
     *
     * @param  int              $id
     * @param UpdateAnswerRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdateAnswerRequest $request ) {

        $answer = Answer::find( $id );
        $formInput = $request->all();

        if ( empty( $answer ) ) {

            return redirect( route( 'answers.index' ) )->withErrors( [ 'notfound' => 'Answer not found' ] );

        }

        $answer->update( $formInput );

        $submission = Submission::find( $answer->submission_id );

        Session::flash( 'flash_message', 'Answer updated successfully.' );

        return view( 'admin.submissions.edit', compact( 'submission' ) );

    }

    /**
     * Remove the specified Answer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id ) {

        $answer = Answer::find( $id );

        if ( empty( $answer) ) {

            return redirect( route( 'answers.index' ) )->withErrors( [ 'notfound' => 'Answer not found' ] );

        }

        $answer->destroy( $id );

        Session::flash( 'flash_message', 'Answer deleted successfully.' );

        return redirect( route( 'answers.index' ) );

    }

}
