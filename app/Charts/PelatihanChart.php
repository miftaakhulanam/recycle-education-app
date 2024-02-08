<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\AreaChart;

class PelatihanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): AreaChart
    {
        $monthlyRegistrations = DB::table('pelatihans')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as registrations'))
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->get();

        $months = [];
        $registrations = [];

        foreach ($monthlyRegistrations as $registration) {
            $months[] = date("F", mktime(0, 0, 0, $registration->month, 1));
            $registrations[] = $registration->registrations;
        }

        $translatedMonths = [];

        foreach ($months as $month) {
            $translatedMonths[] = $this->translateMonth($month);
        }

        return $this->chart->areaChart()
            ->addData('Pendaftar', $registrations)
            ->setXAxis($translatedMonths);
    }


    private function translateMonth($month)
    {
        $translations = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember',
        ];

        return $translations[$month];
    }
}
