<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicantData = Applicant::all();
        return view('pages.applicant-list', [
            'applicantData' => $applicantData
        ]);
    }

    public function addApplicant()
    {
        return view('pages.add-applicant');
    }

    public function addApplicantPerform(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'first_name' => ['required', 'max:100'],
            'middle_name' => ['required', 'max:100'],
            'last_name' => ['required', 'max:100'],
            'birth_date' => ['required'],
            'gender' => ['required'],
            'cellphone_no' => ['required', 'max:20'],
            'address' => ['required', 'max:150'],
        ]);

        Applicant::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'cellphone_no' => $request->cellphone_no,
            'address' => $request->address,
        ]);

        return redirect()->route('homepage')->with(['success' => 'New Applicant Record added']);
    }

    public function editApplicant($id)
    {
        $applicantInfo = Applicant::where('id', $id)->first();

        return view('pages.edit-applicant', [
            'applicantInfo' => $applicantInfo
        ]);
    }

    public function editApplicantPerform(Request $request, $id)
    {
        // dd($request->all(), $id);

        $request->validate([
            'first_name' => ['required', 'max:100'],
            'middle_name' => ['required', 'max:100'],
            'last_name' => ['required', 'max:100'],
            'birth_date' => ['required'],
            'gender' => ['required'],
            'cellphone_no' => ['required', 'max:20'],
            'address' => ['required', 'max:150'],
        ]);


        Applicant::where('id', $id)->update([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'cellphone_no' => $request->cellphone_no,
            'address' => $request->address,
        ]);

        return redirect()->route('homepage')->with(['success' => 'Applicant Record updated']);
    }

    public function destroyData($id)
    {
        Applicant::where('id', $id)->delete();

        return redirect()->route('homepage')->with(['success' => 'Applicant Record Deleted']);
    }
}
