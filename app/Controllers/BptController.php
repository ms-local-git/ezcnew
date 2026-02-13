<?php

namespace App\Controllers;

use App\Models\CheckAirports;
use CodeIgniter\Controller;
// 
use App\Models\BptdirModel;
use App\Models\BptModel;
use App\Models\BptmilesModel;
use App\Models\BptcountyModel;
use App\Models\BptwaitingModel;
use App\Models\BptweightModel;
use App\Models\Bptchargesmodel;
use App\Models\BptmilesranModel;
use App\Models\BptweightranModel;
use App\Models\BptwaitingranModel;

class BptController extends BaseController

{


    public function __construct()
    {

        // bpt models

        $this->bptdirModel = new BptdirModel();
        $this->bptModel = new BptModel();
        $this->bptmilesModel = new BptmilesModel();
        $this->bptmilesranModel = new BptmilesranModel();
        $this->bptcountyModel = new BptcountyModel();
        $this->bptwaitingModel = new BptwaitingModel();
        $this->bptweightModel = new BptweightModel();
        $this->bptweightranModel = new BptweightranModel();
        $this->bptchargesmodel = new Bptchargesmodel();
        $this->bptwaitingranModel = new BptwaitingranModel();
    }


    public function bptDir()
    {

        $data['bpt_records'] = $this->bptdirModel->GetbptDirData();
        return view('bpt/bptdir', $data);
    }



    public function GetUserallData()
    {

        $id = $_GET['id'];
        $data['bptrecord_data'] = $this->bptModel->GetbptRecordsById($id);
        $data['milesfor'] = $this->bptmilesModel->GetmilesforRecord($id);
        $data['milesran'] = $this->bptmilesranModel->GetmilesranRecord($id);
        $data['weightfor'] = $this->bptweightModel->GetweightRecord($id);
        $data['weightran'] = $this->bptweightranModel->GetweightranRecord($id);
        $data['waitingfor'] = $this->bptwaitingModel->GetwaitingRecord($id);
        $data['waitingran'] = $this->bptwaitingranModel->GetwaitingranRecord($id);
        $data['bptCharges'] = $this->bptchargesmodel->GetbptchargesDatabyid($id);
        $data['bptcounty'] = $this->bptcountyModel->GetcountyRecord($id);
        $data['bpt_recordsdata'] = $this->bptModel->GetbptRecordsById($id);



        return json_encode($data);
    }


    public function bpt($id)
    {
        $data['bpt_data'] = $this->bptModel->GetbptDataById($id);
        $data['bpt_namerecords'] = $this->bptdirModel->GetbptDirDatabyid($id);



        return view('bpt/bpt', $data);
    }


    public function AddbptData()
    {

        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');


        $data = [
            'name'           =>  $name,
            'description'     => $description,

        ];

        // print_r($data);
        $this->bptdirModel->insert($data);
        return redirect()->to(base_url('bptdir'));
    }



    public function Showbptlist($id)
    {

        // bpt models

        $data['bptrecord_data'] = $this->bptModel->GetbptRecordsById($id);
        $data['bpt_recordsdata'] = $this->bptModel->GetallbptRecord();
        $data['milesfor'] = $this->bptmilesModel->GetmilesforRecord($id);
        $data['milesran'] = $this->bptmilesranModel->GetmilesranRecord($id);
        $data['weightfor'] = $this->bptweightModel->GetweightRecord($id);
        $data['weightran'] = $this->bptweightranModel->GetweightranRecord($id);
        $data['waitingfor'] = $this->bptwaitingModel->GetwaitingRecord($id);
        $data['waitingran'] = $this->bptwaitingranModel->GetwaitingranRecord($id);
        $data['bptCharges'] = $this->bptchargesmodel->GetbptchargesDatabyid($id);
        $data['bptcounty'] = $this->bptcountyModel->GetcountyRecord($id);
        $data['bpt_id'] = $id;
        $data['bpt_id'] = $id;
    
        return view('bpt/bptlist', $data);
    }





