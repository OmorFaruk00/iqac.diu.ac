<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;

trait ApiTrait
{
    public static function ssl()
    {
        return stream_context_create(
            [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ]
        );
    }

    public function sliderData()
    {

        if (Cache::has('sliders')) {
            return Cache::get('sliders');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/slider', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('sliders', $result, 1440); //1440 minute = 1 day
            return $result;
        }
        return response()->json(NULL, 404);
    }

    public function settingData()
    {

        if (Cache::has('setting')) {
            return Cache::get('setting');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/setting', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('setting', $result, 1440); //1440 minute = 1 day
            return $result;
        }
        return response()->json(NULL, 404);
    }

    public function membersData($type)
    {

        if (Cache::has('members_' . $type)) {
            return Cache::get('members_' . $type);
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/teams/' . $type, false, self::ssl()));

        if (!empty($result)) {
            Cache::put('members_' . $type, $result, 1440); //1440 minute = 1 day
            return $result;
        }
        return response()->json(NULL, 404);
    }

    public function galleryData()
    {

        if (Cache::has('photos')) {
            return Cache::get('photos');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/photos', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('photos', $result, 1440); //1440 minute = 1 day
            return $result;
        }
        return response()->json(NULL, 404);
    }

    public function eventData()
    {

        if (Cache::has('event')) {
            return Cache::get('event');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/news-activities/events', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('event', $result, 1440); //1440 minute = 1 day
            return $result;
        }
        return response()->json(NULL, 404);
    }
    public function eventDetailsData($id)
    {

        if (Cache::has('event_' . $id)) {
            return Cache::get('event_' . $id);
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/news-activity/' . $id, false, self::ssl()));

        if (!empty($result)) {
            Cache::put('event_' . $id, $result, 1440); //1440 minute = 1 day
            return $result;
        }
        return response()->json(NULL, 404);
    }

    public function resourceData()
    {

        if (Cache::has('resource')) {
            return Cache::get('resource');
        }

        $result = json_decode(@file_get_contents('' . env('API_URL') . '/research-publication/research', false, self::ssl()));

        if (!empty($result)) {
            Cache::put('resource', $result, 1440); //1440 minute = 1 day
            return $result;
        }
        return response()->json(NULL, 404);
    }
}
