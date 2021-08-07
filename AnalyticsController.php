<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Call;
use App;
use Carbon\Carbon;

class AnalyticsController extends Controller
{
    private function forarray($requests, $array, $string)
    {
        foreach ($requests as $object) {
            array_push($array, $object->$string);
        }

        return $array;
    }

    public function indexLang()
    {
        session()->has('locale') ? app()->setLocale(session()->get('locale')) : session()->put('locale', 'en');

        return redirect()->route('analytics', session()->get('locale'));
    }

    public function index($lang)
    {
        if ($lang != 'fr' && $lang != 'en') {
            return abort(404);
        }

        App::setLocale($lang);
        session()->put('locale', $lang);

        // Collecting unique user count

        $unique_users_today = Call::whereDate('created_at', Carbon::today())->distinct('session_id')->count();
        $unique_users_week = Call::whereDate('created_at', '>=', now()->subWeek(1))->distinct('session_id')->count();

        // Get requests by date 

        $today_requests = Call::whereDate('created_at', Carbon::today())->count();
        $week_requests = Call::whereDate('created_at', '>=', now()->subDays(7))->get();
        $month_requests = Call::whereDate('created_at', '>=', now()->subMonth(1))->get();


        // Collecting the most present country 

        $week_countries = [];

        $week_countries = $this->forarray($week_requests, $week_countries, 'country');
        $most_present_country = collect($week_countries)->filter()->countBy()->sortDesc()->keys();

        // Collecting the most present device 

        $week_devices = [];


        $week_devices = $this->forarray($week_requests, $week_devices, 'device');
        $most_present_device = collect($week_devices)->filter()->countBy()->sortDesc()->keys();

        // Collecting the

        $month_routes = [];

        $month_routes = $this->forarray($month_requests, $month_routes, 'route');
        $month_routes = collect($month_routes)->filter()->countBy()->sortDesc()->keys();

        // Most present route

        $most_visited_route = $month_routes->first();

        // Least visited url

        $no_visited_route = $month_routes->last();



        return view('analytics.index', compact('unique_users_today', 'today_requests', 'unique_users_week', 'month_routes', 'most_present_device', 'most_present_country', 'week_requests', 'most_visited_route', 'no_visited_route'));
    }
}
