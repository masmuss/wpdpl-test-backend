<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class FoodController extends Controller
{
	private $model;

	public function __construct(Food $model)
	{
		$this->model = $model;
	}

	public function index(): JsonResponse
	{
		$foods = $this->model->latest()->get();
		return Response::json($foods, 200);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Food $food): JsonResponse
	{
		return Response::json($food, 200);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Food $food)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Food $food)
	{
		//
	}
}
