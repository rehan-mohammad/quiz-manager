<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\AppBaseController;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Prettus\Repository\Criteria\RequestCriteria;

class UserController extends AppBaseController {

    /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {

		$this->middleware( 'auth' );

	}

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     * @return Response
     */
    public function index( Request $request ) {

        $users = User::all();

        return view( 'admin.users.index', compact( 'users' ) );

    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create() {

        return view( 'admin.users.create' );

    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store( Request $request ) {

        $formInput = $request->all();

        $user = User::create([
            'name' => $formInput['name'],
            'email' => $formInput['email'],
            'password' => bcrypt($formInput['password']),
            'is_admin' => $formInput['is_admin']
        ]);

        Session::flash( 'flash_message', 'User saved successfully.' );

        return redirect( route( 'users.index' ) );

    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {

        $user = User::find( $id );

        if ( empty( $user ) ) {

            return redirect( route( 'users.index' ) )->withErrors( [ 'notfound' => 'User not found' ] );

        }

        return view( 'admin.users.show', compact( 'user' ) );

    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id ) {

        $user = User::find( $id );

        if ( empty( $user ) ) {

            return redirect( route( 'users.index' ) )->withErrors( [ 'notfound' => 'User not found' ] );

        }

        return view( 'admin.users.edit', compact( 'user' ) );

    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update( $id, Request $request ) {

        $user = User::find( $id );
        $formInput = $request->all();

        if ( empty( $user ) ) {

            return redirect( route( 'users.index' ) )->withErrors( [ 'notfound' => 'User not found' ] );

        }

        $passwordflash = '';

        if ( $formInput['password'] == '' )
        {
            unset( $formInput['password'] );
        } else {
            $passwordflash .= 'Password Updated';
            $formInput['password'] = bcrypt($formInput['password']);
        }

        $user->update( $formInput );

        Session::flash( 'flash_message', 'User updated successfully.&nbsp' . $passwordflash );

        return redirect( route( 'users.index' ) );

    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id ) {

        $user = User::find( $id );

        if ( empty( $user) ) {

            return redirect( route( 'users.index' ) )->withErrors( [ 'notfound' => 'User not found' ] );

        }

        $user->destroy( $id );

        Session::flash( 'flash_message', 'User deleted successfully.' );

        return redirect( route( 'users.index' ) );

    }

}
