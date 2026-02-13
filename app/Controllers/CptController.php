<?php

namespace App\Controllers;

use App\Models\CheckAirports;
use CodeIgniter\Controller;

use App\Models\CptdirModel;
use App\Models\CptModel;
use App\Models\CptmilesModel;
use App\Models\CptcountyModel;
use App\Models\CptwaitingModel;
use App\Models\CptweightModel;
use App\Models\Cptchargesmodel;
use App\Models\CptmilesranModel;
use App\Models\CptweightranModel;
use App\Models\CptwaitingranModel;

class CptController extends BaseController

{


    public function __construct()
    {
        $this->cptdirModel = new CptdirModel();
        $this->cptModel = new CptModel();
        $this->cptmilesModel = new CptmilesModel();
        $this->cptmilesranModel = new CptmilesranModel();
        $this->cptcountyModel = new CptcountyModel();
        $this->cptwaitingModel = new CptwaitingModel();
        $this->cptweightModel = new CptweightModel();
        $this->cptweightranModel = new CptweightranModel();
        $this->cptchargesmodel = new Cptchargesmodel();


        $this->cptwaitingranModel = new CptwaitingranModel();
    }


    public function CptDir()
    {

        $data['cpt_records'] = $this->cptdirModel->GetCptDirData();

        // echo "<pre>";
        // print_r($data);
        // die;

        return view('cpt/cptdir', $data);
    }



    public function GetUserallData()
    {

        $id = $_GET['id'];
        $data['cptrecord_data'] = $this->cptModel->GetCptRecordsById($id);
        $data['milesfor'] = $this->cptmilesModel->GetmilesforRecord($id);
        $data['milesran'] = $this->cptmilesranModel->GetmilesranRecord($id);
        $data['weightfor'] = $this->cptweightModel->GetweightRecord($id);
        $data['weightran'] = $this->cptweightranModel->GetweightranRecord($id);
        $data['waitingfor'] = $this->cptwaitingModel->GetwaitingRecord($id);
        $data['waitingran'] = $this->cptwaitingranModel->GetwaitingranRecord($id);
        $data['cptCharges'] = $this->cptchargesmodel->GetCptchargesDatabyid($id);
        $data['cptcounty'] = $this->cptcountyModel->GetcountyRecord($id);
        $data['cpt_recordsdata'] = $this->cptModel->GetCptRecordsById($id);



        return json_encode($data);
    }


    public function Cpt($id)
    {


        $data['cpt_data'] = $this->cptModel->GetCptDataById($id);
        $data['cpt_namerecords'] = $this->cptdirModel->GetCptDirDatabyid($id);


        // echo  "<pre>";
        // print_r($data['cpt_recordsdata']);
        // die;

        return view('cpt/cpt', $data);
    }


    public function AddCptData()
    {

        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');


        $data = [
            'name'           =>  $name,
            'description'     => $description,

        ];

        // print_r($data);
        $this->cptdirModel->insert($data);
        return redirect()->to(base_url('cptdir'));
    }



    public function Showcptlist($id)
    {



        $data['cptrecord_data'] = $this->cptModel->GetCptRecordsById($id);
        $data['milesfor'] = $this->cptmilesModel->GetmilesforRecord($id);
        $data['milesran'] = $this->cptmilesranModel->GetmilesranRecord($id);
        $data['weightfor'] = $this->cptweightModel->GetweightRecord($id);
        $data['weightran'] = $this->cptweightranModel->GetweightranRecord($id);
        $data['waitingfor'] = $this->cptwaitingModel->GetwaitingRecord($id);
        $data['waitingran'] = $this->cptwaitingranModel->GetwaitingranRecord($id);
        $data['cptCharges'] = $this->cptchargesmodel->GetCptchargesDatabyid($id);
        $data['cptcounty'] = $this->cptcountyModel->GetcountyRecord($id);
        $data['cpt_recordsdata'] = $this->cptModel->GetallcptRecord();
        $data['cpt_id'] = $id;
        //  echo "<pre>";       
        // //   print_r($data['cptrecord_data'] );
        //   print_r($data['cptcounty'] );
        //  die;    





        return view('cpt/cptlist', $data);
    }