    public function Insertbpt()
    {


        // echo "<pre>";
        // print_r($_POST);
        // die;
        //     print_r($_POST);
        //     die;
        //   echo "<pre>";

        $dpt_id = $this->request->getVar('id');

        ////////////////////////////////////////// AJAX /////////////////////////////////////////


        if (isset($_POST['act']) && $_POST['act'] == 'add_county') {


            // Assume that these arrays are indexed in the same way



            $bpt_id = $this->request->getVar('bpt_id');
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
                    if ($this->bptcountyModel->checkcountyRecordAllreadyExists($id)) {


                        // Record exists, update it
                        $data = [
                            'bpt_id' => $bpt_id,
                            'from_county' => $from_county,
                            'to_county' => $to_county,
                            'charges' => $charges
                        ];

                        // echo "<pre>";
                        // print_r($data);
                        // die;
                        if ($this->bptcountyModel->updateCountyRecord($id, $data)) {
                            $response = array('status' => 'success', 'message' => '  record updated Successfull');
                        } else {
                            $response = array('status' => 'error', 'message' => 'failed to   record updated Successfull');
                        }
                    }
                } else {

                    // echo "-------------ELSE-------------";
                    // echo $i;
                    // echo '<br>';

                    // echo 'id='.$id;
                    // die('hello');
                    $data = [
                        'bpt_id' => $bpt_id,
                        'from_county' => $from_county,
                        'to_county' => $to_county,
                        'charges' => $charges
                    ];

                    // echo "<pre>";
                    // print_r($data);
                    // die;

                    if (empty($from_county) || empty($to_county) || empty($charges)) {
                        // $response = array('status' => 'error', 'message' => 'filled all field');
                        continue;
                    }


                    if ($this->bptcountyModel->insert($data)) {
                        $response = array('status' => 'success', 'message' => ' add record Successfull');
                    } else {
                        $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
                    }
                }
            }


