<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationRequest;
use App\Models\Education;
use App\Models\User;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $education = Education::when($request->input('search'), function ($query, $search) {
            return $query->where('institution', 'like', "%{$search}%")
                ->orWhere('degree', 'like', "%{$search}%");
        })->paginate(10)->onEachSide(1);

        return view('website.pages.education.index', [
            'education' => $education,
            'title' => 'Education',
            'titleContent' => 'Education',
            'li_1' => 'Education',
            'subTitleContent' => 'List',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.pages.education.create', [
            'title' => 'Education',
            'titleContent' => 'Education',
            'li_1' => 'Education',
            'subTitleContent' => 'Create New Education',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationRequest $request, User $user)
    {
        $data = $request->validate();

        dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        //
    }
}
