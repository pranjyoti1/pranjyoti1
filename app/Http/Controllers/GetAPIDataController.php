<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Gender;
use App\Models\Employment_Status;
use App\Models\Highest_Education;
use App\Models\Marital_Status;
use App\Models\Religion;
use App\Models\Caste;
use App\Models\District;
use App\Models\Territory_type;
use App\Models\Address;
use Response;







use File;

class GetAPIDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData(){
        
        $json =  File::get(public_path("data/sample.json"));
        
         $datas = json_decode($json);
         if (json_last_error()) {
            die('Invalid JSON provided!');
        }
        // dd($datas);
    //  dd ($datas->initiated_data->attribute_details->applicant_name);
        foreach ($datas as $key => $value){
           
                // dd ($value->initiated_data->attribute_details->applicant_name);
                $gender=Gender::where('description',$value->initiated_data->attribute_details->gender_jobseeker)->first();
                $emp_status=Employment_Status::where('description',$value->initiated_data->attribute_details->current_employment_status)->first();
                
                $highest_edu=Highest_Education::where('description',$value->initiated_data->attribute_details->highest_educational_level)->first();
                // dd($highest_edu);
                
                $marital_status=Marital_Status::where('description',$value->initiated_data->attribute_details->marital_status)->first();
                $religion=Religion::where('religion_description',$value->initiated_data->attribute_details->religion)->first();
                $caste=Caste::where('caste_description',$value->initiated_data->attribute_details->caste)->first();
                $district=District::where('district_name',$value->initiated_data->attribute_details->district)->first();
                $territory=Territory_type::where('description',$value->initiated_data->attribute_details->residence)->first();
               
                // dd($emp_status);
                $application= new Application();
                $application->ApplicationFormID=$value->initiated_data->appl_id;
                $application->FirstName=$value->initiated_data->attribute_details->applicant_name;
                $application->DOB=$value->initiated_data->attribute_details->date_of_birth;
                $application->GuardianName=$value->initiated_data->attribute_details->fathers_name__guardians_name;
                $application->MobileNo=$value->initiated_data->attribute_details->contact_no;
                $application->Gender=$gender->gender_id;
                $application->EmploymentStatus=$emp_status->emp_status_id;
                $application->PrimaryLanguage=1;
                $application->HighestEducation=$highest_edu->highest_edu_id;
                $application->MaritalStatus=$marital_status->marital_status_id;
                $application->ReligionID=$religion->religion_id;
                $application->CasteCode=$caste->caste_id;
                $application->UIDType=11;
                $application->UIDNumber=$value->initiated_data->appl_id;
               
                $save=$application->save();

                $address= new Address();
                $address->ApplicationFormID=$value->initiated_data->appl_id;
                $address->Address1=$value->initiated_data->attribute_details->vill_town_ward_city_p;
                $address->District=$district->district_id;
                $address->AddressType='R';
                $address->AddressSubType='C';
                $address->TerritoryType=$territory->territory_id;
                $address->Pincode=$value->initiated_data->attribute_details->pin_code_p;
                
                $save1=$address->save();

       }
    }
public function ncsdata(){
    $data=[];
    $address=[];
    $users = Application::all();
    // dd($users);
foreach($users as $user){
    $addresses=Address::where('ApplicationFormID',$user->ApplicationFormID)->first();
    $data['ApplicationFormID']=$user->ApplicationFormID;
    $data['FirstName']=$user->FirstName;
    $data['Addresses']=$address;
    // $address['Address1']=$addresses->Address1;
    array_push($data);
}

return Response::json($data);
    
}

    public function index()
    {
        //
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
        //
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
