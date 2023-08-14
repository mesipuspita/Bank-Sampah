<?php

namespace App\Charts;

use App\Sampah;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class SampahChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $Datasampah = Sampah :: get();
        $data = [
            $Datasampah-> where('sampah,1')->count(),    
            $Datasampah-> where('sampah,2')->count(),   
            $Datasampah-> where('sampah,3')->count(),   
            $Datasampah-> where('sampah,4')->count(),   
            $Datasampah-> where('sampah,5')->count(),   
        ];
        $label =[
            'sampah 1',
            'sampah 2',
            'sampah 3',
            'sampah 4',
            'sampah 5',
        ];
        return $this->chart->pieChart()
            ->setTitle('Data Sampah')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setLabels($label);
    }
}
