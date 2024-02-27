<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public $settings = array(
        'contact' => array(
            "contact" => [
                'image' => "./images/icons/contact/phone.svg",
                'info' => '+27 (00) 000 0000 / <br> +27 (00) 000 0000',
                'link' => 'tel:+[tel]'
            ],
            "email" => [
                'image' => "./images/icons/contact/email.svg",
                'info' => 'admin@hybridschools.co.za',
                'link' => 'mailto:admin@hybridschools.co.za'
            ],
            "address" => [
                'image' => "./images/icons/contact/location.svg",
                'info' => '06-10 Sherwell St, Doornfontein, <br>Johannesburg, South Africa, 2028',
                'link' => 'https://goo.gl/maps/1DZ7aFiaJ8QSAi6k9'
            ]
        ),
        'contact1' => array(
            "address" => [
                'image' => "./images/icons/contact/location.svg",
                'info' => '06-10 Sherwell St, Doornfontein, <br>Johannesburg, South Africa, 2028',
                'link' => 'https://goo.gl/maps/1DZ7aFiaJ8QSAi6k9'
            ],
            "contact" => [
                'image' => "./images/icons/contact/phone.svg",
                'info' => '+27 (81) 265 7628 / <br> +27 (72) 705 3744',
                'link' => 'tel:+27812657628'
            ],
            "email" => [
                'image' => "./images/icons/contact/email.svg",
                'info' => 'admin@hybridschools.co.za',
                'link' => 'mailto:admin@hybridschools.co.za'
            ]
        ),
        'socials' => array(
            "whatsapp-white" => ['image' => "./images/icons/socials/whatsapp-white.svg", 'info' => '083 595 0751', 'link' => ''],
            // "email" => ['image' => "./images/icons/contact/email2.svg", 'info' => 'admin@hybridschools.co.za', 'link' => 'mailto:admin@hybridschools.co.za'],
            "facebook-white" => ['image' => "./images/icons/socials/facebook-white.svg", 'info' => 'Facebook Icon', 'link' => 'https://www.facebook.com/profile.php?id=100087620504286'],
            // "linkedin" => ['image' => "./images/icons/socials/linkedin.svg", 'info' => 'xxxxxx xxxxx xxxxxx xxxxxxx xxxxxxx xxxxx', 'link' => ''],
            "instagram-white" => ['image' => "./images/icons/socials/instagram-white.svg", 'info' => 'instagram Icon', 'link' => ''],
            "youtube-white" => ['image' => "./images/icons/socials/youtube-white.svg", 'info' => 'Youtube Icon', 'link' => ''],
            "facebook-gold" => ['image' => "./images/icons/socials/facebook-gold.svg", 'info' => 'Facebook Icon', 'link' => 'https://www.facebook.com/profile.php?id=100087620504286'],
            "facebook-white-red" => ['image' => "./images/icons/socials/facebook-white-red.svg", 'info' => 'Facebook Icon', 'link' => 'https://www.facebook.com/profile.php?id=100087620504286'],
            "instagram-gold" => ['image' => "./images/icons/socials/instagram-gold.svg", 'info' => 'instagram Icon', 'link' => ''],
            "instagram-gold-red" => ['image' => "./images/icons/socials/instagram-gold-red.svg", 'info' => 'instagram Icon', 'link' => ''],
            "youtube-gold" => ['image' => "./images/icons/socials/youtube-gold.svg", 'info' => 'Youtube Icon', 'link' => ''],
            // "facebook-gold" => ['image' => "./images/icons/socials/facebook-gold.svg", 'info' => 'Facebook Icon', 'link' => 'https://www.facebook.com/profile.php?id=100087620504286'],
            // "instagram-gold" => ['image' => "./images/icons/socials/instagram-gold.svg", 'info' => 'instagram Icon', 'link' => ''],
            // "instagram-gold" => ['image' => "./images/icons/socials/instagram-gold.svg", 'info' => 'instagram Icon', 'link' => ''],
            // "youtube-gold" => ['image' => "./images/icons/socials/youtube-gold.svg", 'info' => 'Youtube Icon', 'link' => ''],
            "youtube-white-gold" => ['image' => "./images/icons/socials/youtube-white-gold.svg", 'info' => 'Youtube Icon', 'link' => ''],
            "mail-white" => ['image' => "./images/icons/contact/mail-white.svg", 'info' => 'Youtube Icon', 'link' => ''],
            "phone-gold" => ['image' => "./images/icons/contact/phone-gold.svg", 'info' => 'Youtube Icon', 'link' => '']
        ),
        'pageLinks' => array(
            "Terms and Conditions" => ["class" => "ts-and-cs", "link" => "ts-and-cs", "type" => "single"],
            // "Testimonials" => ["class" => "testimonials", "link" => "testimonials", "type" => "single"],
            "Home" => ["class" => "home-link", "link" => "home", "type" => "single"],
            "About Us" => ["class" => "aboutus-link", "link" => "aboutus", "type" => "single", "children" => [
                "Mission Statement" => ["class" => "mission-link", "link" => "mission", "type" => "single"],
                "Vision Statement" => ["class" => "vision-link", "link" => "vision", "type" => "single"],
                "Our History" => ["class" => "history-link", "link" => "history", "type" => "single"],
                "Our School's Body" => ["class" => "school-body-link", "link" => "school-body", "type" => "single"]
            ]],
            "Administration" => ["class" => "admin-link", "link" => "admin", "type" => "single", "children" => [
                "School Fees" => ["class" => "fees-link", "link" => "fees", "type" => "single"],
                "Application Form" => ["class" => "form-link", "link" => "form", "type" => "single"]
            ]],
            "Institution" => ["class" => "institution-link", "link" => "institution", "type" => "single", "children" => [
                "Our Portfolio" => ["class" => "fees-link", "link" => "portfolio", "type" => "single"],
                "Institutions" => ["class" => "institutions-link", "link" => "institutions", "type" => "single"],
                "Sports" => ["class" => "form-link", "link" => "sports", "type" => "single"],
                "News & Events" => ["class" => "form-link", "link" => "news", "type" => "single"]
            ]],
            "contact us" => ["class" => "contact-link", "link" => "contact", "type" => "single"],
            // "pages >" => [ "class" => "pages", "link" => "./?page=pages", "type" => "dropdown" ]
        ),
        'carousel' => array(
            "./images/pages/gallery/image-1.png",
            "./images/pages/gallery/image-2.png",
            "./images/pages/gallery/image-3.png",
        ),

        'businessName' => "Hybrid Schools Inner City",
        'copywriteYear' => "2024",
        'pageTitle' => "Hybrid Schools Inner City",
        'pageTitleShort' => "Hybrid",
        'description' => "We are a private, co-educational, day school serving from Pre-School, Primary School and High School students in grades R to grade 12, located in Doornfontein, Johannesburg, South Africa.",
        'keywords' => "learning, school, primary school, high school, education, JPI , Johannesburg Polytech Institute",
        'banner' => "/images/logos/banner-logo.png",
        // 'url' => "https://hybridschools.co.za/",
    );

    public function index() {
        
        $settings = $this->settings;

        return view("index", $settings);
    }
}
