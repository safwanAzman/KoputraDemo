<?php

namespace App\Http\Livewire\Page\Siskop\Finance;

use Livewire\Component;

class Statements extends Component
{
    public $uuid, $statements;
    public function render(){
        if($this->uuid == 1){
            $this->statements = [
                ['txn_date'   =>'10/04/21','doc_no'   =>'D01316','txn_details'  =>'Disbursements','txn_amount'  =>10000.00,'stmt_balance'  =>15750.00,'cost'    =>0.00,'princp_outs'  =>10000.00,'profit'   =>0.00,'unearned_outs'  =>5750.00,'advance_payment' =>0.00],
                ['txn_date'   =>'09/05/21','doc_no'   =>'MISD02132','txn_details'  =>'Montly Instalment - Salary Deduction','txn_amount'  =>131.25,'stmt_balance'  =>15618.75,'cost'    =>83.33,'princp_outs'  =>9916.67,'profit'   =>47.92,'unearned_outs'  =>5702.08,'advance_payment' =>0.00],
                ['txn_date'   =>'09/06/21','doc_no'   =>'MISD03165','txn_details'  =>'Montly Instalment - Salary Deduction','txn_amount'  =>131.25,'stmt_balance'  =>15487.50,'cost'    =>83.33,'princp_outs'  =>9833.34,'profit'   =>47.92,'unearned_outs'  =>5654.16,'advance_payment' =>0.00],
            ];
        }else{
            $this->statements = [];
        }
        return view('livewire.page.siskop.finance.statements',[]);
    }
}
