<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\JsonResponse;
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

	public function show(Food $food): JsonResponse
	{
		return Response::json($food, 200);
	}

	public function search($query): JsonResponse
	{
		$foods = $this->model->where('name', 'like', '%' . $query . '%')->get();
		return Response::json($foods, 200);
	}
}
