<?php

// src/AppBundle/Controller/FraudcheckController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class FraudcheckController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        // if the form was submitted
        if(isset($_POST['submit']))
        {
            // form validation begins here
            $result = $this->validateForm($_POST);
            
            // if the validation returned no errors
            if(!$result['errors'] && isset($result['data']))
            {
                // process the return of the fraud check logic
                $is_fraudulent = $this->compareToPreviousData($result['data']);

                // if the transaction looks bad
                if($is_fraudulent === false)
                {
                    return $this->render('fraudcheck.html.twig', array('result' => 'This transaction appears fraudulent!', 'errors' => null)); 
                }
                // return success
                else
                {
                    // trim off the submit element for display
                    array_pop($result['data']);
                    return $this->render('receipt.html.twig', array('result' => 'Transaction OK!', 'errors' => null, 'datas'=> $result['data'])); 
                }
            }
            // validation returned errors
            else
            {
                return $this->render('fraudcheck.html.twig', array('result' => null, 'errors' => $result['errors'])); 
            } 
        }
        // no post, inital load
        else
        {
            return $this->render('fraudcheck.html.twig', array('result' => null, 'errors' => null));  
        }
    }

    private function compareToPreviousData($new_data)
    {
        // old data goes here
        $existing_data = array(
            array('id' => 1, 'name' => 'Shell Gas Station', 'amount' => '32.54', 'address' => '1234 Test Lane', 'city' => 'Detroit', 'state' => 'MI', 'zip' => '48226', 'date' => '1342459800'),
            array('id' => 2, 'name' => 'Olive Garden', 'amount' => '45.23', 'address' => '5523 Oak Street', 'city' => 'Royal Oak', 'state' => 'MI', 'zip' => '48067', 'date' => '1342467900'),
            array('id' => 3, 'name' => 'Starbucks Coffee', 'amount' => '4.85', 'address' => '5111 Maple Drive', 'city' => 'Royal Oak', 'state' => 'MI', 'zip' => '48067', 'date'=> '1342512300'),
            array('id' => 4, 'name' => 'Target', 'amount' => '24.90', 'address' => '9913 Pinewood Avenue', 'city' => 'Ferndale', 'state' => 'MI', 'zip' => '48220', 'date' => '1342519980')
        );
        // $new_data contains name, address, amount, city, state and zip, without date

        foreach($existing_data as $existing)
        {
        
            $visited_states[] = $existing['state'];
            $existing_amounts[] = $existing['amount'];
        }

         // fraud check #1: if amount greater than largest exiting amount * 2
        $sorted_amounts = rsort($existing_amounts);
        if($new_data['amount'] > $existing_amounts[0]*2) return false;

        // fraud check #2: if a state that's never been visited
        if(!in_array($new_data['state'], $visited_states)) return false;

        return true;
    }

    private function validateForm($data)
    {
        $valid_states = array('AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 
                                        'GU', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 
                                        'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 
                                        'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 'RI', 'SC', 'SD', 
                                        'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY', 'AE', 'AA', 'AP');

        // check if all fields are provided
        if($data['name'] == '' || $data['amount'] == '' || $data['address'] == '' || $data['city'] == '' || $data['state'] == '' || $data['zip'] == '')
        {
            $errors = array("All fields are required.");
            $success = false;
            $data = null;
        }
        // check if amount provided is numeric
        elseif(!is_numeric($data['amount']) || $data['amount'] <= 0)
        {
            $errors = array("The amount must be numeric and positive.");
            $success = false;
            $data = null;
        }
        // check if state is a valid 2-character US state
        elseif(!in_array($data['state'], $valid_states))
        {
            $errors = array("Please provide a valid two character US state.");
            $success = false;
            $data = null;
        }
        // check if zip is valid
        elseif(!preg_match('/^([0-9]{5}(?:-[0-9]{4})?)*$/', $data['zip']))
        {
            $errors = array("Please provide a valid ZIP code.");
            $success = false;
            $data = null;
        }
        else
        {
            $errors = null;
            $success = true;
        }

        return array('success' => $success, 'errors' => $errors, 'data' => $data);
    }
}