<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\ServiceSection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SectionsController extends Controller
{
    public function HomeSectionIndex()
    {
        $section_settings = Section::where('type', 'home')->pluck('value', 'label');
        return view('admin.pages.home', compact('section_settings'));
    }

    public function HomeSectionSave(Request $request)
    {

        try {
            DB::transaction(function () use ($request) {
                Section::updateOrCreate(
                    [
                        'type' => 'home', 'label' => 'title',
                    ], [
                        'type' => 'home', 'label' => 'title', 'value' => $request->title,
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'home', 'label' => 'description',
                    ], [
                        'type' => 'home', 'label' => 'description', 'value' => $request->description,
                    ]
                );

                if ($request->hasfile('featured_image')) {
                    $file = $request->file('featured_image');
                    $file_name = time() . $file->getClientOriginalName();
                    $file->move('assets/images/', str_replace(' ', '', $file_name));
                    Section::updateOrCreate(
                        [
                            'type' => 'home', 'label' => 'featured_image',
                        ], [
                            'type' => 'home', 'label' => 'featured_image', 'value' => str_replace(' ', '', $file_name),
                        ]
                    );
                }

            });
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        return redirect()->back()->with(['success' => 'Home section saved successfullly!!']);
    }

    public function AboutSectionIndex()
    {
        $section_settings = Section::where('type', 'about')->pluck('value', 'label');
        return view('admin.pages.about-us', compact('section_settings'));
    }

    public function AboutSectionSave(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                Section::updateOrCreate(
                    [
                        'type' => 'about', 'label' => 'sub_heading',
                    ], [
                        'type' => 'about', 'label' => 'sub_heading', 'value' => $request->sub_heading,
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'about', 'label' => 'heading',
                    ], [
                        'type' => 'about', 'label' => 'heading', 'value' => $request->heading,
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'about', 'label' => 'who_we_are',
                    ], [
                        'type' => 'about', 'label' => 'who_we_are', 'value' => $request->who_we_are,
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'about', 'label' => 'vision',
                    ], [
                        'type' => 'about', 'label' => 'vision', 'value' => $request->vision,
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'about', 'label' => 'history',
                    ], [
                        'type' => 'about', 'label' => 'history', 'value' => $request->history,
                    ]
                );

                if ($request->hasfile('image')) {
                    $file = $request->file('image');
                    $file_name = time() . $file->getClientOriginalName();
                    $file->move('assets/images/', str_replace(' ', '', $file_name));
                    Section::updateOrCreate(
                        [
                            'type' => 'about', 'label' => 'image',
                        ], [
                            'type' => 'about', 'label' => 'image', 'value' => str_replace(' ', '', $file_name),
                        ]
                    );
                }

            });
        } catch (\Exception$e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        return redirect()->back()->with(['success' => 'About section saved successfullly!!']);
    }

    public function ServicesSectionIndex()
    {
        $services = ServiceSection::all();
        return view('admin.pages.services.list-services', compact('services'));
    }

    public function ServicesSectionCreate()
    {
        return view('admin.pages.services.add-service');
    }

    public function SaveService(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        ServiceSection::create([
            'icon' => $request->icon,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with(['success' => 'Service saved successfullly!!']);
    }

    public function EditService($id)
    {
        $service = ServiceSection::find($id);

        if(!$service){
            return redirect()->back()->with(['error' => 'Service Not Found']);
        }

        return view('admin.pages.services.edit-service', compact('service'));
    }

    public function UpdateService(Request $request, $id)
    {
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $service = ServiceSection::find($id);

        if(!$service){
            return redirect()->back()->with(['error' => 'Service Not Found']);
        }

        $service->icon = $request->icon;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

        return redirect()->back()->with(['success' => 'Service updated successfullly!!']);
    }

    public function DestroyService($id){
        $service = ServiceSection::find($id);
        if(!$service){
            return redirect()->back()->with(['error' => 'Service Not Found']);
        }
        $service->delete();

        return redirect()->back()->with(['success' => 'Service deleted successfullly!!']);
    }

    public function PricingSectionIndex()
    {
        $section_settings = Section::where('type', 'pricing')->pluck('value', 'label');
        return view('admin.pages.pricing', compact('section_settings'));
    }

    public function PricingSectionSave(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                // starter plan
                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'starter_description',
                    ], [
                        'type' => 'pricing', 'label' => 'starter_description', 'value' => $request->starter_description,
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'starter_price',
                    ], [
                        'type' => 'pricing', 'label' => 'starter_price', 'value' => $request->starter_price,
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'starter_Cras_justo_odio',
                    ], [
                        'type' => 'pricing', 'label' => 'starter_Cras_justo_odio', 'value' => isset($request->starter_Cras_justo_odio),
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'starter_Dapibus_ac_facilisis_in',
                    ], [
                        'type' => 'pricing', 'label' => 'starter_Dapibus_ac_facilisis_in', 'value' => isset($request->starter_Dapibus_ac_facilisis_in),
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'starter_Morbi_leo_risus',
                    ], [
                        'type' => 'pricing', 'label' => 'starter_Morbi_leo_risus', 'value' => isset($request->starter_Morbi_leo_risus),
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'starter_Excepteur_sint_occaecat_velit',
                    ], [
                        'type' => 'pricing', 'label' => 'starter_Excepteur_sint_occaecat_velit', 'value' => isset($request->starter_Excepteur_sint_occaecat_velit),
                    ]
                );

                // exclusive plan
                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'exclusive_description',
                    ], [
                        'type' => 'pricing', 'label' => 'exclusive_description', 'value' => $request->exclusive_description,
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'exclusive_price',
                    ], [
                        'type' => 'pricing', 'label' => 'exclusive_price', 'value' => $request->exclusive_price,
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'exclusive_Cras_justo_odio',
                    ], [
                        'type' => 'pricing', 'label' => 'exclusive_Cras_justo_odio', 'value' => isset($request->exclusive_Cras_justo_odio),
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'exclusive_Dapibus_ac_facilisis_in',
                    ], [
                        'type' => 'pricing', 'label' => 'exclusive_Dapibus_ac_facilisis_in', 'value' => isset($request->exclusive_Dapibus_ac_facilisis_in),
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'exclusive_Morbi_leo_risus',
                    ], [
                        'type' => 'pricing', 'label' => 'exclusive_Morbi_leo_risus', 'value' => isset($request->exclusive_Morbi_leo_risus),
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'exclusive_Excepteur_sint_occaecat_velit',
                    ], [
                        'type' => 'pricing', 'label' => 'exclusive_Excepteur_sint_occaecat_velit', 'value' => isset($request->exclusive_Excepteur_sint_occaecat_velit),
                    ]
                );

                // premium plan
                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'premium_description',
                    ], [
                        'type' => 'pricing', 'label' => 'premium_description', 'value' => $request->premium_description,
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'premium_price',
                    ], [
                        'type' => 'pricing', 'label' => 'premium_price', 'value' => $request->premium_price,
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'premium_Cras_justo_odio',
                    ], [
                        'type' => 'pricing', 'label' => 'premium_Cras_justo_odio', 'value' => isset($request->premium_Cras_justo_odio),
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'premium_Dapibus_ac_facilisis_in',
                    ], [
                        'type' => 'pricing', 'label' => 'premium_Dapibus_ac_facilisis_in', 'value' => isset($request->premium_Dapibus_ac_facilisis_in),
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'premium_Morbi_leo_risus',
                    ], [
                        'type' => 'pricing', 'label' => 'premium_Morbi_leo_risus', 'value' => isset($request->premium_Morbi_leo_risus),
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'pricing', 'label' => 'premium_Excepteur_sint_occaecat_velit',
                    ], [
                        'type' => 'pricing', 'label' => 'premium_Excepteur_sint_occaecat_velit', 'value' => isset($request->premium_Excepteur_sint_occaecat_velit),
                    ]
                );

            });
        } catch (\Exception$e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        return redirect()->back()->with(['success' => 'Pricing section saved successfullly!!']);
    }

    public function FooterSectionIndex()
    {
        return view('admin.pages.footer');
    }

    public function FooterSectionSave(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                Section::updateOrCreate(
                    [
                        'type' => 'footer', 'label' => 'title',
                    ], [
                        'type' => 'footer', 'label' => 'title', 'value' => $request->title,
                    ]
                );

                Section::updateOrCreate(
                    [
                        'type' => 'footer', 'label' => 'description',
                    ], [
                        'type' => 'footer', 'label' => 'description', 'value' => $request->description,
                    ]
                );

            });
        } catch (\Exception$e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        return redirect()->back()->with(['success' => 'Footer section saved successfullly!!']);
    }
}
