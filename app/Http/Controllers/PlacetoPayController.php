<?php

namespace App\Http\Controllers;

use App\Pagosplacetopay;
use Illuminate\Http\Request;
use Dnetix\Redirection;
use Dnetix\Redirection\PlacetoPay;



class PlacetoPayController extends Controller
{


	

	public function Payment(Request $request){

           
            $request->validate([
                    'monto' => 'required'
            ]);

            $monto = $request->get('monto');

  
	

        $placetopay = new PlacetoPay([  		

			'login' => config('placetopay.key_id'),  	
    		'tranKey' => config('placetopay.secret_key_id'),
    		'url' => 'https://test.placetopay.com/redirection',

		]);

		$reference = 'TEST_' . time();
        $description = 'Testing payment';
        $moneda = 'COP';
        
					$request = [
   					 'payment' => [
        			 'reference' => $reference,
        			  'description' => $description,
        			'amount' => [
            		'currency' =>  $moneda,
            		'total' => $monto,
        ],
    ],
    	'expiration' => date('c', strtotime('+2 days')),
    	'returnUrl' => 'https://placetopaytest.tk/response?reference=' . $reference,
    	'ipAddress' => '127.0.0.1',
    	'userAgent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36',
	];


		


	$response = $placetopay->request($request);

			if ($response->isSuccessful()) {
    		
    		

               
                $this->Store($reference,$response->requestId(),$description,$moneda,$monto);
    		      
			
				
			         return redirect($response->processUrl());


			} else {
    		
    		
    				return $response->status()->message();
		

			}	





	}


    public function Store($reference,$sesion,$description,$moneda,$monto){

            $Pago = new Pagosplacetopay;
            $Pago->reference = $reference;
            $Pago->sesion = $sesion;
            $Pago->description = $description;
            $Pago->moneda = $moneda;
            $Pago->monto = $monto;
            $Pago->status = 'Pendiente';
            $Pago->save();

    }



	
}


