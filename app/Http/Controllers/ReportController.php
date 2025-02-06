<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function showApplicationForm()
    {
        $sections = Section::all();
        return view('report.apply', compact('sections'));
    }

    public function submitApplication(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'theme' => 'required|string|max:255',
            'section_id' => 'required|exists:sections,id',
        ]);

        Report::create([
            'fullname' => $request->fullname,
            'theme' => $request->theme,
            'section_id' => $request->section_id,
            'user_id' => Auth::id(),
            'status' => 'pending',
        ]);

        return redirect('/')->with('success', 'Заявка успешно отправлена!');
    }
}
