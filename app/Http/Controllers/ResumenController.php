<?php

namespace App\Http\Controllers;

use App\Pagosplacetopay;
use Illuminate\Http\Request;
use Dnetix\Redirection;
use Dnetix\Redirection\PlacetoPay;

//use Dnetix\Redirection\Message\RedirectInformation;

class ResumenController extends Controller
{
    public function VerificarPago(){



    	 $placetopay = new PlacetoPay([  		

			'login' => config('placetopay.key_id'),  	
    		'tranKey' => config('placetopay.secret_key_id'),
    		'url' => 'https://test.placetopay.com/redirection',

		]);


		

		$ref = $_GET['reference'];
		$consulta = $this->ConsultaSesion($ref);
		$requestId = $consulta->sesion;
	
   
    	try {


    		$response = $placetopay->query($requestId);


    		if ($response->isSuccessful()) {
      		  // In order to use the functions please refer to the RedirectInformation class
        		if ($response->status()->isApproved()) {
            // The payment has been approved
   
         		   $status = 'Aprobado';
         		   $this->ConfirmarStatus($ref ,$status);
         		     return redirect('/resumen');
        
           			 
            // This is additional information about it
           
            	

		        } else {
     

            	$status = 'Cancelado';
         		   $this->ConfirmarStatus($ref ,$status);
         		    return redirect('/resumen');
        
        		}
     			
    
    			} else {
       				 // There was some error with the connection so check the message
       				 print_r($response->status()->message() . "\n");
        			echo "<BR>";
  					  }
				} catch (Exception $e) {
    			var_dump($e->getMessage());
			}







    		

    }


    public function ConsultaSesion($ref){

    	  return Pagosplacetopay::where('reference', $ref)->first();


    } 


    public function ConfirmarStatus($ref,$status){

    		
	return Pagosplacetopay::where('reference', $ref)
	->update(['status' => $status]);

    }


    public function ResumenTransations(){


    	$Pagos = Pagosplacetopay::all();
    	return view('Transactions.Resumen', compact('Pagos'));


    }




}
