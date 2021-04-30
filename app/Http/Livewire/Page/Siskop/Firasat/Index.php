<?php

namespace App\Http\Livewire\Page\Siskop\Firasat;

use Livewire\Component;

class Index extends Component
{
    public  $uuid,                  $customer,              $products,              $concepts;

    public  $product_id,            $concept_id,            $calculation_method;
    public  $approved_date,         $financing_amount,      $profit_rate,           $duration,
            $selling_price,         $total_profit_amount,   $instal_amount,         $grace_period,
            $account_no,            $show_schedule,         $schedules;

    public function mount(){
        $this->product_id          = null;
        $this->concept_id          = null;
        $this->account_no          = 'XXXXXXXXXX';
        $this->approved_date       = date('Y-m-d');;
        $this->financing_amount    = number_format(0,2,'.',',');
        $this->profit_rate         = number_format(0,2,'.',',');
        $this->duration            = number_format(0,0,'.',',');
        $this->calculation_method  = 'Flat Rate';
        $this->selling_price       = number_format(0,2,'.',',');
        $this->total_profit_amount = number_format(0,2,'.',',');
        $this->instal_amount       = number_format(0,2,'.',',');
        $this->grace_period        = number_format(0,2,'.',',');
        $this->show_schedule       = false;
        $this->show_schedule       = false;
    }

    public function render()
    {
        $this->account_no          = 'XXXXXXXXXX';

        if(isset($this->product_id) or $this->product_id <> ''){
            $product = $this->products->where('id','=',$this->product_id)->first();
            $product_code = $product->product_code;
            $product_sub_code = $product->product_sub_code;
            $this->account_no = $product_code.$product_sub_code.'XXXXXX';
        }

        return view('livewire.page.siskop.firasat.index');
    }

    public function calculate(){
        if($this->financing_amount == 0 or $this->financing_amount == ''){
            $this->dispatchBrowserEvent('swal',[
                'title' => 'Error!',
                'text'  => 'Financing Amount cannot be 0 or empty.',
                'icon'  => 'error',
                'showConfirmButton' => false,
                'timer' => 1500,
            ]);
            return;
        }
        if($this->profit_rate == ''){
            $this->dispatchBrowserEvent('swal',[
                'title' => 'Error!',
                'text'  => 'Profit Rate cannot be empty.',
                'icon'  => 'error',
                'showConfirmButton' => false,
                'timer' => 1500,
            ]);
            return;
        }
        if($this->duration == 0 or $this->duration == ''){
            $this->dispatchBrowserEvent('swal',[
                'title' => 'Error!',
                'text'  => 'Financing Amount cannot be 0 or empty.',
                'icon'  => 'error',
                'showConfirmButton' => false,
                'timer' => 1500,
            ]);
            return;
        }
        // if($this->grace_period or $this->grace_period == ''){}
        $purchase_price     = floatval(preg_replace('/[^\d.]/', '', $this->financing_amount));
        $profit_rate        = floatval(preg_replace('/[^\d.]/', '', $this->profit_rate));
        $duration           = floatval(preg_replace('/[^\d.]/', '', $this->duration));
        $grace_period       = floatval(preg_replace('/[^\d.]/', '', $this->grace_period));


        $calculation_method = $this->calculation_method;

        $pymt_no_pa = 0;
        $profit_service = 'N';

        if($calculation_method == 'Flat Rate'){
            $pymt_no_pa = 0;
        }else{
            $pymt_no_pa = 12;
        }

        $B_profit_distr = 0;

        if($grace_period == 0){
            $grace_period = 0;
        }

        $payment_period = $duration - $grace_period;

        if($profit_rate == 0){
            $selling_price = $purchase_price;
            $instal_amount  = $purchase_price/$payment_period;
        }else{
            if($calculation_method <> 'Flat Rate'){
                //reducing balance calculation
                $i_duration = $duration/12;
                $i = $pymt_no_pa * $i_duration;
                $R = ($profit_rate /100) / $pymt_no_pa;
                $N1 = (1+$R)^$i;
                $up = $R * $N1;
                $down = $N1 - 1;
                $payment_period = $duration - $grace_period;
                $instal_amount = $purchase_price * $up/$down;

                if($grace_period > 0){ //x guna
                    if($profit_service == 'N'){
                        $B_profit_distr = (($i * $purchase_price) * $grace_period) / $payment_period;
                        $instal_amount = $instal_amount + $B_profit_distr;
                    }
                }

                if($profit_service == 'Y'){//x guna
                    $selling_price = ($instal_amount * $payment_period) + (($i * $purchase_price) * $grace_period);
                    $B_profit_distr = 0;
                }else{
                    $selling_price = ($instal_amount * $payment_period);
                }
                // End of reducing balance calculation
            }else{
                // Flat Rate calculation
                $i = ($profit_rate / 100) / 12;

                $profit = $profit_rate / 100 * $purchase_price;

                $total_profit = ($duration / 12) * $profit;

                $payment_period = $duration - $grace_period;
                $instal_amount = ($purchase_price + $total_profit) / $payment_period;

                if($grace_period > 0){
                    if($profit_service == 'N'){
                        $B_profit_distr = (($i * $purchase_price) * $grace_period) / $payment_period;
                        $instal_amount = $instal_amount + $B_profit_distr;
                    }else{
                        $instal_amount = (($purchase_price + $total_profit) - (($i * $purchase_price) * $grace_period)) / $payment_period;
                    }
                }

                if($profit_service == 'Y'){
                    $selling_price = ($instal_amount * $payment_period) + (($i * $purchase_price) * $grace_period);
                    $B_profit_distr = 0;
                }else{
                    $selling_price = ($instal_amount * $payment_period);
                }
            }
        }

        $total_profit_amount = $selling_price - $purchase_price;

        $this->total_profit_amount = number_format($total_profit_amount,2,'.',',');
        $this->selling_price = number_format($selling_price,2,'.',',');
        $this->instal_amount = number_format($instal_amount,2,'.',',');

        $this->repay_sched();
        $this->show_schedule           = true;
    }

