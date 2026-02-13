<?php

namespace App\Controllers;

use App\Models\CheckAirports;
use CodeIgniter\Controller;





// dpt models
use App\Models\DptdirModel;
use App\Models\DptModel;
use App\Models\DptwaitingModel;
use App\Models\DptmilesModel;
use App\Models\DptweightModel;
use App\Models\DptwaitingranModel;
use App\Models\DptmilesranModel;
use App\Models\DptweightranModel;

class DptController extends BaseController

{


    public function __construct()
    {
        $this->dptModel = new DptModel();
        $this->dptdirModel = new DptdirModel();
        $this->dptwaitingModel = new DptwaitingModel();
        $this->dptmilesModel = new DptmilesModel();
        $this->dptweightModel = new DptweightModel();
        $this->dptwaitingranModel = new DptwaitingranModel();
        $this->dptmilesranModel = new DptmilesranModel();
        $this->dptweightranModel = new DptweightranModel();

        // cpt models

    }


    public function dptDir()
    {

        $data['dpt_records'] = $this->dptdirModel->GetdptDirData();

        // echo "<pre>";
        // print_r($data);
        // die;

        return view('dpt/dptdir', $data);
    }

    public function AdddptData()
    {

        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');


        $data = [
            'name'           =>  $name,
            'description'     => $description,

        ];

        // print_r($data);
        $this->dptdirModel->insert($data);
        return redirect()->to(base_url('dptdir'));
    }

    public function dpt($id)
    {


        $data['dpt_data'] = $this->dptModel->GetdptDataById($id);
        $data['dpt_namerecords'] = $this->dptdirModel->GetdptDirDatabyid($id);


        // echo  "<pre>";
        // print_r($data);
        // die;

        return view('dpt/dpt', $data);
    }







    public function Showdptlist($id)
    {




        $data['milesran'] = $this->dptmilesranModel->GetmilesranRecord($id);
        $data['weightran'] = $this->dptweightranModel->GetweightranRecord($id);
        $data['waitingran'] = $this->dptwaitingranModel->GetwaitingranRecord($id);
        $data['dptrecord_data'] = $this->dptModel->GetdptRecordsById($id);
        $data['dpt_recordsdata'] = $this->dptModel->GetalldptRecord();
        $data['milesfor'] = $this->dptmilesModel->GetmilesforRecord($id);
        $data['weightfor'] = $this->dptweightModel->GetweightRecord($id);
        $data['waitingfor'] = $this->dptwaitingModel->GetwaitingRecord($id);
       
        $data['dpt_id'] = $id;
        //  echo "<pre>";       
        //   print_r($data['waitingran'] );
        
        //  die;    





        return view('dpt/dptlist', $data);
    }

    public function GetUserallData()
    {

        $id = $_GET['id'];
        $data['milesran'] = $this->dptmilesranModel->GetmilesranRecord($id);
        $data['weightran'] = $this->dptweightranModel->GetweightranRecord($id);
        $data['waitingran'] = $this->dptwaitingranModel->GetwaitingranRecord($id);
        $data['dptrecord_data'] = $this->dptModel->GetdptRecordsById($id);
        $data['dpt_recordsdata'] = $this->dptModel->GetdptRecordById($id);
        $data['milesfor'] = $this->dptmilesModel->GetmilesforRecord($id);
        $data['weightfor'] = $this->dptweightModel->GetweightRecord($id);
        $data['waitingfor'] = $this->dptwaitingModel->GetwaitingRecord($id);



        return json_encode($data);
    }





