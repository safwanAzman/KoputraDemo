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
            ->labels(['April 2021', 'May 2021', 'June 2021','July 2021','August 2021','September 2021','October 2021','November 2021','December 2021','January 2022','February 2022','March 2022','April 2022','May 2022','June 2022','July 2022','August 2022','September 2022','October 2022','November 2022','December 2022','January 2023','February 2023','March 2023','April 2023'])
            ->dataset('Sample', [77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00,77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00,77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00]) //biru
            ->dataset('Sample 2', [80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00,80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00,80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00, 80,00.00]) //hijau
            ->dataset('Sample 3', [77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00,77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00, 77,00.00]) //kuning
            ->dataset('Sample 4', [87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00,87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00, 87,00.00]); //merah
    }
}