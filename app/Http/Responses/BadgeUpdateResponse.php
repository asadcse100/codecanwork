<?php


namespace App\Http\Responses;


use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class BadgeUpdateResponse implements Responsable
{
    protected $request, $id, $repository;

    public function __construct(Request $request, $repository, $id)
    {
        $this->request = $request;
        $this->repository = $repository;
        $this->id = $id;
    }

    public function toResponse($request)
    {
        $badge = $this->repository->update($this->id, $this->request->except('icon' , '_method', '_token'));

        if ($this->request->hasFile('icon'))
            $this->repository->update($this->id, [
                'icon' => $this->request->file('icon')->store('uploads/badge_icon')
            ]);
        if($badge){
            flash(__('New Badge has been updated successfully!'))->success();
            if ($this->request->role_id == "2") {
                return redirect()->route('badges.index');
            }
            elseif($this->request->role_id == "3") {
                return redirect()->route('client_badges_index');
            }
        }
        else {
            flash(__('Something went wrong!'))->warning();
            return back();
        }
    }
}
