<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\achat_pret;
use DB ; 
use \DateTime;

class AchatPretController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function createachatpret()
    {
        return view ('admin.ajouterachat');
    }

    public function index()
    {
        $achatpret=DB::select('Select ap.* , op.matricule, emp.* 
                                from achat_prets ap , operations op, employers emp 
                                where ap.id_operation = op.id
                                And op.matricule = emp.matricule '
                            );
        return view('admin.achatpret', compact('achatpret'));
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
        $dataop = array();
        $data = array(); 
        
        $data['type'] = $request->type;
        $dataop['matricule'] =DB::table('employers')->where('nom', '=', $request->nom)->where('prenom','=', $request->prenom)->value('matricule');
        $dataop['date_benifice']= new DateTime();
        $insert1 = DB::table('operations')->insert($dataop);
        
        $date_benif = DB::select('select date_benifice from operations where id = (select max(id) from operations)');
        dump($date_benif);
        echo($date_benif[0]->date_benifice);
    
        $date1 = strtotime($date_benif); 
        $date2 = strtotime(new DateTime());

        $diff = abs($date2 - $date1);
        $years = floor($diff / (365*60*60*24)); 
  
  
        // To get the month, subtract it with years and
        // divide the resultant date into
        // total seconds in a month (30*60*60*24)
        $months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24)); 

        echo($months);
        
        /*
        $data['titre'] = $request->titre;
        $data['somme_max'] = $request->somme_max;   
        $data['date_fin_prevue'] = new DateTime();
        $data['date_fin_reel'] = new DateTime();
        $data['id_operation']= DB::table('operations')->max('id');
        
        $insert2 = DB::table('achat_prets')->insert($data);
        return redirect()->route('admin.achatpret.index');
        */
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
