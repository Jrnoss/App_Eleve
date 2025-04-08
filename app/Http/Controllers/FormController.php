<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   public function create(){
    return view('tests.add_product');
   }
   public function store(Request $request){
      //Validation des champs de saisie
   $request->validate([
      'designation' =>'required',
      'prix' =>'required',
   ]);
   //Initialiser un tableau
   $tabs=[
      [
         'designation'=>$request->designation,
         'prix'=>$request->prix,
      ],
   ];


//Et apres tu retourne le tableau sur la page
return view('tests.test',compact('tabs'));

}
}