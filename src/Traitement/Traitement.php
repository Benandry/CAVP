<?php

namespace App\Traitement;

class Traitement {
  public function __construct()
  {
      $x = 21;
      return $x;
  }
  public function setSize($input, $current,$dbinputfield){
    if ($dbinputfield != 'sortie' && $dbinputfield != 'entrer' && $dbinputfield != 'debut' ) {
      dd('argument non approprie!!! '. $dbinputfield);
    }else{
      //echo ($dbinputfield);
    }
    $ordreValue = array();
    $cleMifanarakaAmOut = array();
    //dd($current);
    foreach  ($input as $key3 => $value3){
      foreach ($value3 as $key4 => $value4){
        if ($key4 == 'ordreProd' ) {
          array_push($ordreValue, $value4);
        }
      }
    }
    //dd($ordreValue);
    //dd($input);
      // maka ny key(position) mifanaraka amin courant 
      foreach  ($ordreValue as $value){
        foreach ($current as $key3 => $value3){
          if ($value3['ordreProd'] == $value ) {
            array_push($cleMifanarakaAmOut, $key3);
          }
        }
      }
      //dd($cleMifanarakaAmOut);
      // mametraka ny value ao am sort
      $sortValues = array();
      $sortOrdres = array();
      foreach  ($input as $key => $value){
        foreach ($value as $key2 => $value2){
          if ($key2 == $dbinputfield) {
            //dd('tfiditra');
            array_push($sortValues, $value2);
          }elseif($key2 == 'ordre'){
            array_push($sortOrdres,$value2);//tsy miasa
          }
        }
      }
      //dd($sortValues);
      // mametraka ao am out 
      $sortie = array();
      $k = 0;
      if(count($cleMifanarakaAmOut) > 0){
        for ($j = 0; $j  < count($cleMifanarakaAmOut); $j ++) { 
          for ($i=$k; $i < count($current); $i++) { 
            if ($i == $cleMifanarakaAmOut[$j]) {
              array_push($sortie,array($sortValues[$j]));
              if ($j < count($cleMifanarakaAmOut)-1) {
                $k = $i + 1;
                break;
              }
             // dd($sortie);
            }else {
              //dd('ao');
              array_push($sortie, array(0));
            }
          }
        }
      }
      //dd($sortie);
      return $sortie;
  }
  public function index($init, $enter,$out, $current, $beginCurrentMonth = NULL)
  {
      // ======== Initiale ========
      $initial = array();
      $entree = array();
      $beginMonth = array();
      //dd($current);
      foreach ($current as $key => $value) {
        foreach ($value as $key2 => $value2) {
          if ($key2 =='initiale') {
            $x = $init[$key]['initiale'];
            array_push($initial,array($x));
          }
          if ($key2 =='entrer') {
            if ($key < count($enter)) {
              $x = $enter[$key]['entrer'];
              array_push($entree,array($x));
            }else{
              array_push($entree,array(0));
            }   
          }
        }
      }
      //dd($initial);
      return [
          'courant' =>$current,
          'initial' =>$initial,
          'beginCurrent' =>$beginMonth,
      ];
  }   
    /* *************************************************************************************************************** */
    public function setSizeAll($input, $current,$dbinputfield){
      if ($dbinputfield != 'sortie' && $dbinputfield != 'entrer' && $dbinputfield != 'debut' ) {
        dd('argument non approprie!!! '. $dbinputfield);
      }else{
        //echo ($dbinputfield);
      }
        //dd($dbinputfield);
        //dd($input);
      $ordreValue = array();
      foreach  ($input as $key3 => $value3){
        foreach ($value3 as $key4 => $value4){
          if ($key4 == 'nomProduit' ) {
            array_push($ordreValue, $value4);
          }
        }
      }
     // dd($ordreValue);
      //dd($current);
        // maka ny key(position) mifanaraka amin courant 
        $prodMifanarakaAmOut = array();
        foreach  ($ordreValue as $value){
          foreach ($current as $key3 => $value3){
            if ($value3['nomProduit'] == $value ) {
              array_push($prodMifanarakaAmOut, $key3);
            }
          }
        }
      //dd($prodMifanarakaAmOut);
        // mametraka ny value ao am sort
        $sortValues = array();
        $valeur = array();
        foreach  ($input as $key => $value){
          foreach ($value as $key2 => $value2){
            if ($key2 == $dbinputfield) {
              //dd('alleert zalah aaaaa');
              array_push($sortValues, $value2);
            }
          }
        }
        foreach  ($input as $key => $value){
          foreach ($value as $key2 => $value2){
            if ($key2 == 'valeur') {
              //dd('alleert zalah aaaaa');
              array_push($valeur, $value2);
            }
          }
        }
        //dd($sortValues);
        // mametraka ao am out 
        $sortie = array();
        $valueInput = array();
        $k = 0;
        if(count($prodMifanarakaAmOut) > 0){
          for ($j = 0; $j  < count($prodMifanarakaAmOut); $j++) { 
            for ($i=$k; $i < count($current); $i++) { 
              if ($i == $prodMifanarakaAmOut[$j]) {
                array_push($valueInput,array($valeur[$j]));
                array_push($sortie,array($sortValues[$j]));
                if ($j < count($prodMifanarakaAmOut)-1) {
                  $k = $i + 1;
                  break;
                }
               // dd($sortie);
              }else {
                array_push($sortie, array(0));
                array_push($valueInput,array(0));
              }
            }
          }
        }
        return [
          'quantite' => $sortie,
         'valeur' => $valueInput];
    }
    /* ***********************************************************Begin Initiale***************************************************************************************** */
                            
    public function indexI($init, $enter,$out, $current, $beginCurrentMonth = NULL)
    {
        // ======== Initiale ========
        $initial = array();
        $entree = array();
        $beginMonth = array();
        //dd($current);
        foreach ($current as $key => $value) {
          foreach ($value as $key2 => $value2) {
            if ($key2 =='initiale') {
              $x = $init[$key]['initiale'];
              array_push($initial,array($x));
            }
            if ($key2 =='entrer') {
              if ($key < count($enter)) {
                $x = $enter[$key]['entrer'];
                array_push($entree,array($x));
              }else{
                array_push($entree,array(0));
              }   
            }
          }
        }
        //dd($initial);
        return [
            'courant' =>$current,
            'initial' =>$initial,
            'beginCurrent' =>$beginMonth,
        ];
    }   

    /* ***********************************************************End Initiale***************************************************************************************** */


}
