            echo json_encode($response);
            exit;
        }



        // miles base using ajac by range bptmiles

        if (isset($_POST['act']) && $_POST['act'] == 'add_milesran') {
            $milesran_id = $this->request->getVar('milesran_id');
            $bpt_id = $this->request->getVar('bpt_id');
            $miles_from = $this->request->getVar('miles_from');
            $miles_to = $this->request->getVar('miles_to');
            $miles_base_charge = $this->request->getVar('miles_base_charge');
            $miles_range = $this->request->getVar('miles_range') ? 1 : 0;

            $datamilesrange = [

                'miles_ran' => $miles_range,
                'miles_for' => 0,
            ];


            // print_r($datamilesrange);
            // // die;

            if ($this->bptModel->UpdatepalletsData($bpt_id, $datamilesrange)) {

                $response = array('status' => 'success', 'message' => 'update data succesfull');
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
                    if ($this->bptmilesranModel->checkmilesranRecordAllreadyExists($id)) {



                        // Record exists, update it
                        $data = [
                            'bpt_id' => $bpt_id,
                            'from1' => $from,
                            'to1' => $to,
                            'value1' => $charges
                        ];
                        if ($this->bptmilesranModel->updatemilesranRecord($id, $data)) {
                            $response = array('status' => 'success', 'message' => '  record updated Successfull');
                        } else {
                            $response = array('status' => 'error', 'message' => 'failed to   record updated Successfull');
                        }
                    }
                } else {
                    $data = [
                        'bpt_id' => $bpt_id,
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



                    if ($this->bptmilesranModel->insert($data)) {
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
        //   end miles ran




        if (isset($_POST['act']) && $_POST['act'] == 'add_weight') {

            // echo "<pre>";
            // print_r($_POST);
            // die;
            $weightranid = $this->request->getVar('weightranid');
            $bpt_id = $this->request->getVar('bpt_id');
            $weight_f = $this->request->getVar('weight_form');
            $weight_t = $this->request->getVar('weight_to');
            $weight_c = $this->request->getVar('weight_charge');
            $weight_byrange = $this->request->getVar('weight_byrange') ? 1 : 0;

            $weight_byrangedata = [

                'weight_ran' => $weight_byrange,
                'weight_for' => 0,
            ];


            // echo $bpt_id;
            // print_r($weight_byrangedata);
            // die;

            if ($this->bptModel->UpdatepalletsData($bpt_id, $weight_byrangedata)) {

                $response = array('status' => 'success', 'message' => 'update Data');
            }



            // print_r($weight_t);
            // die;



            $data_length = sizeof($weight_f);

            for ($i = 0; $i < $data_length; $i++) {
                if (isset($weightranid[$i])) {
                    $id = $weightranid[$i];
                    if ($this->bptweightranModel->checkweightRecordAllreadyExists($id)) {
                        // Record exists, update it
                        $data = [
                            'bpt_id' => $bpt_id,
                            'from1' => $weight_f[$i],
                            'to1' => $weight_t[$i],
                            'value1' => $weight_c[$i]
                        ];
                        if ($this->bptweightranModel->updateweightranRecord($id, $data)) {
                            $response = ['status' => 'success', 'message' => 'Record updated successfully'];
                        } else {
                            $response = ['status' => 'error', 'message' => 'Failed to update record'];
                        }
                    }
                } else {
                    $data = [
                        'bpt_id' => $bpt_id,
                        'from1' => $weight_f[$i],
                        'to1' => $weight_t[$i],
                        'value1' => $weight_c[$i]
                    ];


                    if (empty($weight_f[$i]) || empty($weight_t[$i]) || empty($weight_c[$i])) {

                        continue;
                    }
                    if ($this->bptweightranModel->insert($data)) {
                        $response = ['status' => 'success', 'message' => 'Record added successfully'];
                    } else {
                        $response = ['status' => 'error', 'message' => 'Failed to add record'];
                    }
                }
            }
            echo json_encode($response);
            exit;
        }





        // EMND


        // weight range using ajax

        if (isset($_POST['act']) && $_POST['act'] == 'add_waiting') {

            // echo "<pre>";
            // print_r($_POST);
            // die;
            $bpt_id = $this->request->getVar('bpt_id');
            $waitranid = $this->request->getVar('waitranid');
            $waiting_time_form = $this->request->getVar('waiting_time_form');
            $waiting_time_to = $this->request->getVar('waiting_time_to');
            $waiting_time_charges = $this->request->getVar('waiting_time_charges');

            $waiting_byrange = $this->request->getVar('waiting_byrange') ? 1 : 0;

            $waiting_byrangedata = [

                'waiting_ran' => $waiting_byrange,
                'waiting_for' => 0,
            ];


            // print_r($waiting_byrangedata);
            // die;

            if ($this->bptModel->UpdatepalletsData($bpt_id, $waiting_byrangedata)) {

                $response = array('status' => 'success', 'message' => 'record update');
            }


            $waiting_length = sizeof($waiting_time_form);

            // print_r($_POST);
            // die;

            for ($i = 0; $i < $waiting_length; $i++) {
                if (isset($waitranid[$i]) && !empty($waitranid[$i])) {
                    $id = $waitranid[$i];

                    // print_r($id);
                    // die;
                    if ($this->bptwaitingranModel->checkwaitingranRecordAllreadyExists($id)) {
                        // Record exists, update it

                        // die('update');
                        $data = [
                            'bpt_id' => $bpt_id,
                            'from1' => $waiting_time_form[$i],
                            'to1' => $waiting_time_to[$i],
                            'value1' => $waiting_time_charges[$i]
                        ];

                        // echo "<pre>";
                        // print_r($data);
                        // die;
                        if ($this->bptwaitingranModel->updatewaitingranRecord($id, $data)) {
                            $response = ['status' => 'success', 'message' => 'Record updated successfully'];
                        } else {
                            $response = ['status' => 'error', 'message' => 'Failed to update record'];
                        }
                    }
                } else {

                    // die('insert');
                    $data = [
                        'bpt_id' => $bpt_id,
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

                    if ($this->bptwaitingranModel->insert($data)) {
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








        // strat pallets





        if (isset($_REQUEST['act']) && $_REQUEST['act'] == 'mainformdata') {
            $payloadData = $this->request->getJSON(true);


            //  echo "<pre>";
            // print_r($payloadData);
            // die(); 

            // Example of accessing specific data fields
            $bpt_id = $payloadData['bpt_id'];

            $bpt_name = $payloadData['bpt_name'];
            $bpt_description = $payloadData['bpt_description'];

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
                'id' => $bpt_id,
                'name' => $bpt_name,
                'miles_for' => $miles_formula,
                'miles_ran' => 0,
                'waiting_for' => $waiting_byformula,
                'waiting_ran' => 0,
                'weight_for' => $weight_byformula,
                'weight_ran' => 0,
                'description' => $bpt_description,

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


            if ($this->bptModel->checkRecordExists($bpt_id)) {

                // die('hello');
                if ($this->bptModel->UpdatepalletsData($bpt_id, $palletsData)) {
                    $response = ['status' => 'success', 'message' => 'Record updated successfully'];
                } else {
                    $response = ['status' => 'error', 'message' => 'something went wrong '];
                }

                //    die();

            } else {
                // die('mm');
                $palletsData['bpt_id'] = $bpt_id;
                $this->bptModel->insert($palletsData);
                $response = ['status' => 'success', 'message' => 'Record added successfully'];
            }

            // Waiting data
            $min_waiting = $payloadData['min_waiting'];
            $min_waiting_charge = $payloadData['min_waiting_charge'];
            $per_waiting_charge = $payloadData['per_waiting_charge'];

            $cptwaiting = [
                'bpt_id' => $bpt_id,
                'min_waiting' => $min_waiting,
                'min_charges' => $min_waiting_charge,
                'per_charges' => $per_waiting_charge
            ];

            if ($this->bptwaitingModel->checkRecordExists($bpt_id)) {
                $this->bptwaitingModel->UpdatewaitingData($bpt_id, $cptwaiting);
                $response = ['status' => 'success', 'message' => 'Waiting updated successfully'];
            } else {
                $this->bptwaitingModel->insert($cptwaiting);
                $response = ['status' => 'success', 'message' => 'Add Waiting record successfully'];
            }

            // Miles data
            $min_miles = $payloadData['min_miles'];
            $min_charges = $payloadData['min_charges'];
            $per_charges = $payloadData['per_charges'];

            $miles_base = [
                'bpt_id' => $bpt_id,
                'min_miles' => $min_miles,
                'min_charges' => $min_charges,
                'per_charges' => $per_charges
            ];

            if ($this->bptmilesModel->checkRecordExists($bpt_id)) {
                $this->bptmilesModel->UpdatemilesData($bpt_id, $miles_base);
                $response = ['status' => 'success', 'message' => 'Miles Record updated successfully'];
            } else {
                $this->bptmilesModel->insert($miles_base);
                $response = ['status' => 'success', 'message' => 'Miles Record Add successfully'];
            }

            // Weight data
            $min_weight = $payloadData['min_weight'];
            $minweight_charge = $payloadData['minweight_charge'];
            $per_weight_charge = $payloadData['per_weight_charge'];

            $cptweight = [
                'bpt_id' => $bpt_id,
                'min_weight' => $min_weight,
                'min_charges' => $minweight_charge,
                'per_charges' => $per_weight_charge
            ];

            if ($this->bptweightModel->checkRecordExists($bpt_id)) {
                $this->bptweightModel->UpdateweightData($bpt_id, $cptweight);
                $response = ['status' => 'success', 'message' => 'Weight Record updated successfully'];
            } else {
                $this->bptweightModel->insert($cptweight);
                $response = ['status' => 'success', 'message' => 'Weight Record Add successfully'];
            }

            // Process service charges
            $serviceCharges = $payloadData['serviceCharges'];


            // echo "<pre>";
            // print_r($serviceCharges);
            // die;

            for ($i = 0; $i < sizeof($serviceCharges); $i++) {
                // die('aaa');

                $charges_name = $serviceCharges[$i]['charges_name'];
                $chrg_name = $serviceCharges[$i]['chrg_name'];
                $service_type = $serviceCharges[$i]['service_type'];

                if (isset($serviceCharges[$i]['service_charges_id']) && !empty($serviceCharges[$i]['service_charges_id'])) {
                    // die('aa');
                    $id = $serviceCharges[$i]['service_charges_id'];

               

            
                    if ($this->bptchargesmodel->checkbptChargesRecordAllreadyExists($id)) {
                        // Record exists, update it
                        $data = [
                            'bpt_id' => $bpt_id,
                            'chr_name' => $charges_name,
                            'chr_amt' => $chrg_name,
                            'per_fix' => $service_type
                        ];

                        // echo "<pre>";
                        // print_r($data);
                        // die;
                        // Attempt to update the record
                        if ($this->bptchargesmodel->updatebptChargesRecord($id, $data)) {
                            $response = ['status' => 'success', 'message' => 'Record updated successfully'];
                        } else {
                            $response = ['status' => 'error', 'message' => 'Failed to update record'];
                        }
                    } else {
                        $response = ['status' => 'error', 'message' => 'Record with ID ' . $id . ' does not exist'];
                    }
                } else {

                    $data = [
                        'bpt_id' => $bpt_id,
                        'chr_name' => $charges_name,
                        'chr_amt' => $chrg_name,
                        'per_fix' => $service_type
                    ];

                    // Attempt to insert the new record
                    if ($this->bptchargesmodel->insert($data)) {
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
    public function copybptForm()
    {

        // echo "<pre>";
        // print_r($_POST);
        // die;

        //    start miles
        $milesfor = $_POST['milesfor'];
        $bpt_id =  $_POST['bpt_id'];
        $min_miles = $milesfor['min_miles'];
        $min_charges = $milesfor['min_charges'];
        $per_charges = $milesfor['per_charges'];

        if ($this->bptmilesModel->deletemilesforRecord($bpt_id)) {
            $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
            echo json_encode($response);
        }


        $data = [
            'bpt_id' => $bpt_id,
            'min_miles' => $min_miles,
            'min_charges' => $min_charges,
            'per_charges' => $per_charges


        ];

        if ($this->bptmilesModel->insert($data)) {
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

        if ($this->bptweightModel->deleteweightRecord($bpt_id)) {
            $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
            echo json_encode($response);
        }

        $data = [
            'bpt_id' => $bpt_id,
            'min_weight' => $min_weight,
            'min_charges' => $min_weight_charges,
            'per_charges' => $per_weight_charges
        ];

        // echo "<pre>";
        // print_r($data);
        // die();





        if ($this->bptweightModel->insert($data)) {
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

        if ($this->bptwaitingModel->deletewaitingRecord($bpt_id)) {
            $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
            echo json_encode($response);
        }

        $data = [
            'bpt_id' => $bpt_id,
            'min_waiting' => $min_waiting,
            'min_charges' => $min_waiting_charges,
            'per_charges' => $per_waiting_charges
        ];



        if ($this->bptwaitingModel->insert($data)) {
            $response = array('status' => 'success', 'message' => ' add record Successfull');
        } else {
            $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
        }

        // end waiting


        $bpt_recordsdata = $_POST['bpt_recordsdata'];
        $name = $bpt_recordsdata['name'];
        $dir_id = $bpt_recordsdata['dir_id'];
        $description = $bpt_recordsdata['description'];
        $weight_for = $bpt_recordsdata['weight_for'];
        $weight_ran = $bpt_recordsdata['weight_ran'];
        $miles_for = $bpt_recordsdata['miles_for'];
        $miles_ran = $bpt_recordsdata['miles_ran'];
        $waiting_for = $bpt_recordsdata['waiting_for'];
        $waiting_ran = $bpt_recordsdata['waiting_ran'];
        $is_county = $bpt_recordsdata['is_county'];
        $weekend = $bpt_recordsdata['weekend'];
        $night = $bpt_recordsdata['night'];
        $is_weekend = $bpt_recordsdata['is_weekend'];
        $weekend_per_fix = $bpt_recordsdata['weekend_per_fix'];
        $weekend_value = $bpt_recordsdata['weekend_value'];
        $is_holiday = $bpt_recordsdata['is_holiday'];
        $holiday_per_fix = $bpt_recordsdata['holiday_per_fix'];
        $holiday_value = $bpt_recordsdata['holiday_value'];
        $is_night = $bpt_recordsdata['is_night'];
        $night_per_fix = $bpt_recordsdata['night_per_fix'];
        $night_value = $bpt_recordsdata['night_value'];
        $is_higher = $bpt_recordsdata['is_higher'];
        $fuel = $bpt_recordsdata['fuel'];
        $night_to = $bpt_recordsdata['night_to'];
        $night_from = $bpt_recordsdata['night_from'];
        $night_to2 = $bpt_recordsdata['night_to2'];
        $night_from2 = $bpt_recordsdata['night_from2'];
   

        if ($this->bptModel->deletebptRecord($bpt_id)) {
            $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
            echo json_encode($response);
        }



        $data = [
            'id' => $bpt_id,
            'dir_id' => $dir_id,
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
          
        ];


        if ($this->bptModel->insert($data)) {
            $response = array('status' => 'success', 'message' => ' add record Successfull');
        } else {
            $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
        }



        // start sevice
        $bptCharges = $_POST['bptCharges'];
        for ($i = 0; $i < sizeof($bptCharges); $i++) {
            $charges_name = $bptCharges[$i]['chr_name'];
            $chrg_name = $bptCharges[$i]['chr_amt'];
            $service_type = $bptCharges[$i]['per_fix'];

            if ($this->bptchargesmodel->deletebptCharges($bpt_id)) {
                $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
                echo json_encode($response);
                return;
            }

            $chargesdata[] = [
                'bpt_id' => $bpt_id,
                'chr_name' => $charges_name,
                'chr_amt' => $chrg_name,
                'per_fix' => $service_type
            ];
        }

        // echo "<pre>";
        // print_r($chargesdata);
        // die;
        if ($this->bptchargesmodel->insertBatch($chargesdata)) {
            $response = ['status' => 'success', 'message' => 'Record added successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to add record'];
        }

        // end service charge 



        // county
        $bptcounty = $_POST['bptcounty'];

        for ($i = 0; $i < sizeof($bptcounty); $i++) {
            $from_county = $bptcounty[$i]['from_county'];
            $to_county = $bptcounty[$i]['to_county'];
            $charges = $bptcounty[$i]['charges'];


            if ($this->bptcountyModel->deletecountyRecord($bpt_id)) {
                $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
                echo json_encode($response);
            }

            $countydata[] = [
                'bpt_id' => $bpt_id,
                'from_county' => $from_county,
                'to_county' => $to_county,
                'charges' => $charges
            ];
        }
        if ($this->bptcountyModel->insertBatch($countydata)) {
            $response = array('status' => 'success', 'message' => ' add record Successfull');
        } else {
            $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
        }

        // end county

        // milesran 

        $milesran = $_POST['milesran'];

        for ($i = 0; $i < sizeof($milesran); $i++) {
            $from1 = $milesran[$i]['from1'];
            $to1 = $milesran[$i]['to1'];
            $value1 = $milesran[$i]['value1'];


            if ($this->bptmilesranModel->deletemilesranRecord($bpt_id)) {
                $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
                echo json_encode($response);
            }

            $milesrandata[] = [
                'bpt_id' => $bpt_id,
                'from1' => $from1,
                'to1' => $to1,
                'value1' => $value1
            ];
        }
        //             echo "<pre>";
        // print_r($milesrandata);
        // die;

        if ($this->bptmilesranModel->insertBatch($milesrandata)) {
            $response = array('status' => 'success', 'message' => ' add record Successfull');
        } else {
            $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
        }
        // end milesran


        // weightran 

        $weightran = $_POST['weightran'];

        for ($i = 0; $i < sizeof($weightran); $i++) {
            $from1 = $weightran[$i]['from1'];
            $to1 = $weightran[$i]['to1'];
            $value1 = $weightran[$i]['value1'];


            if ($this->bptweightranModel->deleteweightranRecord($bpt_id)) {
                $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
                echo json_encode($response);
                return;
            }

            $weightrandata[] = [
                'bpt_id' => $bpt_id,
                'from1' => $from1,
                'to1' => $to1,
                'value1' => $value1
            ];

            //   echo "<pre>";
            //   print_r($weightrandata);
            //   die;

        }
        if ($this->bptweightranModel->insertBatch($weightrandata)) {
            $response = array('status' => 'success', 'message' => ' add record Successfull');
        } else {
            $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
        }
        // end weightran


        //   waitingran

        $waitingran = $_POST['waitingran'];

        for ($i = 0; $i < sizeof($waitingran); $i++) {
            $from1 = $waitingran[$i]['from1'];
            $to1 = $waitingran[$i]['to1'];
            $value1 = $waitingran[$i]['value1'];


            if ($this->bptwaitingranModel->deletewaitingranRecord($bpt_id)) {
                $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
                echo json_encode($response);
            }

            $waitingdata[] = [
                'bpt_id' => $bpt_id,
                'from1' => $from1,
                'to1' => $to1,
                'value1' => $value1
            ];
        }
        if ($this->bptwaitingranModel->insertBatch($waitingdata)) {
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
