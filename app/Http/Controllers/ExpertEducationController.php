<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\EducationDetail;
use App\Models\User;
use Session;
use Auth;

class ExpertEducationController extends Controller
{
    public function store(Request $request)
    {
        $education = new EducationDetail;
        $education->user_id = Auth::user()->id;
        $education->school_name = $request->school_name;
        $education->degree = $request->degree;
        $education->passing_year = $request->passing_year;
        $education->country_id = $request->country_id;
        if ($education->save()) {
            // flash(translate('Your Info has been updated successfully'))->success();
            return redirect()->route('user.profile');
        }
        else {
            // flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function edit($id)
    {
        $education = EducationDetail::findOrFail(decrypt($id));
        if (isExpert()) {
            return view('frontend.default.user.expert.setting.education_edit', compact('education'));
        }
    }

    public function update(Request $request, $id)
    {
        $education = EducationDetail::findOrFail($id);
        $education->school_name = $request->school_name;
        $education->degree = $request->degree;
        $education->passing_year = $request->passing_year;
        $education->country_id = $request->country_id;
        if ($education->save()) {
            // flash(translate('Education Info has been updated successfully'))->success();
            return redirect()->route('user.profile');
        }
        else {
            // flash(translate('Sorry! Something went wrong.'))->error();
            return back();
        }
    }

    public function destroy(Request $request, $id){
        $education = EducationDetail::findOrFail(decrypt($id));
        $education->delete();

        // flash(translate('Education Info has been deleted successfully'))->success();
        return redirect()->route('user.profile');
    }
}
