<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class TagController extends Controller
{
    /**
     * @param Request $request
     *
     * @return Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
     */
    public function store(Request $request): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        $request->validate([
           'name' => 'required|string|max:65'
        ]);

        try{
            Tag::create($request->all());

        }catch (QueryException $e){
            return back()->with('error', 'Crear un nuevo tag no fue posible');
        }


        return redirect('/');
    }

    /**
     * @param Tag $tag
     *
     * @return Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
     */
    public function destroy(Tag $tag): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        $wasDeleted = $tag->delete();

        if($wasDeleted){
            return redirect('/');
        }else{
            return back()->with('error', 'Eliminar el tag no fue posible');
        }
    }
}
