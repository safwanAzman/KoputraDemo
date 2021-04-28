<?php

namespace App\Http\Livewire\Page\Siskop\Member\Individual;

use App\Models\State;
use App\Models\Country;
use Livewire\Component;

use Illuminate\Database\Eloquent\Collection;

class Show extends Component
{
    public  /*general use*/     $uuid, $customer, $addresses, $families, $states, $countries;


    public function mount(){
        $this->customer = collect([
            'title_id'                       => 'ENCIK',
            'name'                           => 'MOHD AIZUDDIN BIN MOHD YUSOFF',
            'identity_type_id'               => 'Identity Card(MyKad)',
            'identity_no'                    => '850409-03-5147',
            'other_identity_type_id'         => '',
            'other_identity_no'              => '',
            'gender_id'                      => 'MALE',
            'birth_date'                     => '1985-04-09',
            'race_id'                        => 'MALAY',
            'language_id'                    => 'ENGLISH',
            'marital_id'                     => 'MARRIED',
            'country_id'                     => 'MALAYSIA',
            'income_group_id'                => '',
            'phone'                          => '012-345 6789',
            'email'                          => 'aizuddin.yusoff@ymail.com',

            'current_employer_name'          => '',
            'current_employer_address'       => '',
            'current_employer_phone'         => '',
            'current_employer_fax'           => '',
            'current_employment_date'        => '',
            'current_employent_year_service' => '',
            'current_employment_group_id'    => '',
            'current_employment_status_id'   => '',
            'current_employment_position'    => '',
            'current_salary'                 => '',
            'entity_type_id'                 => '',
            'bnm_customer_type_id'           => '',
            'business_activity_code_id'      => '',
            'business_type_id'               => '',
            'franchisor_name'                => '',
            'brand_name'                     => '',
            'risk_rating'                    => '',
            'risk_rating_date'               => '',
            'watchlist_type_id'              => '',
            'review_frequency_id'            => '',
            'watchlist_start_date'           => '',
            'watchlist_end_date'             => '',
            'watchlist_remarks'              => '',

            'ref_no'                         => '4954',
            'status_id'                      => 'ACTIVE',
            'type_id'                        => 'REGULAR MEMBER',
            'apply_date'                     => '2020-01-05',
            'start_date'                     => '2020-01-15',
            'end_date'                       => '',

            'total_share'                    => '457.47',
            'monthly_share'                  => '30.00',
            'last_purchase_amount'           => '30.00',
            'last_purchase_date'             => '2021-03-25',
            'last_selling_amount'            => '',
            'last_selling_date'              => '',

            'total_contribution'             => '457.47',
            'monthly_contribution'           => '30.00',
            'last_payment_amount'            => '30.00',
            'last_payment_date'              => '2021-03-25',
            'last_withdraw_amount'           => '',
            'last_withdraw_date'             => '',
        ]);

        $this->states     = collect([
            ['id'=> '1',  'description'=>'Johor'],
            ['id'=> '2',  'description'=>'Kedah'],
            ['id'=> '3',  'description'=>'Kelantan'],
            ['id'=> '4',  'description'=>'Melaka'],
            ['id'=> '5',  'description'=>'Negeri Sembilan'],
            ['id'=> '6',  'description'=>'Pahang'],
            ['id'=> '7',  'description'=>'Perak'],
            ['id'=> '8',  'description'=>'Perlis'],
            ['id'=> '9',  'description'=>'Pulau Pinang'],
            ['id'=> '10', 'description'=>'Sabah'],
            ['id'=> '11', 'description'=>'Sarawak'],
            ['id'=> '12', 'description'=>'Selangor'],
            ['id'=> '13', 'description'=>'Terangganu'],
            ['id'=> '14', 'description'=>'Wilayah Persekutuan Kuala Lumpur'],
            ['id'=> '15', 'description'=>'Wilayah Persekutuan Putrajaya'],
            ['id'=> '16', 'description'=>'Wilayah Persekutuan Labuan'],
        ]);
        $this->countries = collect([
            ['id'=> '135', 'description'=>'Malaysia'],
        ]);

        $this->addresses = array();
        $this->families = array();
    }

    public function render(){

        return view('livewire.page.siskop.member.individual.show',[

        ]);
    }

    public function saveDetails(){
        $this->dispatchBrowserEvent('swal',[
            'title' => 'Updated!',
            'text'  => 'The detail has been updated.',
            'icon'  => 'success',
            'showConfirmButton' => false,
            'timer' => 1500,
        ]);
    }

    public function newAddress(){
        $newAddress = [[
            'id'                => NULL,
            'ref_id'            => NULL,
            'address_type_id'   => 3,
            'mail_flag'         => NULL,
            'address1'          => NULL,
            'address2'          => NULL,
            'address3'          => NULL,
            'postcode'          => NULL,
            'town'              => NULL,
            'state_id'          => NULL,
            'country_id'        => 135,
            'phone'             => NULL,
            'fax'               => NULL,
            'created_by'        => 1,
            'updated_by'        => NULL,
            'deleted_by'        => NULL,
            'created_at'        => NULL,
            'updated_at'        => NULL,
            'deleted_at'        => NULL,
        ]];
        $this->addresses = array_merge($this->addresses, $newAddress);
    }

    public function deleteAddress($key){
        unset($this->addresses[$key]);
        $this->dispatchBrowserEvent('swal',[
            'title' => 'Deleted!',
            'text'  => 'The detail has been deleted.',
            'icon'  => 'success',
            'showConfirmButton' => false,
            'timer' => 1500,
        ]);
    }

    public function saveAddress(){
        if(array_sum(array_column($this->addresses, 'mail_flag')) == 1){
            $this->dispatchBrowserEvent('swal',[
                'title' => 'Updated!',
                'text'  => 'The detail has been updated.',
                'icon'  => 'success',
                'showConfirmButton' => false,
                'timer' => 1500,
            ]);
        }else{
            $this->dispatchBrowserEvent('swal',[
                'title' => 'Error!',
                'text'  => 'Only one mailing address needed.',
                'icon'  => 'error',
                'showConfirmButton' => false,
                'timer' => 1500,
            ]);
        }
    }

    public function newFamily(){
        $newFamily = [[
            'name'              => NULL,
            'identity_type_id'  => NULL,
            'identity_no'       => NULL,
            'race_id'           => NULL,
            'religion_id'       => NULL,
            'relation_id'       => NULL,
            'nominee_flag'      => NULL,
            'nominee_share'     => NULL,
        ]];
        $this->families = array_merge($this->families, $newFamily);
    }

    public function deleteFamily($key){
        unset($this->families[$key]);
        $this->dispatchBrowserEvent('swal',[
            'title' => 'Deleted!',
            'text'  => 'The detail has been deleted.',
            'icon'  => 'success',
            'showConfirmButton' => false,
            'timer' => 1500,
        ]);
    }

    public function saveFamily(){
        $this->dispatchBrowserEvent('swal',[
            'title' => 'Updated!',
            'text'  => 'The detail has been updated.',
            'icon'  => 'success',
            'showConfirmButton' => false,
            'timer' => 1500,
        ]);
    }
}
