<?php

namespace App\Http\Controllers\Admin\Analytics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Analytics;
use App\Models\Page;
use Spatie\Analytics\Period;
use App\Libraries\GoogleAnalytics;

class AnalyticController extends Controller
{   

    //$startDate = Carbon::now()->subYear();
    //$endDate = Carbon::now();
 
    //Period::create($startDate, $endDate);


    public function index(){

    	//Top Country
    	$top_countries = GoogleAnalytics::topCountries(20);

        //Top Browsers
        $top_browser = Analytics::fetchTopBrowsers(Period::days(180));

        //User Type
        $visitor_type = Analytics::fetchUserTypes(Period::days(180));
        //dd($visitor_type);

        //Top Reffers
        $referrer = Analytics::fetchTopReferrers(Period::days(180));
        //dd($referrer);
    	
        $live_users = Analytics::getAnalyticsService()->data_realtime->get('ga:'.env('ANALYTICS_VIEW_ID'), 'rt:activeVisitors')->totalsForAllResults['rt:activeVisitors'];
        //dd($live_users);

        $trending = GoogleAnalytics::getPages(180);       
        //dd($trending);
        

    	$analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(180));
    	$ptpv = $analyticsData->pluck('pageTitle','pageViews','date');
        //dd($analyticsData);

        //Total Visitors
        $total_visitor_page_view = Analytics::fetchTotalVisitorsAndPageViews(Period::days(180));    
        //dd($total_visitor_page_view);
    	
        //Most Visited pages
        $most_visited_page = Analytics::fetchMostVisitedPages(Period::days(2));
    	//dd($most_visited_page);
        
    	

        //$most_visited_page = Analytics::fetchMostVisitedPages(Period::days(30));
        //$analytics = Analytics::getAnalyticsService();
        //$pages = Analytics::fetchMostVisitedPages(Period::days(7));
        //$trending = app('App\Services\GoogleAnalytics\TrendingPages')->week(7);

        //Time on Site
        $analyticsData = Analytics::performQuery(
            Period::days(180),
            'ga:sessions',
            [
                'metrics' => 'ga:sessions,ga:sessionDuration'
                
            ]
        );

        //All Traffic Sources - Usage
        $analyticsData = Analytics::performQuery(
            Period::days(180),
            'ga:sessions',
            [
                'metrics' => 'ga:sessions,ga:sessionDuration',
                'dimensions' =>'ga:source,ga:medium',
                'sort'=>'-ga:sessions'                
            ]
        );
        //All Traffic Sources - Usage
        $analyticsData = Analytics::performQuery(
            Period::days(180),
            'ga:sessions',
            [
                'metrics' => 'ga:sessions,ga:pageviews,ga:sessionDuration,ga:exits',
                'dimensions' =>'ga:source,ga:medium',
                'sort'=>'-ga:sessions'                
            ]
        );

        //Search Engines
        $analyticsData = Analytics::performQuery(
            Period::days(180),
            'ga:sessions',
            [
                'dimensions' =>'ga:source',
                'metrics' => 'ga:pageviews,ga:sessionDuration,ga:exits',
                'filters'=>'ga:medium==cpa,ga:medium==cpc,ga:medium==cpm,ga:medium==cpp,ga:medium==cpv,ga:medium==organic,ga:medium==ppc',
                'sort'=>'ga:pageviews'                
            ]
        );
        //Search Engines - Organic Search
        $analyticsData = Analytics::performQuery(
            Period::days(180),
            'ga:sessions',
            [
                'dimensions' =>'ga:source',
                'metrics' => 'ga:pageviews,ga:sessionDuration,ga:exits',
                'filters'=>'ga:medium==organic',
                'sort'=>'ga:pageviews'                
            ]
        );

        //MObile Traffic
        $mobile_traffic = GoogleAnalytics::moblileTraffic(180);       
        
        //Browser and Operating System
        $browser_operating_system = GoogleAnalytics::browser_operatuing_system(180);       
        
        //Traffic Sources
        $traffic_source = GoogleAnalytics::traffic_source(180);
        

        //dd($browser_operating_system);
        
        return view('admin.pages.analytics.analytics',
                    compact('top_browser','top_countries','visitor_type','referrer','total_visitor_page_view','trending','mobile_traffic',
                            'browser_operating_system','traffic_source','trending','analyticsData'));
     
    }
}
