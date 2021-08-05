<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Call;

class AnalyticsController extends Controller
{
    public function index()
    {
        // Collecting unique user count

        $unique_users = Call::whereDate('created_at', '>=', now()->subDays(1))->distinct('session_id')->count();

        // Get requests by date 

        $today_requests = Call::whereDate('created_at', '>=', now()->subDays(1))->count();
        $week_requests = Call::whereDate('created_at', '>=', now()->subDays(7))->get();
        $month_requests = Call::whereDate('created_at', '>=', now()->subMonth(1))->get();


        // Collecting the most present country 

        $week_countries = [];
        foreach ($week_requests as $country) {
            array_push($week_countries, $country->country);
        }
        $most_present_country = collect($week_countries)->countBy()->sortDesc()->keys()->first();


        // Collecting the most present device 

        $week_devices = [];
        foreach ($week_requests as $device) {
            array_push($week_devices, ucfirst($device->device));
        }
        $most_present_device = collect($week_devices)->countBy()->sortDesc()->keys()->first();

        // Collecting the

        $month_routes = [];
        foreach ($month_requests as $route) {
            array_push($month_routes, strtolower($route->route));
        }

        // Most present route

        $most_visited_route = collect($month_routes)->countBy()->sortDesc()->keys()->first();

        // Least visited url

        $no_visited_route = collect($month_routes)->countBy()->sortDesc()->keys()->last();



        return view('analytics.index', compact('unique_users', 'today_requests', 'most_present_device', 'most_present_country', 'most_visited_route', 'no_visited_route'));
    }
}