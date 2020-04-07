<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateSubmissionRequest;
use App\Http\Requests\UpdateSubmissionRequest;
use App\Http\Controllers\AppBaseController;
use App\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Prettus\Repository\Criteria\RequestCriteria;

class SubmissionController extends AppBaseController {

    /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {

		$this->middleware( 'auth' );

	}

    /**
     * Display a listing of the Submission.
     *
     * @param Request $request
     * @return Response
     */
    public function index( Request $request ) {

        $submissions = Submission::all();

        return view( 'admin.submissions.index', compact( 'submissions' ) );

    }

    /**
     * Show the form for creating a new Submission.
     *
     * @return Response
     */
    public function create() {

        return view( 'admin.submissions.create' );

    }

    /**
     * Store a newly created Submission in storage.
     *
     * @param CreateSubmissionRequest $request
     *
     * @return Response
     */
    public function store( CreateSubmissionRequest $request ) {

        $formInput = $request->all();

        $submission = Submission::create( $formInput );

        Session::flash( 'flash_message', 'Submission saved successfully.' );

        return back();

    }

    /**
     * Display the specified Submission.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {

        $submission = Submission::find( $id );

        if ( empty( $submission ) ) {

            return redirect( route( 'submissions.index' ) )->withErrors( [ 'notfound' => 'Submission not found' ] );

        }

        return view( 'admin.submissions.show', compact( 'submission' ) );

    }

    /**
     * Show the form for editing the specified Submission.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id ) {

        $submission = Submission::find( $id );

        if ( empty( $submission ) ) {

            return redirect( route( 'submissions.index' ) )->withErrors( [ 'notfound' => 'Submission not found' ] );

        }

        return view( 'admin.submissions.edit', compact( 'submission' ) );

    }

    /**
     * Update the specified Submission in storage.
     *
     * @param  int              $id
     * @param UpdateSubmissionRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdateSubmissionRequest $request ) {

        $submission = Submission::find( $id );
        $formInput = $request->all();

        if ( empty( $submission ) ) {

            return redirect( route( 'submissions.index' ) )->withErrors( [ 'notfound' => 'Submission not found' ] );

        }

        $submission->update( $formInput );

        Session::flash( 'flash_message', 'Submission updated successfully.' );

        return redirect( route( 'submissions.index' ) );

    }

    /**
     * Remove the specified Submission from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id ) {

        $submission = Submission::find( $id );

        if ( empty( $submission) ) {

            return redirect( route( 'submissions.index' ) )->withErrors( [ 'notfound' => 'Submission not found' ] );

        }

        $submission->destroy( $id );

        Session::flash( 'flash_message', 'Submission deleted successfully.' );

        return redirect( route( 'submissions.index' ) );

    }

}
