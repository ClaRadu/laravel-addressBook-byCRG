<?php
namespace App\Http\Controllers;

use DB;
use App\Book;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\BookRepository;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	protected $books;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(BookRepository $books)
	{
		$this->middleware('auth');
		$this->books = $books;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$books = DB::select('select * from books');
		return view('home', [ 'books' => $books ]);
//		return view('home', [ 'books' => $this->books->forUser($request->user()), ]);
	}
	
	// search
	public function search(Request $request)
	{
		$src = $request->input('src_query');
		if (empty($src)) {
			$books = DB::select('select * from books');
		} else {
			$books = DB::select("select * from books where upper(name) like upper('%" . $src . "%')");
		}
		
		return view('home', [ 'books' => $books ]);
	}

}