    public function InsertCpt()
    {


        // echo "<pre>";
        // print_r($_POST);
        // die;
        //     print_r($_POST);
        //     die;
        //   echo "<pre>";

        $cpt_id = $this->request->getVar('id');

        ////////////////////////////////////////// AJAX /////////////////////////////////////////


        if (isset($_POST['act']) && $_POST['act'] == 'add_county') {


            // Assume that these arrays are indexed in the same way

         

            $cpt_id = $this->request->getVar('cpt_id');
            $county_id = $this->request->getVar('county_id');
            $county_from = $this->request->getVar('county_from');
            $county_to = $this->request->getVar('county_to');
            $county_charges = $this->request->getVar('county_charges');


            // echo "<pre>";
            // print_r($county_id);
            // die;



            for ($i = 0; $i < count($county_from); $i++) {
                $from_county = $county_from[$i];
                $to_county = $county_to[$i];
                $charges = $county_charges[$i];

                
                if (isset($county_id[$i])) {
                   
                    $id = $county_id[$i];
                    if ($this->cptcountyModel->checkcountyRecordAllreadyExists($id)) {


                        // Record exists, update it
                        $data = [
                            'cpt_id' => $cpt_id,
                            'from_county' => $from_county,
                            'to_county' => $to_county,
                            'charges' => $charges
                        ];

                        // echo "<pre>";
                        // print_r($data);
                        // die;
                        if ($this->cptcountyModel->updateCountyRecord($id, $data)) {
                            $response = array('status' => 'success', 'message' => '  record updated Successfull');
                        } else {
                            $response = array('status' => 'error', 'message' => 'failed to   record updated Successfull');
                        }
                    }
                } 
                else {

                    // echo "-------------ELSE-------------";
                    // echo $i;
                    // echo '<br>';

                    // echo 'id='.$id;
                    // die('hello');
                    $data = [
                        'cpt_id' => $cpt_id,
                        'from_county' => $from_county,
                        'to_county' => $to_county,
                        'charges' => $charges
                    ];

                    if (empty($from_county) || empty($to_county) || empty($charges)) {
                        // $response = array('status' => 'error', 'message' => 'filled all field');
                        continue;
                    }


                    if ($this->cptcountyModel->insert($data)) {
                        $response = array('status' => 'success', 'message' => ' add record Successfull');
                    } else {
                        $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
                    }
                }
            }
                 $response = array('status' => 'success', 'message' => ' add record');
        
            echo json_encode($response);
            exit;
        }



        // miles base using ajac by range 

        if (isset($_POST['act']) && $_POST['act'] == 'add_milesran') {
            $milesran_id = $this->request->getVar('milesran_id');
            $cpt_id = $this->request->getVar('cpt_id');
            $miles_from = $this->request->getVar('miles_from');
            $miles_to = $this->request->getVar('miles_to');
            $miles_base_charge = $this->request->getVar('miles_base_charge');
            $miles_range = $this->request->getVar('miles_range') ? 1 : 0;

            $datamilesrange=[

                'miles_ran' => $miles_range,
                'miles_for' => 0,
            ];


            // print_r($datamilesrange);
            // // die;

            if($this->cptModel->UpdatepalletsData($cpt_id,$datamilesrange)){

                $response = array('status'=> 'success', 'message'=> 'update data succesfull');
            }


            // print_r($miles_range);
            // die;

            // Loop through each set of values
            for ($i = 0; $i < sizeof($miles_from); $i++) {
                $from = $miles_from[$i];
                $to = $miles_to[$i];
                $charges = $miles_base_charge[$i];


                if (isset($milesran_id[$i])) {
                    $id = $milesran_id[$i];
                    if ($this->cptmilesranModel->checkmilesranRecordAllreadyExists($id)) {


                        // Record exists, update it
                        $data = [
                            'cpt_id' => $cpt_id,
                            'from1' => $from,
                            'to1' => $to,
                            'value1' => $charges
                        ];
                        if($this->cptmilesranModel->updatemilesranRecord($id, $data)) {
                            $response = array('status' => 'success', 'message' => '  record updated Successfull');
                        } else {
                            $response = array('status' => 'error', 'message' => 'failed to   record updated Successfull');
                        }
                    }
                } else {
                    $data = [
                        'cpt_id' => $cpt_id,
                        'from1' => $from,
                        'to1' => $to,
                        'value1' => $charges
                    ];

                    // echo "<pre>";
                    // print_r($data);
                    // die;

                    if (empty($from) || empty($to) || empty($charges)) {
                        $response = array('status' => 'error', 'message' => 'filled all field');
                        continue;
                    }



                    if ($this->cptmilesranModel->insert($data)) {
                        $response = array('status' => 'success', 'message' => ' add record Successfull');
                    } else {
                        $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
                    }
                }
            }
            $response = array('status' => 'success', 'message' => ' record updated Successfull');
            echo json_encode($response);
            exit;
        }

        if (isset($_POST['act']) && $_POST['act'] == 'add_weight') {
            $weightranid = $this->request->getVar('weightranid');
            $cpt_id = $this->request->getVar('cpt_id');
            $weight_f = $this->request->getVar('weight_form');
            $weight_t = $this->request->getVar('weight_to');
            $weight_c = $this->request->getVar('weight_charge');
            $weight_byrange = $this->request->getVar('weight_byrange') ? 1 : 0;

            $weight_byrangedata=[

                'weight_ran' => $weight_byrange,
                'weight_for' =>0,
            ];


            // echo $cpt_id;
            // print_r($weight_byrangedata);
            // die;

            if($this->cptModel->UpdatepalletsData($cpt_id,$weight_byrangedata)){

                $response = array('status'=> 'success', 'message'=> 'update Data');
            }



            // print_r($weight_t);
            // die;



            $data_length = sizeof($weight_f);

            for ($i = 0; $i < $data_length; $i++) {
                if (isset($weightranid[$i])) {
                    $id = $weightranid[$i];
                    if ($this->cptweightranModel->checkweightRecordAllreadyExists($id)) {
                        // Record exists, update it
                        $data = [
                            'cpt_id' => $cpt_id,
                            'from1' => $weight_f[$i],
                            'to1' => $weight_t[$i],
                            'value1' => $weight_c[$i]
                        ];
                        if ($this->cptweightranModel->updateweightranRecord($id, $data)) {
                            $response = ['status' => 'success', 'message' => 'Record updated successfully'];
                        } else {
                            $response = ['status' => 'error', 'message' => 'Failed to update record'];
                        }
                    }
                } else {
                    $data = [
                        'cpt_id' => $cpt_id,
                        'from1' => $weight_f[$i],
                        'to1' => $weight_t[$i],
                        'value1' => $weight_c[$i]
                    ];
                    if (empty($weight_f[$i]) || empty($weight_t[$i]) || empty($weight_c[$i])) {
                        // $response = ['status' => 'error', 'message' => 'Please fill all fields'];
                        continue;
                    }
                    if ($this->cptweightranModel->insert($data)) {
                        $response = ['status' => 'success', 'message' => 'Record added successfully'];
                    } else {
                        $response = ['status' => 'error', 'message' => 'Failed to add record'];
                    }
                }
            }
            echo json_encode($response);
            exit;
        }

 // weight range using ajax

        if (isset($_POST['act']) && $_POST['act'] == 'add_waiting') {

            // echo "<pre>";
            // print_r($_POST);
            // die;
            $cpt_id = $this->request->getVar('cpt_id');
            $waitranid = $this->request->getVar('waitranid');
            $waiting_time_form = $this->request->getVar('waiting_time_form');
            $waiting_time_to = $this->request->getVar('waiting_time_to');
            $waiting_time_charges = $this->request->getVar('waiting_time_charges');

            $waiting_byrange = $this->request->getVar('waiting_byrange') ? 1 : 0;

            $waiting_byrangedata=[

                'waiting_ran' => $waiting_byrange,
                'waiting_for' => 0,
            ];


            // print_r($waiting_byrangedata);
            // die;

            if($this->cptModel->UpdatepalletsData($cpt_id,$waiting_byrangedata)){

                $response = array('status'=> 'success', 'message'=> 'record update');
            }


            $waiting_length = sizeof($waiting_time_form);

            // print_r($_POST);
            // die;

            for ($i = 0; $i < $waiting_length; $i++) {
                if (isset($waitranid[$i]) && !empty($waitranid[$i])) {
                    $id = $waitranid[$i];

                    // print_r($id);
                    // die;
                    if ($this->cptwaitingranModel->checkwaitingranRecordAllreadyExists($id)) {
                        // Record exists, update it

                        // die('update');
                        $data = [
                            'cpt_id' => $cpt_id,
                            'from1' => $waiting_time_form[$i],
                            'to1' => $waiting_time_to[$i],
                            'value1' => $waiting_time_charges[$i]
                        ];

                        // echo "<pre>";
                        // print_r($data);
                        // die;
                        if ($this->cptwaitingranModel->updatewaitingranRecord($id, $data)) {
                            $response = ['status' => 'success', 'message' => 'Record updated successfully'];
                        } else {
                            $response = ['status' => 'error', 'message' => 'Failed to update record'];
                        }
                    }
                } else {

                    // die('insert');
                    $data = [
                        'cpt_id' => $cpt_id,
                        'from1' => $waiting_time_form[$i],
                        'to1' => $waiting_time_to[$i],
                        'value1' => $waiting_time_charges[$i]
                    ];

            //         echo "<pre>";
            //  print_r($data);
            //  die;

                    if (empty($waiting_time_form[$i]) || empty($waiting_time_to[$i]) || empty($waiting_time_charges[$i])) {
                        // $response = ['status' => 'error', 'message' => 'Please fill all fields'];
                        continue;
                    }

                    if ($this->cptwaitingranModel->insert($data)) {
                        $response = ['status' => 'success', 'message' => 'Record added successfully'];
                    } else {
                        $response = ['status' => 'error', 'message' => 'Failed to add record'];
                    }
                }
            }

            echo json_encode($response);
            exit;
        }
        ////////////////////////////////////////// AJAX /////////////////////////////////////////


        if (isset($_REQUEST['act']) && $_REQUEST['act'] == 'mainformdata') {
            $payloadData = $this->request->getJSON(true);


            //  echo "<pre>";
            // print_r($payloadData);
            // die(); 

            // Example of accessing specific data fields
            $cpt_id = $payloadData['cpt_id'];
            $min_pallets = $payloadData['min_pallets'];
            $min_charge = $payloadData['min_charge'];
            $cpt_name = $payloadData['cpt_name'];
            $cpt_description = $payloadData['cpt_description'];
            $per_Pallets_charge = $payloadData['per_Pallets_charge'];
            $fuel = $payloadData['fuel'];
            $weekend_value = $payloadData['weekend_value'];
            $holiday_value = $payloadData['holiday_value'];
            $night_value = $payloadData['night_value'];
            $night_from = $payloadData['night_from'];
            $night_to = $payloadData['night_to'];
            $night_from2 = $payloadData['night_from2'];
            $night_to2 = $payloadData['night_to2'];
            $checkweekend = $payloadData['checkweekend'];
            $weekend_per_fix = $payloadData['weekend_per_fix'];
            $checkholiday = $payloadData['checkholiday'];
            $holiday_per_fix = $payloadData['holiday_per_fix'];
            $checknightcharges = $payloadData['checknightcharges'];
            $night_per_fix = $payloadData['night_per_fix'];
            $checkheigher = $payloadData['checkheigher'];
            $miles_formula = $payloadData['miles_formula'];
            $waiting_byformula = $payloadData['waiting_byformula'];
            $weight_byformula = $payloadData['weight_byformula'];

            $palletsData = [
                'id'=>$cpt_id,
                'name' => $cpt_name,
                'miles_for'=>$miles_formula,
                'miles_ran'=>0,
                'waiting_for'=>$waiting_byformula,
                'waiting_ran'=>0,
                'weight_for'=>$weight_byformula,
                'weight_ran'=>0,
                'description' => $cpt_description,
                'min_pallets' => $min_pallets,
                'pallets_min_char' => $min_charge,
                'pallets_per_char' => $per_Pallets_charge,
                'fuel' => $fuel,
                'weekend_value' => $weekend_value,
                'holiday_value' => $holiday_value,
                'night_value' => $night_value,
                'night_from' => $night_from,
                'night_to' => $night_to,
                'night_from2' => $night_from2,
                'night_to2' => $night_to2,
                'is_weekend' => $checkweekend,
                'weekend_per_fix' => $weekend_per_fix,
                'is_holiday' => $checkholiday,
                'holiday_per_fix' => $holiday_per_fix,
                'is_night' => $checknightcharges,
                'night_per_fix' => $night_per_fix,
                'is_higher' => $checkheigher
            ];


            // echo "<pre>";
            // print_r($palletsData);
            // die;
      

            if ($this->cptModel->checkRecordExists($cpt_id)) {

                // die('hello');
               if($this->cptModel->UpdatepalletsData($cpt_id, $palletsData)){
                $response = ['status' => 'success', 'message' => 'Record updated successfully'];
               }else{
                $response = ['status' => 'error', 'message' => 'something went wrong '];
               }

            //    die();

            } else {
                // die('mm');
                $palletsData['cpt_id'] = $cpt_id;
                $this->cptModel->insert($palletsData);
                $response = ['status' => 'success', 'message' => 'Record added successfully'];   
            }

            // Waiting data
            $min_waiting = $payloadData['min_waiting'];
            $min_waiting_charge = $payloadData['min_waiting_charge'];
            $per_waiting_charge = $payloadData['per_waiting_charge'];

            $cptwaiting = [
                'cpt_id' => $cpt_id,
                'min_waiting' => $min_waiting,
                'min_charges' => $min_waiting_charge,
                'per_charges' => $per_waiting_charge
            ];

            if ($this->cptwaitingModel->checkRecordExists($cpt_id)) {
                $this->cptwaitingModel->UpdatewaitingData($cpt_id, $cptwaiting);
                $response = ['status' => 'success', 'message' => 'Waiting updated successfully'];
            } else {
                $this->cptwaitingModel->insert($cptwaiting);
                $response = ['status' => 'success', 'message' => 'Add Waiting record successfully'];
            }

            // Miles data
            $min_miles = $payloadData['min_miles'];
            $min_charges = $payloadData['min_charges'];
            $per_charges = $payloadData['per_charges'];

            $miles_base = [
                'cpt_id' => $cpt_id,
                'min_miles' => $min_miles,
                'min_charges' => $min_charges,
                'per_charges' => $per_charges
            ];

            if ($this->cptmilesModel->checkRecordExists($cpt_id)) {
                $this->cptmilesModel->UpdatemilesData($cpt_id, $miles_base);
                $response = ['status' => 'success', 'message' => 'Miles Record updated successfully'];
            } else {
                $this->cptmilesModel->insert($miles_base);
                $response = ['status' => 'success', 'message' => 'Miles Record Add successfully'];
            }

            // Weight data
            $min_weight = $payloadData['min_weight'];
            $minweight_charge = $payloadData['minweight_charge'];
            $per_weight_charge = $payloadData['per_weight_charge'];

            $cptweight = [
                'cpt_id' => $cpt_id,
                'min_weight' => $min_weight,
                'min_charges' => $minweight_charge,
                'per_charges' => $per_weight_charge
            ];

            if ($this->cptweightModel->checkRecordExists($cpt_id)) {
                $this->cptweightModel->UpdateweightData($cpt_id, $cptweight);
                $response = ['status' => 'success', 'message' => 'Weight Record updated successfully'];
            } else {
                $this->cptweightModel->insert($cptweight);
                $response = ['status' => 'success', 'message' => 'Weight Record Add successfully'];
            }

            $serviceCharges = $payloadData['serviceCharges'];
            
            for ($i = 0; $i < sizeof($serviceCharges); $i++) {
                // die('aaa');

                $charges_name = $serviceCharges[$i]['charges_name'];
                $chrg_name = $serviceCharges[$i]['chrg_name'];
                $service_type = $serviceCharges[$i]['service_type'];

                if (isset($serviceCharges[$i]['service_charges_id']) && !empty($serviceCharges[$i]['service_charges_id'])) {
                    // die('aa');
                    $id = $serviceCharges[$i]['service_charges_id'];

                    // Check if the record exists in the database
                    if ($this->cptchargesmodel->checkcptchargesRecordAllreadyExists($id)) {
                        // Record exists, update it
                        $data = [
                            'cpt_id' => $cpt_id,
                            'chr_name' => $charges_name,
                            'chr_amt' => $chrg_name,
                            'per_fix' => $service_type
                        ];

                        // Attempt to update the record
                        if ($this->cptchargesmodel->updatecptchargesRecord($id, $data)) {
                            $response = ['status' => 'success', 'message' => 'Record updated successfully'];
                        } else {
                            $response = ['status' => 'error', 'message' => 'Failed to update record'];
                        }
                    } else {
                        $response = ['status' => 'error', 'message' => 'Record with ID ' . $id . ' does not exist'];
                    }
                } else {

                    $data = [
                        'cpt_id' => $cpt_id,
                        'chr_name' => $charges_name,
                        'chr_amt' => $chrg_name,
                        'per_fix' => $service_type
                    ];

                    // Attempt to insert the new record
                    if ($this->cptchargesmodel->insert($data)) {
                        $response = ['status' => 'success', 'message' => 'Record added successfully'];
                    } else {
                        $response = ['status' => 'error', 'message' => 'Failed to add record'];
                    }
                }
            }

            echo json_encode($response);
            exit;
        }
    }


