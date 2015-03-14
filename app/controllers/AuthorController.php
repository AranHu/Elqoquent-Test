<?php

class AuthorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /author
	 *
	 * @return Response
	 */
	public function index()
	{
		//主表测试，一对一，一对多，取值
		$phoneList = Phone::all();

		$books = Author::find(1)->belongsToManyBooks;
		echo $books;
		return View::make('author.index')
			->with('authorList',Author::all())
			->with('phoneList',$phoneList);

//		return View::make('author.index')->with('phoneList',$phoneList);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /author/create
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /author
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /author/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /author/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return $id.'->edit';
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /author/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /author/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}