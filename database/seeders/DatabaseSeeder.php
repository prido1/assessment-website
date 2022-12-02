<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Section;
use App\Models\Settings;
use App\Models\ServiceSection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin Nmae',
            'email' => 'admin@gmail.com',
            'address' => '123 rd sample address',
            'phone' => '1234567890',
            'password' => bcrypt('admin'),
        ]);

        ServiceSection::insert([
            [
                'title' => '100+ Components',
                'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
                'icon' => 'pb-Information'
            ],
            [
                'title' => '100+ Components',
                'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
                'icon' => 'pb-Restore-Window'
            ],
            [
                'title' => '100+ Components',
                'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
                'icon' => 'pb-Close-Window'
            ],
            [
                'title' => '100+ Components',
                'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
                'icon' => 'pb-Coding'
            ],
            [
                'title' => '100+ Components',
                'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
                'icon' => 'pb-Support'
            ],
            [
                'title' => '100+ Components',
                'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
                'icon' => 'pb-Dashboard'
            ],
            ]);

        Settings::insert([
            [
                'type' => 'site',
                'label' => 'site_name',
                'value' => 'Business',
            ],
            [
                'type' => 'site',
                'label' => 'site_description',
                'value' => 'The description of the assessment website goes here',
            ],
            [
                'type' => 'site',
                'label' => 'primary_color',
                'value' => '#155bd5',
            ],
            [
                'type' => 'site',
                'label' => 'logo',
                'value' => '1669901825logo.png',
            ],
            [
                'type' => 'site',
                'label' => 'site_title',
                'value' => 'This is the title of the assessment site',
            ],
        ]);

        Section::insert([
            [
                'type' => 'home',
                'label' => 'title',
                'value' => 'Corporate Website'
            ],
            [
                'type' => 'home',
                'label' => 'featured_image',
                'value' => '1669901854Assessment-header-image.png'
            ],
            [
                'type' => 'about',
                'label' => 'sub_heading',
                'value' => 'OUR STORY'
            ],
            [
                'type' => 'about',
                'label' => 'heading',
                'value' => 'Our team comes with the experience and knowledge.'
            ],
            [
                'type' => 'about',
                'label' => 'image',
                'value' => '1669901940Assessment-about-image.png'
            ],
            [
                'type' => 'about',
                'label' => 'who_we_are',
                'value' => 'It is a long established fact that a reader will be distracted by the readable content of the page when looking at its layout. The point of using lorem ipsum is that it has a more-or-less normal distributionof letters, look like readable English.
                There are many variations of passegesof Lorem Ipsum available, but the majority have in some form, by injected humour.'
            ],
            [
                'type' => 'about',
                'label' => 'vision',
                'value' => 'Vision'
            ],
            [
                'type' => 'about',
                'label' => 'history',
                'value' => 'History'
            ],
            [
                'type' => 'footer',
                'label' => 'title',
                'value' => 'We love to make perfect solutions for your business'
            ],
            [
                'type' => 'footer',
                'label' => 'description',
                'value' => 'Why i say old chap that is, spiffing off his nut cor blimey guvnords geeza bloke knees up bobby, sloshed arse William cack Richard. Bloke fanny around chesed of bum bag old lost the pilot say there spiffing off his nut.'
            ],
            [
                'type' => 'pricing',
                'label' => 'starter_description',
                'value' => 'Lorem Ipsum is simply dummy text of the printing and industry.'
            ],
            [
                'type' => 'pricing',
                'label' => 'starter_price',
                'value' => '99'
            ],
            [
                'type' => 'pricing',
                'label' => 'starter_Cras_justo_odio',
                'value' => '1'
            ],
            [
                'type' => 'pricing',
                'label' => 'starter_Dapibus_ac_facilisis_in',
                'value' => '1'
            ],
            [
                'type' => 'pricing',
                'label' => 'starter_Morbi_leo_risus',
                'value' => '0'
            ],
            [
                'type' => 'pricing',
                'label' => 'starter_Excepteur_sint_occaecat_velit',
                'value' => '0'
            ],
            [
                'type' => 'pricing',
                'label' => 'exclusive_description',
                'value' => 'Lorem Ipsum is simply dummy text of the printing and industry.'
            ],
            [
                'type' => 'pricing',
                'label' => 'exclusive_price',
                'value' => '229'
            ],
            [
                'type' => 'pricing',
                'label' => 'exclusive_Cras_justo_odio',
                'value' => '1'
            ],
            [
                'type' => 'pricing',
                'label' => 'exclusive_Dapibus_ac_facilisis_in',
                'value' => '1'
            ],
            [
                'type' => 'pricing',
                'label' => 'exclusive_Morbi_leo_risus',
                'value' => '1'
            ],
            [
                'type' => 'pricing',
                'label' => 'exclusive_Excepteur_sint_occaecat_velit',
                'value' => '0'
            ],
            [
                'type' => 'pricing',
                'label' => 'premium_description',
                'value' => 'Lorem Ipsum is simply dummy text of the printing and industry.'
            ],
            [
                'type' => 'pricing',
                'label' => 'premium_price',
                'value' => '399'
            ],
            [
                'type' => 'pricing',
                'label' => 'premium_Cras_justo_odio',
                'value' => '1'
            ],
            [
                'type' => 'pricing',
                'label' => 'premium_Dapibus_ac_facilisis_in',
                'value' => '1'
            ],
            [
                'type' => 'pricing',
                'label' => 'premium_Morbi_leo_risus',
                'value' => '1'
            ],
            [
                'type' => 'pricing',
                'label' => 'premium_Excepteur_sint_occaecat_velit',
                'value' => '1'
            ],
            [
                'type' => 'home',
                'label' => 'description',
                'value' => 'We are digital agency that helps brands to achieve their business outcomes. We see technology
                as a tool to create amazing things.'
            ],
        ]);
    }
}
