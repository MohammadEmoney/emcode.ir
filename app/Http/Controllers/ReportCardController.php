<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReportCardRequest;
use App\Http\Requests\UpdateReportCardRequest;
use App\Models\School\ReportCard;

class ReportCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReportCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportCardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School\ReportCard  $reportCard
     * @return \Illuminate\Http\Response
     */
    public function show(ReportCard $reportCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School\ReportCard  $reportCard
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportCard $reportCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReportCardRequest  $request
     * @param  \App\Models\School\ReportCard  $reportCard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportCardRequest $request, ReportCard $reportCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School\ReportCard  $reportCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportCard $reportCard)
    {
        //
    }
}
