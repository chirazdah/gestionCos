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

    private function somme_a_retirer($somme)
    {
        //verifier si le montant est inferieur a salaire*40% alors somme_a_retirer = somme 
        //si non on doit diviser la somme / salaire*40% nlqaw chhal les mois on insert ladate debut et la date fin reel et la date prevue
        

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
        $matricule =DB::table('employers')->where('nom', '=', $request->nom)->where('prenom','=', $request->prenom)->value('matricule');
        
        //recupérer le salaire de l'employé en question
        $salaire = DB::table('employers')->where('matricule', '=', $matricule)->value('salaire');
                
        //selectionner la dernière date de benifice de l'employ
        $date_benif = DB::select('select max(date_benifice) as date_benifice from operations where matricule = ' . "'" . $matricule. "'" . '');
                
        $dateBenifStr = new DateTime($date_benif[0]->date_benifice);
        $dateNow = new DateTime();
        $date1 = strtotime($dateBenifStr->format('Y-m-d')); 
        $date2 = strtotime($dateNow->format('Y-m-d'));
        
        $diff = abs($date2 - $date1);
        //transformer la différence en années
        $years = floor($diff / (365*60*60*24)); 
        //transformation en mois
        $months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24)); 

        //calculer la somme à retirer
        $somme_retirer = (40*$salaire)/100;
        //Calculer le nombre de mois 
        $temp_nb_mois = ($request->somme_max)/$somme_retirer;
        if (($request->somme_max) % $somme_retirer == 0) {
            $nbMois = intval($temp_nb_mois);
        }else{
            $nbMois = intval($temp_nb_mois) + 1;
        }

        $dateFin = date('Y-m-d', strtotime("+" . $nbMois . "months", strtotime($dateBenifStr->format('Y-m-d'))));
        
        $derniere_somme_retirer = $request->somme_max - ($somme_retirer * intval($temp_nb_mois));

        if($date_benif[0]->date_benifice == null or $months >= 3){
            //Insertion d'une nouvelle opération
            $dataop['matricule'] = $matricule;
            $dataop['date_benifice']= new DateTime();
            $insert1 = DB::table('operations')->insert($dataop);
            //Insertion de l'achatPret
            $data['type'] = $request->type;
            $data['titre'] = $request->titre;
            $data['somme_max'] = $request->somme_max;   
            $data['date_fin_prevue'] = $dateFin;
            $data['date_fin_reel'] = $dateFin;
            $data['id_operation']= DB::table('operations')->max('id');
            
            $insert2 = DB::table('achat_prets')->insert($data);
                        
            //Insertion dans la table paiment
            for ($i=0; $i < $nbMois ; $i++) { 
                $dataPaiement = array();
                $dataPaiement['matricule'] = $matricule;
                $dataPaiement['id_achat'] = DB::table('achat_prets')->max('id_achat');
                if ($i == $nbMois-1) {
                    if(is_int($temp_nb_mois)){
                        $dataPaiement['somme_retirer'] = $somme_retirer;
                    }else{
                        $dataPaiement['somme_retirer'] = $derniere_somme_retirer;
                    }
                    
                }else{
                    $dataPaiement['somme_retirer'] = $somme_retirer;
                }
                $dataPaiement['date_debut'] = date('Y-m-d', strtotime("+" . ($i+1) . "months", strtotime($dateBenifStr->format('Y-m-d'))));
                $insertPaiement = DB::table('paiements')->insert($dataPaiement);
            }
            
            return redirect()->route('admin.achatpret.index');
        }
        else{
            return $this->createachatpret();
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
