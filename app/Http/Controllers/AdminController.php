<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class AdminController extends Controller
{
    public function index()
    {
        $reports = Report::with('user', 'section')->get();
        return view('admin.index', compact('reports'));
    }

    public function approve($id)
    {
        $report = Report::findOrFail($id);
        $report->status = 'approved';
        $report->save();

        return back()->with('success', 'Заявка одобрена!');
    }

    public function reject($id)
    {
        $report = Report::findOrFail($id);
        $report->status = 'rejected';
        $report->save();

        return back()->with('success', 'Заявка отклонена!');
    }
}
