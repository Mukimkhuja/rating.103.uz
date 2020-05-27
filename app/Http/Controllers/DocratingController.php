<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docrating;
use App\Http\Requests\DocratingRequest;

class DocratingController extends Controller
{
    public function dsubmit(DocratingRequest $request)
    {
        $drat = new Docrating();

        $drat->Lst = $request->input('lst');
        $drat->Qk = $request->input('qk');
        $drat->Nqb = $request->input('nqb');
        $drat->Nob = $request->input('nob');
        $drat->Ncb = $request->input('ncb');
        $drat->Nmsh = $request->input('nmsh');
        $drat->Ntch = $request->input('ntch');
        $drat->Nnt = $request->input('nnt');
        $drat->Nut = $request->input('nut');
        //$drat->drating=$request->input('drating');

        $drat->user_name = $request->input('user');

        $drat->save();

        return redirect()->route('docrating-page')->with('success', 'Киритилган маълумотлар муваффаққиятли сақланди!');

    }
}
