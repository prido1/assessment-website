<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index(){
        $site_settings = Settings::where('type', 'site')->pluck('value', 'label');
        return view('admin.pages.settings', compact('site_settings'));
    }

    public function Save(Request $request){
        try {
            DB::transaction(function () use ($request) {
                Settings::updateOrCreate(
                    [
                        'type' => 'site', 'label' => 'site_name',
                    ], [
                        'type' => 'site', 'label' => 'site_name', 'value' => $request->site_name,
                    ]
                );

                Settings::updateOrCreate(
                    [
                        'type' => 'site', 'label' => 'site_title',
                    ], [
                        'type' => 'site', 'label' => 'site_title', 'value' => $request->site_title,
                    ]
                );

                Settings::updateOrCreate(
                    [
                        'type' => 'site', 'label' => 'site_description',
                    ], [
                        'type' => 'site', 'label' => 'site_description', 'value' => $request->site_description,
                    ]
                );

                Settings::updateOrCreate(
                    [
                        'type' => 'site', 'label' => 'primary_color',
                    ], [
                        'type' => 'site', 'label' => 'primary_color', 'value' => $request->primary_color,
                    ]
                );

                if ($request->hasfile('logo')) {
                    $file = $request->file('logo');
                    $file_name = time() . $file->getClientOriginalName();
                    $file->move('assets/images/', str_replace(' ', '', $file_name));
                    Settings::updateOrCreate(
                        [
                            'type' => 'site', 'label' => 'logo',
                        ], [
                            'type' => 'site', 'label' => 'logo', 'value' => str_replace(' ', '', $file_name),
                        ]
                    );
                }

            });
        } catch (\Exception$e) {
            return redirect()->back()->with(['error' => 'Something went wrong!!']);
        }
        return redirect()->back()->with(['success' => 'Site settings saved successfullly!!']);
    }
}