    public function Insertdpt()
    {


        // die('helo');
        // echo "<pre>";
        // print_r($_POST);
        // die;

        $dpt_id = $this->request->getVar('id');

        ////////////////////////////////////////// AJAX /////////////////////////////////////////

        // miles base using ajac by range 

        if (isset($_POST['act']) && $_POST['act'] == 'add_milesran') {
            $milesran_id = $this->request->getVar('milesran_id');
            $dpt_id = $this->request->getVar('dpt_id');
            $miles_from = $this->request->getVar('miles_from');
            $miles_to = $this->request->getVar('miles_to');
            $miles_base_charge = $this->request->getVar('miles_base_charge');
            $miles_range = $this->request->getVar('miles_range') ? 1 : 0;

            $datamilesrange = [

                'miles_ran' => $miles_range,
                'miles_for' => 0,
            ];


            // print_r($datamilesrange);
            // die;

            if ($this->dptModel->UpdatepalletsData($dpt_id, $datamilesrange)) {

                $response = array('status' => 'success', 'message' => 'update data succesfull');
            }


            // print_r($miles_range);
            // die;


            for ($i = 0; $i < sizeof($miles_from); $i++) {
                $from = $miles_from[$i];
                $to = $miles_to[$i];
                $charges = $miles_base_charge[$i];


                if (isset($milesran_id[$i])) {
                    $id = $milesran_id[$i];
                    if ($this->dptmilesranModel->checkmilesranRecordAllreadyExists($id)) {


                        // Record exists, update it
                        $data = [
                            'dpt_id' => $dpt_id,
                            'from1' => $from,
                            'to1' => $to,
                            'value1' => $charges
                        ];
                        if ($this->dptmilesranModel->updatemilesranRecord($id, $data)) {
                            $response = array('status' => 'success', 'message' => '  record updated Successfull');
                        } else {
                            $response = array('status' => 'error', 'message' => 'failed to   record updated Successfull');
                        }
                    }
                } else {
                    $data = [
                        'dpt_id' => $dpt_id,
                        'from1' => $from,
                        'to1' => $to,
                        'value1' => $charges
                    ];



                    if (empty($from) || empty($to) || empty($charges)) {
                        $response = array('status' => 'error', 'message' => 'filled all field');
                        continue;
                    }



                    if ($this->dptmilesranModel->insert($data)) {
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
            $dpt_id = $this->request->getVar('dpt_id');
            $weight_f = $this->request->getVar('weight_form');
            $weight_t = $this->request->getVar('weight_to');
            $weight_c = $this->request->getVar('weight_charge');
            $weight_byrange = $this->request->getVar('weight_byrange') ? 1 : 0;

            $weight_byrangedata = [

                'weight_ran' => $weight_byrange,
                'weight_for' => 0,
            ];


           

            if ($this->dptModel->UpdatepalletsData($dpt_id, $weight_byrangedata)) {

                $response = array('status' => 'success', 'message' => 'update Data');
            }



            // print_r($weight_t);
            // die;



            $data_length = sizeof($weight_f);

            for ($i = 0; $i < $data_length; $i++) {
                if (isset($weightranid[$i])) {
                    $id = $weightranid[$i];
                    if ($this->dptweightranModel->checkweightRecordAllreadyExists($id)) {

                        $data = [
                            'dpt_id' => $dpt_id,
                            'from1' => $weight_f[$i],
                            'to1' => $weight_t[$i],
                            'value1' => $weight_c[$i]
                        ];
                        if ($this->dptweightranModel->updateweightranRecord($id, $data)) {
                            $response = ['status' => 'success', 'message' => 'Record updated successfully'];
                        } else {
                            $response = ['status' => 'error', 'message' => 'Failed to update record'];
                        }
                    }
                } else {
                    $data = [
                        'dpt_id' => $dpt_id,
                        'from1' => $weight_f[$i],
                        'to1' => $weight_t[$i],
                        'value1' => $weight_c[$i]
                    ];
                    if (empty($weight_f[$i]) || empty($weight_t[$i]) || empty($weight_c[$i])) {
                        // $response = ['status' => 'error', 'message' => 'Please fill all fields'];
                        continue;
                    }

                    // echo "<pre>";
                    // print_r($data);
                    // die();
                    if ($this->dptweightranModel->insert($data)) {
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
            $dpt_id = $this->request->getVar('dpt_id');
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

            if ($this->dptModel->UpdatepalletsData($dpt_id, $waiting_byrangedata)) {

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
                    if ($this->dptwaitingranModel->checkwaitingranRecordAllreadyExists($id)) {
                        // Record exists, update it

                        // die('update');
                        $data = [
                            'dpt_id' => $dpt_id,
                            'from1' => $waiting_time_form[$i],
                            'to1' => $waiting_time_to[$i],
                            'value1' => $waiting_time_charges[$i]
                        ];

                        // echo "<pre>";
                        // print_r($data);
                        // die;
                        if ($this->dptwaitingranModel->updatewaitingranRecord($id, $data)) {
                            $response = ['status' => 'success', 'message' => 'Record updated successfully'];
                        } else {
                            $response = ['status' => 'error', 'message' => 'Failed to update record'];
                        }
                    }
                } else {

                    // die('insert');
                    $data = [
                        'dpt_id' => $dpt_id,
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

                    if ($this->dptwaitingranModel->insert($data)) {
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





        if (isset($_REQUEST['act']) && $_REQUEST['act'] == 'dptmainformData') {
            $payloadData = $this->request->getJSON(true);


            //  echo "<pre>";
            // print_r($payloadData);
            // die(); 

            // Example of accessing specific data fields
            $dpt_id = $payloadData['dpt_id'];
            $dpt_name = $payloadData['dpt_name'];
            $dpt_description = $payloadData['dpt_description'];
            $fuel = $payloadData['fuel'];
            $weekend_value = $payloadData['weekend_value'];
            $holiday_value = $payloadData['holiday_value'];
            $night_value = $payloadData['night_value'];
            $night_to = $payloadData['night_to'];
            $night_from2 = $payloadData['night_from2'];

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
                'id' => $dpt_id,
                'name' => $dpt_name,
                'miles_for' => $miles_formula,
                'miles_ran' => 0,
                'waiting_for' => $waiting_byformula,
                'waiting_ran' => 0,
                'weight_for' => $weight_byformula,
                'weight_ran' => 0,
                'description' => $dpt_description,
                'fuel' => $fuel,
                'night_from' => $night_from2,
                'night_to' => $night_to,
                'is_weekend' => $checkweekend,
                'is_weekend_per' => $weekend_per_fix,
                'is_holiday' => $checkholiday,
                'is_holiday_per' => $holiday_per_fix,
                'is_night' => $checknightcharges,
                'is_night_per' => $night_per_fix,
                'is_higher' => $checkheigher,
                'weekend_per' => $weekend_value,
                'holiday_per' => $holiday_value,
                'night_per' => $night_value
            ];


            // echo "<pre>";
            // print_r($palletsData);
            // die;


            if ($this->dptModel->checkRecordExists($dpt_id)) {

                // die('hello');
                if ($this->dptModel->UpdatepalletsData($dpt_id, $palletsData)) {
                    $response = ['status' => 'success', 'message' => 'Record updated successfully'];
                } else {
                    $response = ['status' => 'error', 'message' => 'something went wrong '];
                }

                //    die();

            } else {
                // die('mm');
                $palletsData['dpt_id'] = $dpt_id;
                $this->dptModel->insert($palletsData);
                $response = ['status' => 'success', 'message' => 'Record added successfully'];
            }




            // Dpt Waiting data
            $min_waiting = $payloadData['min_waiting'];
            $min_waiting_charge = $payloadData['min_waiting_charge'];
            $per_waiting_charge = $payloadData['per_waiting_charge'];

            $dptwaiting = [
                'dpt_id' => $dpt_id,
                'min_waiting' => $min_waiting,
                'min_charges' => $min_waiting_charge,
                'per_charges' => $per_waiting_charge
            ];



            if ($this->dptwaitingModel->checkRecordExists($dpt_id)) {
                $this->dptwaitingModel->UpdatewaitingData($dpt_id, $dptwaiting);
                $response = ['status' => 'success', 'message' => 'Waiting updated successfully'];
            } else {
                $this->dptwaitingModel->insert($dptwaiting);
                $response = ['status' => 'success', 'message' => 'Add Waiting record successfully'];
            }



            // Miles data
            $min_miles = $payloadData['min_miles'];
            $min_charges = $payloadData['min_charges'];
            $per_charges = $payloadData['per_charges'];

            $miles_base = [
                'dpt_id' => $dpt_id,
                'min_miles' => $min_miles,
                'min_charges' => $min_charges,
                'per_charges' => $per_charges
            ];



            if ($this->dptmilesModel->checkRecordExists($dpt_id)) {
                $this->dptmilesModel->UpdatemilesData($dpt_id, $miles_base);
                $response = ['status' => 'success', 'message' => 'Miles Record updated successfully'];
            } else {
                $this->dptmilesModel->insert($miles_base);
                $response = ['status' => 'success', 'message' => 'Miles Record Add successfully'];
            }

            // Weight data
            $min_weight = $payloadData['min_weight'];
            $minweight_charge = $payloadData['minweight_charge'];
            $per_weight_charge = $payloadData['per_weight_charge'];

            $dptweight = [
                'dpt_id' => $dpt_id,
                'min_weight' => $min_weight,
                'min_charges' => $minweight_charge,
                'per_charges' => $per_weight_charge
            ];

            // echo "<pre>";
            // print_r($dptweight);
            // die;

            if ($this->dptweightModel->checkRecordExists($dpt_id)) {
                $this->dptweightModel->UpdateweightData($dpt_id, $dptweight);
                $response = ['status' => 'success', 'message' => 'Record updated successfully'];
            } else {
                $this->dptweightModel->insert($dptweight);
                $response = ['status' => 'success', 'message' => 'Record Add successfully'];
            }

            // Process service charges

            echo json_encode($response);
            exit;
        }
    }


    // copy form
    public function copydptForm()
    {


    //     echo "<pre>";
    //    print_r($_POST);
    //    die;
        //    start miles
        $milesfor = $_POST['milesfor'];
        $dpt_id =  $_POST['dpt_id'];
        $min_miles = $milesfor['min_miles'];
        $min_charges = $milesfor['min_charges'];
        $per_charges = $milesfor['per_charges'];

        if ($this->dptmilesModel->deletemilesforRecord($dpt_id)) {
            $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
            echo json_encode($response);
        }


        $data = [
            'dpt_id' => $dpt_id,
            'min_miles' => $min_miles,
            'min_charges' => $min_charges,
            'per_charges' => $per_charges


        ];

        // print_r($data);
        // die;

        if ($this->dptmilesModel->insert($data)) {
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

        if ($this->dptweightModel->deleteweightRecord($dpt_id)) {
            $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
            echo json_encode($response);
        }

        $data = [
            'dpt_id' => $dpt_id,
            'min_weight' => $min_weight,
            'min_charges' => $min_weight_charges,
            'per_charges' => $per_weight_charges
        ];

        // echo "<pre>";
        // print_r($data);
        // die();





        if ($this->dptweightModel->insert($data)) {
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

        if ($this->dptwaitingModel->deletewaitingRecord($dpt_id)) {
            $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
            echo json_encode($response);
        }

        $data = [
            'dpt_id' => $dpt_id,
            'min_waiting' => $min_waiting,
            'min_charges' => $min_waiting_charges,
            'per_charges' => $per_waiting_charges
        ];

       



        if ($this->dptwaitingModel->insert($data)) {
            $response = array('status' => 'success', 'message' => ' add record Successfull');
        } else {
            $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
        }

        // end waiting


        $dpt_recordsdata = $_POST['dpt_recordsdata'];


        // echo "<pre>";
        // print_r($dpt_recordsdata);
        // die;
       
         $name = $dpt_recordsdata['name'];
         $dir_id = $dpt_recordsdata['dir_id'];
        $description = $dpt_recordsdata['description'];
        $weight_for = $dpt_recordsdata['weight_for'];
        $weight_ran = $dpt_recordsdata['weight_ran'];
        $miles_for = $dpt_recordsdata['miles_for'];
        $miles_ran = $dpt_recordsdata['miles_ran'];
        $waiting_for = $dpt_recordsdata['waiting_for'];
        $waiting_ran = $dpt_recordsdata['waiting_ran'];
   
        $weekend = $dpt_recordsdata['weekend'];
        $night = $dpt_recordsdata['night'];
        $is_weekend = $dpt_recordsdata['is_weekend'];
        $is_weekend_per = $dpt_recordsdata['is_weekend_per'];
        $weekend_per = $dpt_recordsdata['weekend_per'];
        $is_holiday = $dpt_recordsdata['is_holiday'];
        $is_holiday_per = $dpt_recordsdata['is_holiday_per'];
        $holiday_per = $dpt_recordsdata['holiday_per'];
        $is_night = $dpt_recordsdata['is_night'];
        $night_fixed = $dpt_recordsdata['is_night_per'];
        $night_per = $dpt_recordsdata['night_per'];
        $is_higher = $dpt_recordsdata['is_higher'];
        $fuel = $dpt_recordsdata['fuel'];
        $night_to = $dpt_recordsdata['night_to'];
        $night_from = $dpt_recordsdata['night_from'];
     


       

        if ($this->dptModel->deletedptRecord($dpt_id)) {
            $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
            echo json_encode($response);
        }


        $data = [
            'id' => $dpt_id,
            'name' => $name,
            'dir_id'=>$dir_id,
            'description' => $description,
            'weight_for' => $weight_for,
            'weight_ran' => $weight_ran,
            'miles_for' => $miles_for,
            'miles_ran' => $miles_ran,
            'waiting_for' => $waiting_for,
            'waiting_ran' => $waiting_ran,
            'weekend' => $weekend,
            'night' => $night,
            'is_weekend' => $is_weekend,
            'is_weekend_per' => $is_weekend_per,
            'weekend_value' => $weekend_per,
            'is_holiday' => $is_holiday,
            'is_holiday_per' => $is_holiday_per,
            'holiday_per' => $holiday_per,
            'is_night' => $is_night,
            'is_night_per' => $night_fixed,
            'night_per' => $night_per,
            'is_higher' => $is_higher,
            'fuel' => $fuel,
            'night_to' => $night_to,
            'night_from' => $night_from
           
            
        ];
        

        if ($this->dptModel->insert($data)) {
            $response = array('status' => 'success', 'message' => ' add record Successfull');
        } else {
            $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
        }

        // milesran 

        $milesran = $_POST['milesran'];

        for ($i = 0; $i < sizeof($milesran); $i++) {
            $from1 = $milesran[$i]['from1'];
            $to1 = $milesran[$i]['to1'];
            $value1 = $milesran[$i]['value1'];


            if ($this->dptmilesranModel->deletemilesranRecord($dpt_id)) {
                $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
                echo json_encode($response);
            }

            $milesrandata[] = [
                'dpt_id' => $dpt_id,
                'from1' => $from1,
                'to1' => $to1,
                'value1' => $value1
            ];
        }
        //             echo "<pre>";
        // print_r($milesrandata);
        // die;

        if ($this->dptmilesranModel->insertBatch($milesrandata)) {
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


            if ($this->dptweightranModel->deleteweightranRecord($dpt_id)) {
                $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
                echo json_encode($response);
                return;
            }

            $weightrandata[] = [
                'dpt_id' => $dpt_id,
                'from1' => $from1,
                'to1' => $to1,
                'value1' => $value1
            ];

            //   echo "<pre>";
            //   print_r($weightrandata);
            //   die;

        }
        if ($this->dptweightranModel->insertBatch($weightrandata)) {
            $response = array('status' => 'success', 'message' => ' add record Successfull');
        } else {
            $response = array('status' => 'error', 'message' => ' failed to  record Successfull');
        }
        // end weightran




        //   waitingran

        $waitingran = $_POST['waitingran'];

        // echo "<pre>";
        // print_r($waitingran);
        // die;

        for ($i = 0; $i < sizeof($waitingran); $i++) {
            $from1 = $waitingran[$i]['from1'];
            $to1 = $waitingran[$i]['to1'];
            $value1 = $waitingran[$i]['value1'];


            if ($this->dptwaitingranModel->deletewaitingranRecord($dpt_id)) {
                $response = ['status' => 'success', 'message' => 'Existing record deleted successfully'];
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to delete existing record'];
                echo json_encode($response);
            }

            $waitingdata[] = [
                'dpt_id' => $dpt_id,
                'from1' => $from1,
                'to1' => $to1,
                'value1' => $value1
            ];
            
           
        }
        if ($this->dptwaitingranModel->insertBatch($waitingdata)) {
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
