<?php

class Countries extends Controller
{

    public object $countries;

    public function __construct()
    {
        $this->countries = $this->model('country');
    }

    public function index()
    {
        $data = [
            'title' => 'Countries',
            'countries' => $this->countries->getCountriesFormatted()
        ];

        $this->view('countries/index', $data);
    }
}