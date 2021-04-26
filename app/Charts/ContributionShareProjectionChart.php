<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class ContributionShareProjectionChart extends BaseChart
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

        $data = up_graph_customer_projection($request->rate,$request->year,$request->linear,auth()->user()->group->institute_id);

        $id								= array_column($data,'id');
        $month							= array_column($data,'month');
        $active_member					= array_column($data,'active_member');
        $active_member_wnew				= array_column($data,'active_member_wnew');
        $contribution_projection		= array_column($data,'contribution_projection');
        $share_projection				= array_column($data,'share_projection');
        $contribution_projection_wnew	= array_column($data,'contribution_projection_wnew');
        $share_projection_wnew			= array_column($data,'share_projection_wnew');
        // dd($month);

        //Bar Chart
        $chart = Chartisan::build();
        $chart->labels($month);
        $chart->dataset('Contribution Current Projection', $contribution_projection);
        $chart->dataset('Contribution New Projection', $contribution_projection_wnew);
        $chart->dataset('Share Current Projection', $share_projection);
        $chart->dataset('Share New Projection', $share_projection_wnew);

        return $chart;
    }
}