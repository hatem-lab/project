<?php

namespace App\Http\Controllers\site;
use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Vendor;
use App\Models\MainCategory;
use App\Models\SubCategory;
class SiteController extends Controller
{
    public function index()
    {
        $defult_lang=App::getLocale();
        $mainCategory=MainCategory::with('subCategories')->where('translation_lang',$defult_lang)->selection()->get();
        return view('front.home',compact('mainCategory'));
    }

}
