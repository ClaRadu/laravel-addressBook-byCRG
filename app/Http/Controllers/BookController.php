<?php

namespace App\Http\Controllers;

use DB;

use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Repositories\BookRepository;

class BookController extends Controller
{
	protected $books;
	
	// create a new controller instance
	public function __construct(BookRepository $books) {
		$this->middleware('auth');
		$this->books = $books;
	}
	
	// list all the entries in the address book
	public function index(Request $request) {
		$books = DB::select('select * from books');
		
//		return view('books.index', [ 'books' => $books ]);
		// return element(s) corresponding to the selected user
		return view('books.index', [ 'books' => $this->books->forUser($request->user()), ]);
	}
	
	// return form to add data
	public function addfrm($id) { return view("books/create", [ 'usrid' => $id ]); }
	
	// add a new entry
	public function insert(Request $request) {
		// get the values
		$name = $request->input('adr_name');
		$mail = $request->input('adr_mail');
		$addr = $request->input('adr_adr');
		$country = $request->input('adr_country');
		$phone = $request->input('adr_phone');
		$userid = $request->input('adr_userid');
		
		// insert data
		echo "<div style='background-color:lightblue; color:darkgray; padding:5px 5px; border-radius:6px'>";
		if ($userid > 0) {
			// some basic validation
			if (empty($name)) {
				echo "You must enter a valid name for each new entry. ";
			} else {
				DB::insert('insert into books (name, usr_id, email, address, country, phone) values(?,?,?,?,?,?)', [$name, $userid, $mail, $addr, $country, $phone]);			
				echo "Record inserted successfully. ";
			}
		} else {
			echo "Error adding user { $userid }! ";
		}
		echo "<a style='background-color:red; color:blue; padding:2px 2px;' href='/home'>Go back</a></div>";
	}

	// add a new entry for laravel 5.1+
	public function store(Request $request) {
		$this->validate($request, [ 'name' => 'required|max:255', ]);
		
		$request->user()->tasks()->create([ 'name' => $request->name, ]);
		
		return redirect('/home');
	}
	
	// return form to edit data
	public function editfrm($id) {
		$data = DB::select('select * from books where id = ?', [$id]);
		
		return view("books/update", [ 'old_data' => $data, ]);
	}
	
	// edit a record
	public function edit(Request $request, $id) {
		// get the values from form
		$name = $request->input('edt_name');
		$mail = $request->input('edt_mail');
		$addr = $request->input('edt_adr');
		$country = $request->input('edt_country');
		$phone = $request->input('edt_phone');
		
		DB::update('update books set name = ?, email = ?, address = ?, country = ?, phone = ? where id = ?', [$name, $mail, $addr, $country, $phone, $id]);
		echo "Record updated successfully.";
//		echo "<a style='background-color:red; color:blue; padding:2px 2px;' href='/home'>Go back</a></div>";
		
		return redirect('/home');
	}
	
	// destroy the given entry
	public function destroy(Request $request, $id) {		
		// delete the entry
		if (DB::delete('delete from books where id = ?', [$id])) {
			echo 'Record ' . $id . ' deleted successfully.';
		} else {
			echo 'Error encountered while trying to delete record ' . $id . '.';
		}
//		echo "<a style='background-color:red; color:blue; padding:2px 2px;' href='/home'>Go back</a></div>";
		
		return redirect('/home');
	}

}
