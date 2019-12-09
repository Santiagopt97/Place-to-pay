<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\InvoiceReport;
class InvoiceReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invoiceReport.index', [
            'invoiceReports' => InvoiceReport::all()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoiceReport.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate( [
            'title' => 'required|min:3'
        ]);
        $report = new InvoiceReport();
        $report->title = $validData['title'];
        $report->save();
        return redirect('/invoice_reports');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceReport $invoiceReport)
    {
        return view('invoiceReport.show', [
            'report' => $invoiceReport
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = InvoiceReport::findOrFail($id);
        return view('invoiceReport.edit', [
            'report' => $report
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $report = InvoiceReport::find($id);
        $report->title = $request->get('title');
        $report->save();
        return redirect('/invoice_reports');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = InvoiceReport::find($id);
        $report->delete();
        return redirect('/invoice_reports');
    }
    public function confirmDelete($id) {
        $report = InvoiceReport::find($id);
        return view('invoiceReport.confirmDelete', [
            'report' => $report
        ]);
    }
}