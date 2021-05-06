<?php

namespace App\Http\Livewire\Page\Siskop\Member\Individual;

use App\Models\AccountMaster;
use App\Models\State;
use App\Models\Country;
use App\Models\Gender;
use App\Models\IdentityType;
use App\Models\Language;
use App\Models\Marital;
use App\Models\Member;
use App\Models\MemberStatus;
use App\Models\MemberType;
use App\Models\Race;
use App\Models\Title;
use Livewire\Component;

use Illuminate\Database\Eloquent\Collection;

class Show extends Component
{
    public  /*general use*/     $uuid, $customer, $addresses, $families, $states, $countries, $genders, $races, $maritals, $identity_types, $other_identity_types, $languages, $titles, $relations, $religions, $statuses, $types, $guarantee_accounts;

    protected $rules = [
        'customer.title_id'                       => '',
        'customer.name'                           => '',
        'customer.identity_type_id'               => '',
        'customer.identity_no'                    => '',
        'customer.other_identity_type_id'         => '',
        'customer.other_identity_no'              => '',
        'customer.gender_id'                      => '',
        'customer.birth_date'                     => '',
        'customer.race_id'                        => '',
        'customer.language_id'                    => '',
        'customer.marital_id'                     => '',
        'customer.country_id'                     => '',
        'customer.income_group_id'                => '',
        'customer.phone'                          => '',
        'customer.email'                          => '',
        'customer.current_employer_name'          => '',
        'customer.current_employment_date'        => '',
        'customer.current_employent_year_service' => '',
        'customer.entity_type_id'                 => '',
        'customer.bnm_customer_type_id'           => '',
        'customer.business_activity_code_id'      => '',
        'customer.business_type_id'               => '',
        'customer.franchisor_name'                => '',
        'customer.brand_name'                     => '',
        'customer.risk_rating'                    => '',
        'customer.risk_rating_date'               => '',
        'customer.watchlist_type_id'              => '',
        'customer.review_frequency_id'            => '',
        'customer.watchlist_start_date'           => '',
        'customer.watchlist_end_date'             => '',
        'customer.watchlist_remarks'              => '',

        'customer.ref_no'                         => '',
        'customer.status_id'                      => '',
        'customer.type_id'                        => '',
        'customer.apply_date'                     => '',
        'customer.start_date'                     => '',
        'customer.end_date'                       => '',

        'customer.total_share'                    => '',
        'customer.monthly_share'                  => '',
        'customer.last_purchase_amount'           => '',
        'customer.last_purchase_date'             => '',
        'customer.last_selling_amount'            => '',
        'customer.last_selling_date'              => '',

        'customer.total_contribution'             => '',
        'customer.monthly_contribution'           => '',
        'customer.last_payment_amount'            => '',
        'customer.last_payment_date'              => '',
        'customer.last_withdraw_amount'           => '',
        'customer.last_withdraw_date'             => '',
    ];


    public function mount(){
        $this->customer = Member::where('uuid','=',$this->uuid)->first();

        $this->genders              = Gender::all();
        $this->races                = Race::all();
        $this->maritals             = Marital::all();
        $this->identity_types       = IdentityType::all();
        $this->other_identity_types = IdentityType::all();
        $this->languages            = Language::all();
        $this->titles               = Title::all();
        $this->statuses             = MemberStatus::all();
        $this->types                = MemberType::where('id','<>',4)->get();

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

        $this->guarantee_accounts = AccountMaster::where('account_status','=',1)
                                    ->where(function($query) {
                                        $query
                                            ->orWhere('gtr1', '=', $this->customer->ref_no)
                                            ->orWhere('gtr2', '=', $this->customer->ref_no);
                                    })
                                    ->get();
    }

    public function render(){
        return view('livewire.page.siskop.member.individual.show',[
            'bumi'=>Race::where('id','=',$this->customer->race_id)->first()->bumi == 1 ? 'YES':'NO'
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
