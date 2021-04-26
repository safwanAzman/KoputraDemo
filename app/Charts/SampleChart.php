<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['April 2021', 'May 2021', 'June 2021','July 2021','August 2021','September 2021','October 2021'])
            ->dataset('Sample', [88,00.00, 88,00.00, 88,00.00])
            ->dataset('Sample 2', [88,00.00, 88,00.00, 88,00.00])
            ->dataset('Sample 3', [88,00.00, 88,00.00, 88,00.00])
            ->dataset('Sample 4', [88,00.00, 88,00.00, 88,00.00]);
    }
}