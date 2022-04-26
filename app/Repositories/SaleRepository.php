<?php

namespace App\Repositories;

use App\Interfaces\SaleRepositoryInterface;
use App\Models\Sale;

class SaleRepository implements SaleRepositoryInterface
{
    public function getAllSalesRefs()
    {
        return Sale::all();
    }

    public function getRefById($refId)
    {
        return Sale::findOrFail($refId);
    }

    public function createRef(array $refDetails)
    {
        return Sale::create($refDetails);
    }

    public function updateRef($refId, array $newDetails)
    {
        return Sale::whereId($refId)->update($newDetails);
    }

    public function deleteRef($refId)
    {
        Sale::destroy($refId);
    }

}
