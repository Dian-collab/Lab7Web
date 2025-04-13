<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about',[
            'title'=> 'Halaman Abot',
            'content'=> 'Ini adalah Halaman abaut yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    public function contact()
    {
        echo "Ini Halaman Contact";
    }
    public function faqs()
    {
        echo "Ini Halaman FAQ";
    }
    public function tos()
    {
        echo "Ini Halaman Term of Services";
    } 
}