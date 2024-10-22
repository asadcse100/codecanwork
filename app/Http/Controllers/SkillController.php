<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\ProfessionalType;

class SkillController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:show expert skills'])->only('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['skills'] = Skill::latest()->paginate(10);
        $data['category'] = ProfessionalType::where('status', 1)->get();
        return view('admin.default.expert.skills.index', $data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill = new Skill;
        $skill->name = $request->name;
        if ($skill->save()) {
            flash(translate('New Skill has been inserted successfully'))->success();
            return redirect()->route('skills.index');
        }
        else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::findOrFail(decrypt($id));
        return view('admin.default.expert.skills.edit', compact('skill'));
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
        $skill = Skill::findOrFail($id);
        $skill->name = $request->name;
        if ($skill->save()) {
            flash(translate('Skill has been Updated successfully'))->success();
            return redirect()->route('skills.index');
        }
        else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        if(Skill::destroy($id)){
            flash(translate('Skill Info has been deleted successfully'))->success();
            return redirect()->route('skills.index');
        }
        else {
            flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }
}
