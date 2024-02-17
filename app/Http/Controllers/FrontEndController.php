<?php

namespace App\Http\Controllers;

use App\Traits\ApiTrait;


class FrontEndController extends Controller
{
    use ApiTrait;



    public function index()
    {
        $sliders =  $this->sliderData();

        return view('index', compact('sliders'));
    }

    public function members($type)
    {

        $members =  $this->membersData($type);
        return view('members.index', compact('members', 'type'));
        return $type;
    }
    public function messionVission()
    {

        $setting =  $this->settingData();
        return view('about.mission', compact('setting'));
    }
    public function organogramOfIqac()
    {

        return view('about.organogram');
    }
    public function gallery()
    {
        $gallery =  $this->galleryData();
        return view('gallery', compact('gallery'));
    }
    public function event()
    {
        $events = $this->eventData();
        return view('event.index', compact('events'));
    }
    public function eventDetails($id)
    {
        $event = $this->eventDetailsData($id);
        $data = $event->data;
        return view('event.details', compact('data'));
    }
    public function resource()
    {
        $resources = $this->resourceData();
        return view('resource.index', compact('resources'));
    }

    public function contact()
    {
        return view('contact');
    }
}
