<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JobratingRequest;
use App\Models\Jobrating;
use Illuminate\Support\Facades\Redirect;

class JobratingController extends Controller
{
    public function submit(JobratingRequest $req)
    {
        $jrat = new Jobrating();
        $jrat->npipl = $req->input('npipl');
        $jrat->nfabc = $req->input('nfabc');
        $jrat->nfbc = $req->input('nfbc');
        $jrat->nab_c = $req->input('nab_c');
        $jrat->nfgps = $req->input('nfgps');
        $jrat->nfvr = $req->input('nfvr');
        $jrat->npvr = $req->input('npvr');
        $jrat->nfpara = $req->input('nfpara');
        $jrat->nppara = $req->input('nppara');
        $jrat->nffeld = $req->input('nffeld');
        $jrat->npfeld = $req->input('npfeld');
        $jrat->stv5_7 = $req->input('stv5_7');
        $jrat->stv5_7_2 = $req->input('stv5_7_2');
        $jrat->stv7_10 = $req->input('stv7_10');
        $jrat->stv7_10_1 = $req->input('stv7_10_1');
        $jrat->stv10 = $req->input('stv10');
        $jrat->stv10_pr = $req->input('stv10_pr');
        $jrat->stf5_7 = $req->input('stf5_7');
        $jrat->stf5_7_2 = $req->input('stf5_7_2');
        $jrat->stf7_10 = $req->input('stf7_10');
        $jrat->stf7_10_1 = $req->input('stf7_10_1');
        $jrat->stf10 = $req->input('stf10');
        $jrat->stf10_pr = $req->input('stf10_pr');
        $jrat->t11 = $req->input('t11');
        $jrat->t12 = $req->input('t12');
        $jrat->t21 = $req->input('t21');
        $jrat->t22 = $req->input('t22');
        $jrat->nfv = $req->input('nfv');
        $jrat->nv = $req->input('nv');
        $jrat->nfav = $req->input('nfav');
        $jrat->nfl0 = $req->input('nfl0');
        $jrat->nfl1 = $req->input('nfl1');
        $jrat->nfpv = $req->input('nfpv');
        $jrat->nop = $req->input('nop');
        $jrat->npr = $req->input('npr');

        $jrat->save();
        return redirect()->route('{{ jobrating_page }}');
    }
}
