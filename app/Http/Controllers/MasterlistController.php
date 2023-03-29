<?php

namespace App\Http\Controllers;

use App\Models\Masterlist;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MasterlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masterlists = Masterlist::all();

        return Inertia::render(
            'Masterlist/Index',
            [
                'masterlist' => $masterlists
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render(
            'Masterlist/Create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'emp_num' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'salarygrade' => 'required|string|max:255',
            'office' => 'required|string|max:255',
        ]);
        Masterlist::create([
            'emp_num' => $request->emp_num,
            'lname' => $request->lname,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'position' => $request->position,
            'salarygrade' => $request->salarygrade,
            'office' => $request->office
        ]);
        sleep(1);

        return redirect()->route('masterlist.index')->with('message', 'Listing Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Masterlist $masterlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Masterlist $masterlist)
    {
        return Inertia::render(
            'Masterlist/Edit',
            [
                'masterlist' => $masterlist
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Masterlist $masterlist)
    {
        $request->validate([
            'emp_num' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'mname' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'salarygrade' => 'required|string|max:255',
            'office' => 'required|string|max:255',
        ]);

        $masterlist->emp_num = $request->emp_num;
        $masterlist->lname = $request->lname;
        $masterlist->fname = $request->fname;
        $masterlist->mname = $request->mname;
        $masterlist->position = $request->position;
        $masterlist->salarygrade = $request->salarygrade;
        $masterlist->office = $request->office;
        $masterlist->save();
        sleep(1);

        return redirect()->route('masterlist.index')->with('message', 'Entry Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Masterlist $masterlist)
    {
        $masterlist->delete();
        sleep(1);

        return redirect()->route('masterlist.index')->with('message', 'Entry Delete Successfully');
    }
}
