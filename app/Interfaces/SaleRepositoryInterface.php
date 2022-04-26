<?php

namespace App\Interfaces;

interface SaleRepositoryInterface
{
    public function getAllSalesRefs();
    public function getRefById($refId);
    public function createRef(array $refDetails);
    public function updateRef($refId, array $newDetails);
    public function deleteRef($refId);
}
