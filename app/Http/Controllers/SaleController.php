<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalesRefRequest;
use Illuminate\Http\Request;
use App\Models\Sale;
use App\Interfaces\SaleRepositoryInterface;
use Exception;

class SaleController extends Controller
{

    private SaleRepositoryInterface $salesRefRepository;

    public function __construct(SaleRepositoryInterface $salesRefRepository)
    {
        $this->salesRefRepository = $salesRefRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $representatives = $this->salesRefRepository->getAllSalesRefs();

        return view('sales-ref.index', compact('representatives'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales-ref.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(SalesRefRequest $request)
    {

     try{
        $refDetails = $request->validated();
        $this->salesRefRepository->createRef($refDetails);

        return redirect()->route('sales_ref.index')->with('success', 'Sales Representative saved!');

     }catch(Exception $e){
        return $this->response(500,'Error save resource.');
     }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sales_ref
     */
    public function show(Request $request, Sale $sales_ref)
    {

     try{
       $ref = $this->salesRefRepository->getRefById($sales_ref->id);

        return view('sales-ref.view', compact('ref'));

     }catch(Exception $e){
        return $this->response(500,'Error show resource.');
     }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sales_ref
     */
    public function edit(Sale $sales_ref)
    {
        return view('sales-ref.edit',compact('sales_ref'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function update(Request $request, SalesRefRequest $request1)
    {

      try{
        $refId = $request->id;
        $refDetails =  $request1->validated();

        $this->salesRefRepository->updateRef($refId, $refDetails);

        return redirect()->route('sales_ref.index')->with('success', 'Sales Representative updated!');

     }catch(Exception $e){
        return $this->response(500,'Error update resource.');
     }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sales_ref
     */
    public function destroy( Sale $sales_ref)
    {
     try{
        $refId = $sales_ref->id;
        $this->salesRefRepository->deleteRef($refId);

        return redirect()->route('sales_ref.index')->with('success', 'Sales Representative deleted!');

     }catch(Exception $e){
        return $this->response(500,'Error delete resource.');
     }
    }
}