    // copy form
    public function copyCptForm()
    {


        // $milesran=$_POST['milesran'];
        // echo "<pre>";
        // print_r($milesran);
        // die;

        //    start miles
        $milesfor = $_POST['milesfor'];
        $cpt_id =  $_POST['cpt_id'];
        $min_miles = $milesfor['min_miles'];
        $min_charges = $milesfor['min_charges'];
        $per_charges = $milesfor['per_charges'];

        if ($this->cptmilesModel->deletemilesforRecord($cpt_id)) {
            $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
            echo json_encode($response);
         
        }


        $data = [
            'cpt_id' => $cpt_id,
            'min_miles' => $min_miles,
            'min_charges' => $min_charges,
            'per_charges' => $per_charges


        ];

        if ($this->cptmilesModel->insert($data)) {
            $response = array('status' => 'success', 'message' => ' add record Successfull');
        } else {
            $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
        }
        // end miels


        // start weight
        $weightfor = $_POST['weightfor'];
        $min_weight = $weightfor['min_weight'];
        $min_weight_charges = $weightfor['min_charges'];
        $per_weight_charges = $weightfor['per_charges'];

        if ($this->cptweightModel->deleteweightRecord($cpt_id)) {
            $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
            echo json_encode($response);
        }

        $data = [
            'cpt_id' => $cpt_id,
            'min_weight' => $min_weight,
            'min_charges' => $min_weight_charges,
            'per_charges' => $per_weight_charges
        ];

        // echo "<pre>";
        // print_r($data);
        // die();





        if ($this->cptweightModel->insert($data)) {
            $response = array('status' => 'success', 'message' => ' add record Successfull');
        } else {
            $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
        }


        // end weight

        //  start waiting 

        $waitingfor = $_POST['waitingfor'];
        $min_waiting = $waitingfor['min_waiting'];
        $min_waiting_charges = $waitingfor['min_charges'];
        $per_waiting_charges = $waitingfor['per_charges'];

        if ($this->cptwaitingModel->deletewaitingRecord($cpt_id)) {
            $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
            echo json_encode($response);
        
        }

        $data = [
            'cpt_id' => $cpt_id,
            'min_waiting' => $min_waiting,
            'min_charges' => $min_waiting_charges,
            'per_charges' => $per_waiting_charges
        ];

      

        if ($this->cptwaitingModel->insert($data)) {
            $response = array('status' => 'success', 'message' => ' add record Successfull');
        } else {
            $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
        }

        // end waiting


        $cpt_recordsdata = $_POST['cpt_recordsdata'];
        $name = $cpt_recordsdata['name'];
        $dir_id = $cpt_recordsdata['dir_id'];
        $description = $cpt_recordsdata['description'];
        $weight_for = $cpt_recordsdata['weight_for'];
        $weight_ran = $cpt_recordsdata['weight_ran'];
        $miles_for = $cpt_recordsdata['miles_for'];
        $miles_ran = $cpt_recordsdata['miles_ran'];
        $waiting_for = $cpt_recordsdata['waiting_for'];
        $waiting_ran = $cpt_recordsdata['waiting_ran'];
        $is_county = $cpt_recordsdata['is_county'];
        $weekend = $cpt_recordsdata['weekend'];
        $night = $cpt_recordsdata['night'];
        $is_weekend = $cpt_recordsdata['is_weekend'];
        $weekend_per_fix = $cpt_recordsdata['weekend_per_fix'];
        $weekend_value = $cpt_recordsdata['weekend_value'];
        $is_holiday = $cpt_recordsdata['is_holiday'];
        $holiday_per_fix = $cpt_recordsdata['holiday_per_fix'];
        $holiday_value = $cpt_recordsdata['holiday_value'];
        $is_night = $cpt_recordsdata['is_night'];
        $night_per_fix = $cpt_recordsdata['night_per_fix'];
        $night_value = $cpt_recordsdata['night_value'];
        $is_higher = $cpt_recordsdata['is_higher'];
        $fuel = $cpt_recordsdata['fuel'];
        $night_to = $cpt_recordsdata['night_to'];
        $night_from = $cpt_recordsdata['night_from'];
        $night_to2 = $cpt_recordsdata['night_to2'];
        $night_from2 = $cpt_recordsdata['night_from2'];
        $min_pallets = $cpt_recordsdata['min_pallets'];
        $pallets_min_char = $cpt_recordsdata['pallets_min_char'];
        $pallets_per_char = $cpt_recordsdata['pallets_per_char'];

        if ($this->cptModel->deletecptRecord($cpt_id)) {
            $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
            echo json_encode($response);
     
        }



           $data = [
            'id' => $cpt_id,
            'dir_id'=>$dir_id,
            'name' => $name,
            'description' => $description,
            'weight_for' => $weight_for,
            'weight_ran' => $weight_ran,
            'miles_for' => $miles_for,
            'miles_ran' => $miles_ran,
            'waiting_for' => $waiting_for,
            'waiting_ran' => $waiting_ran,
            'is_county' => $is_county,
            'weekend' => $weekend,
            'night' => $night,
            'is_weekend' => $is_weekend,
            'weekend_per_fix' => $weekend_per_fix,
            'weekend_value' => $weekend_value,
            'is_holiday' => $is_holiday,
            'holiday_per_fix' => $holiday_per_fix,
            'holiday_value' => $holiday_value,
            'is_night' => $is_night,
            'night_per_fix' => $night_per_fix,
            'night_value' => $night_value,
            'is_higher' => $is_higher,
            'fuel' => $fuel,
            'night_to' => $night_to,
            'night_from' => $night_from,
            'night_to2' => $night_to2,
            'night_from2' => $night_from2,
            'min_pallets' => $min_pallets,
            'pallets_min_char' => $pallets_min_char,
            'pallets_per_char' => $pallets_per_char
        ];


        if ($this->cptModel->insert($data)) {
            $response = array('status' => 'success', 'message' => ' add record Successfull');
        } else {
            $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
        }



        // start sevice
         $cptCharges = $_POST['cptCharges'];
           for ($i = 0; $i < sizeof($cptCharges); $i++) {
            $charges_name = $cptCharges[$i]['chr_name'];
            $chrg_name = $cptCharges[$i]['chr_amt'];
            $service_type = $cptCharges[$i]['per_fix'];

            if ($this->cptchargesmodel->deleteCptcharges($cpt_id)) {
                $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
                echo json_encode($response);
                return;
            }

            $chargesdata[] = [
                'cpt_id' => $cpt_id,
                'chr_name' => $charges_name,
                'chr_amt' => $chrg_name,
                'per_fix' => $service_type
            ];
        }

        // echo "<pre>";
        // print_r($chargesdata);
        // die;
        if ($this->cptchargesmodel->insertBatch($chargesdata)) {
            $response = ['status' => 'success', 'message' => 'Record added successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to add record'];
        }

        // end service charge 



        // county
        $cptcounty=$_POST['cptcounty'];

        for ($i = 0; $i < sizeof($cptcounty); $i++) {
            $from_county = $cptcounty[$i]['from_county'];
            $to_county = $cptcounty[$i]['to_county'];
            $charges = $cptcounty[$i]['charges'];


            if ($this->cptcountyModel->deletecountyRecord($cpt_id)) {
                $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
                echo json_encode($response);
            
            }
           
                $countydata[] = [
                    'cpt_id' => $cpt_id,
                    'from_county' => $from_county,
                    'to_county' => $to_county,
                    'charges' => $charges
                ];
                
            }
            if ($this->cptcountyModel->insertBatch($countydata)) {
                $response = array('status' => 'success', 'message' => ' add record Successfull');
            } else {
                $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
            }
    
        // end county

        // milesran 

         $milesran=$_POST['milesran'];

        for ($i = 0; $i < sizeof($milesran); $i++) {
            $from1 = $milesran[$i]['from1'];
            $to1 = $milesran[$i]['to1'];
            $value1 = $milesran[$i]['value1'];


            if ($this->cptmilesranModel->deletemilesranRecord($cpt_id)) {
                $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
                echo json_encode($response);
                
            }
           
                $milesrandata[] = [
                    'cpt_id' => $cpt_id,
                    'from1' => $from1,
                    'to1' => $to1,
                    'value1' => $value1
                ];
                

            }
//             echo "<pre>";
// print_r($milesrandata);
// die;

            if ($this->cptmilesranModel->insertBatch($milesrandata)) {
                $response = array('status' => 'success', 'message' => ' add record Successfull');
            } else {
                $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
            }
        // end milesran


  // weightran 

  $weightran=$_POST['weightran'];

  for ($i = 0; $i < sizeof($weightran); $i++) {
      $from1 = $weightran[$i]['from1'];
      $to1 = $weightran[$i]['to1'];
      $value1 = $weightran[$i]['value1'];


      if ($this->cptweightranModel->deleteweightranRecord($cpt_id)) {
          $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
      } else {
          $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
          echo json_encode($response);
          return;
      }
     
          $weightrandata[] = [
              'cpt_id' => $cpt_id,
              'from1' => $from1,
              'to1' => $to1,
              'value1' => $value1
          ];

        //   echo "<pre>";
        //   print_r($weightrandata);
        //   die;
          
      }
      if ($this->cptweightranModel->insertBatch($weightrandata)) {
          $response = array('status' => 'success', 'message' => ' add record Successfull');
      } else {
          $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
      }
  // end weightran


//   waitingran

$waitingran=$_POST['waitingran'];

for ($i = 0; $i < sizeof($waitingran); $i++) {
    $from1 = $waitingran[$i]['from1'];
    $to1 = $waitingran[$i]['to1'];
    $value1 = $waitingran[$i]['value1'];


    if ($this->cptwaitingranModel->deletewaitingranRecord($cpt_id)) {
        $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
    } else {
        $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
        echo json_encode($response);
  
    }
   
        $waitingdata[] = [
            'cpt_id' => $cpt_id,
            'from1' => $from1,
            'to1' => $to1,
            'value1' => $value1
        ];
        
    }
    if ($this->cptwaitingranModel->insertBatch($waitingdata)) {
        $response = array('status' => 'success', 'message' => ' add record Successfull');
    } else {
        $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
    }

// end waitingRan




        echo json_encode($response);
       
        exit;
    }

    // end copy form
}
