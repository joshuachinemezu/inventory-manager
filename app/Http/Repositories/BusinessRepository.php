<?php

namespace App\Http\Repositories;

use App\Model\Business;
use App\Repositories\Contract\InventoryInterface;

class BusinessRepository implements InventoryInterface
{
	public function findById($id)
	{
		return Business::find($id);
	}

	public function find($id, $columns)
	{
		return Business::find($id)
			->where($columns);
	}
 
    public function findBy($field, $value, $columns)
    {
    	return Business::where($field, $value)
			->where($columns);
    }

	pubic function findWhere($field, $value)
	{
		return Business::where($field, $value);
	}

	public function findAll()
	{
		return Business::all();
	}

	public function create(array $columns)
	{
		return Business::create($columns);
	}

	public function update(array $data, $id)
	{
		return Business::find($id)
			->update($data);
	}
}