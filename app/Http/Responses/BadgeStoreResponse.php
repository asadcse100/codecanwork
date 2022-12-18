<?php


namespace App\Http\Responses;


use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class BadgeStoreResponse implements Responsable
{
    protected $request, $repository;

    public function __construct(Request $request, $repository)
    {
        $this->request = $request;
        $this->repository = $repository;
    }

    public function toResponse($request)
    {
        $badge = $this->repository->create($this->request->except('icon'));

        if ($this->request->hasFile('icon'))
            $this->repository->update($badge->id, [
               'icon' => $this->request->file('icon')->store('uploads/badge_icon')
            ]);

        if($badge) {

            flash(__('New Badge has been added successfully!'))->success();

            if ($this->request->role_id == "expert") {
                return redirect()->route('badges.index');
            }
            elseif ($this->request->role_id == "client") {
                return redirect()->route('client_badges_index');
            }
        }
        else {
            flash(__('Something went wrong!'))->warning();
            return back();
        }
    }

    protected function validate()
    {

    }
}