    public function repay_sched(){
        $duration               = floatval(preg_replace('/[^\d.]/', '', $this->duration));
        $bal_outstanding        = floatval(preg_replace('/[^\d.]/', '', $this->selling_price));
        $prin_outstanding       = floatval(preg_replace('/[^\d.]/', '', $this->financing_amount));
        $uei_outstanding        = floatval(preg_replace('/[^\d.]/', '', $this->total_profit_amount));
        $instal_amt             = round($bal_outstanding/$duration,2);
        $prin_amt               = round($prin_outstanding/$duration,2);
        $profit_amt             = round($uei_outstanding/$duration,2);

        $schedule = [[
            'instalment_no'     => '0',
            'instal_amt'        => '0',
            'bal_outstanding'   => $bal_outstanding,
            'prin_amt'          => '0',
            'prin_outstanding'  => $prin_outstanding,
            'profit_amt'        => '0',
            'uei_outstanding'   => $uei_outstanding,
        ]];

        for ($i=1; $i <= $duration ; $i++) {
            $bal_outstanding  = $bal_outstanding  - $instal_amt;
            $prin_outstanding = $prin_outstanding - $prin_amt;
            $uei_outstanding  = $uei_outstanding  - $profit_amt;
            if($prin_outstanding < $prin_amt or $uei_outstanding < $profit_amt ){
                $prin_amt = $prin_amt + $prin_outstanding;
                $profit_amt = $profit_amt + $uei_outstanding;
                $instal_amt = $prin_amt + $profit_amt;
                $prin_outstanding = 0;
                $uei_outstanding = 0;
                $bal_outstanding = 0;
            }
            $new_row = [[
                'instalment_no'     => $i,
                'instal_amt'        => $instal_amt,
                'bal_outstanding'   => $bal_outstanding,
                'prin_amt'          => $prin_amt,
                'prin_outstanding'  => $prin_outstanding,
                'profit_amt'        => $profit_amt,
                'uei_outstanding'   => $uei_outstanding,
            ]];
            $schedule = array_merge($schedule, $new_row);
        }

        $this->schedules = $schedule;
    }
}
