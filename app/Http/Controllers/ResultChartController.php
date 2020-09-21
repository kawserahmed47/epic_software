<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\ResultChart;
class ResultChartController extends Controller
{
    public function index(){
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];

        $resultsChart = new ResultChart;
        $resultsChart->labels(['Jan', 'Feb', 'Mar']);
        //  $resultsChart->dataset('Assessment', 'line', [10, 30, 20])
        //  ->color("rgb(255, 99, 132)")
        //     ->backgroundcolor("rgb(255, 99, 132)")
        //     ->fill(false)
        //     ->linetension(0.1)
        //     ->dashed([5]);
       $resultsChart->dataset('Assessment', 'doughnut', [10, 30, 20])
       ->color($borderColors)
       ->backgroundcolor($fillColors);
    //   $resultsChart->dataset('Assessment', 'bar', [10, 30, 20])
    //    ->color($borderColors)
    //     ->backgroundcolor($fillColors);
        return view('results', [ 'resultsChart' => $resultsChart ] );
    }
}
