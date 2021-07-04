<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class aideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aides=DB::select('Select ai.* , op.id, emp.* 
        from aides ai , operations op, employers emp 
        where ai.id_operation = op.id
        And ai.matricule = emp.matricule');

        return view('admin.aide', compact('aides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createaide()
    {
        return view ('admin.ajouteraide');
    }
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
        $dataop = array();
        $data = array(); 
        $dataop['matricule'] =DB::table('employers')->where('nom', '=', $request->nom)->where('prenom','=', $request->prenom)->value('matricule');
        $data['matricule'] =DB::table('employers')->where('nom', '=', $request->nom)->where('prenom','=', $request->prenom)->value('matricule');
        $dataop['date_benifice']= $request->date_benifice;
        $data['titre'] = $request->titre;
        $data['montant'] = $request->montant; 
        $data['id_operation']= DB::table('operations')->max('id');
        $insert1 = DB::table('operations')->insert($dataop);
        $insert2 = DB::table('aides')->insert($data);
        return redirect()->route('admin.aide.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
