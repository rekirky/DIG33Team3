<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Event::insert([
            "name" => "Crusade",
            "type" => "social",
            "title" => "Crusade of the Feet",
            "subTitle" => "Let's Make a Difference",
            "tagline" => "How many footprints does it take to clear out waterways and beaches? Let’s find out!",
            "details" => "Gather up all your friends, family or local community, to form your team. Feel Good Drinks Co. wants to see how long our human feet chain can reach to clean up—in May 2019 the Guinness Book of Records recorded the longest human chain of 824 people.  We feel 100% sure that we can create the longest human footprint trail, with footprints in sand, dirt or just making chalk marks with your feet and removing the bad stuff that's clogging our waterways. Our goal is to get over 1000 people and their footprints to join us to help clean up our waterways in a celebration of the Earth, and an opportunity to create awareness about the plight of the oceans. Gather your team and join in! All team must register to enter in the crusade. Terms and conditions apply.",
            "date" => "22/05/2020",
            "register" => "/register/feet",
            "video" => "",
            "bgImage" => "girlatbeach1200.png",
            "logoImage" => "",
            "accentColor" => "#25ade3"
        ]);

        \App\Event::insert([
            "name" => "Go Free!",
            "type" => "video",
            "title" => "Go Free!",
            "subTitle" => "",
            "tagline" => "The 12-week challenge to live plastic-free.",
            "details" => "Post your progress regularly through our Instagram and Facebook pages to tell us about how you are getting plastic-free, and share your exciting new plastic-free innovations.To find how to go plastic free in our 12 week challenge, watch the video above.",
            "date" => "22/08/2020",
            "register" => "",
            "video" => "https://www.youtube.com/embed/qtVxWoVssJQ",
            "bgImage" => "gofreeimg_bg.png",
            "logoImage" => "gofree_logo.png",
            "accentColor" => ""
        ]);

    }
}
