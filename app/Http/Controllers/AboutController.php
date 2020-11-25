<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

    }
    
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("about.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new About();
        $request->validate([
            "photo" => "required",
            "anniversaire" => "required",
            "website" => "required",
            "phone" => "required",
            "city" => "required",
            "degree" => "required",
            "age" => "required",
            "email" => "required",
            "freelance" => "required",
            "text" => "required",
        ]);
        $about->photo = $request->file("photo")->hashName();
        $request->file("photo")->storePublicly("img", "public");
        $about->anniversaire = $request->anniversaire;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->degree = $request->degree;
        $about->age = $request->age;
        $about->email = $request->email;
        $about->freelance = $request->freelance;
        $about->text = $request->text;
        $about->save();
        return redirect()->route("admin");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view("about.edit", compact("about"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            "photo" => "required",
            "anniversaire" => "required",
            "website" => "required",
            "phone" => "required",
            "city" => "required",
            "degree" => "required",
            "age" => "required",
            "email" => "required",
            "freelance" => "required",
            "text" => "required",
        ]);
        Storage::disk("public")->delete("img/"  . $about->photo );
        $about->photo = $request->file("photo")->hashName();
        $request->file("photo")->storePublicly("img", "public");
        $about->anniversaire = $request->anniversaire;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->degree = $request->degree;
        $about->age = $request->age;
        $about->email = $request->email;
        $about->freelance = $request->freelance;
        $about->text = $request->text;
        $about->save();
        return redirect()->route("admin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        Storage::disk("public")->delete("img/"  . $about->photo );
        $about->delete();
        return redirect()->back();
    }
}
