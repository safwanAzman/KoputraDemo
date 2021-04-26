<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class MemberSummaryChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        // return Chartisan::build()
        //     ->labels(['First', 'Second', 'Third'])
        //     ->dataset('Sample', [1, 2, 3])
        //     ->dataset('Sample 2', [3, 2, 1]);

        $result = up_graph_customers_summary($request->table,auth()->user()->group->institute_id);

        $id                 = array_column($result,'id');
        $label				= array_column($result,'label');
        $count				= array_column($result,'count');
        $total_contribution	= array_column($result,'total_contribution');
        $total_share		= array_column($result,'total_share');

        $chart = Chartisan::build();
        $chart->labels($label);

        if($request->data_column == 'c'){
            $chart->dataset('Total Contribution', $total_contribution);
        }
        elseif($request->data_column == 's'){
            $chart->dataset('Total Share', $total_share);
        }else{
            $chart->dataset('Count', $count);
        }

        return $chart;
    }
}