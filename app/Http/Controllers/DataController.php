<?php namespace App\Http\Controllers;

class DataController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

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
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function doctor()
    {
        return view('doc-home');
    }
    public function postData(){
        $data = new \App\Data();
        $data -> fbs =\Input::get('fbs');
        $data -> bp =\Input::get('bp');
        $data -> suggesion =\Input::get('suggesion');
        $data -> updated_at =\Input::get('updated_at');
        $data -> created_at =\Input::get('created_at');


        return redirect('/doc');

    }

}
