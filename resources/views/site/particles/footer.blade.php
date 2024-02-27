<footer class="flex wrap">
    <div class="footer1 flex wrap">
        <div class="block block1 flex column al-center">
            <a href="<?php echo __DIR__; ?>" class="b_top flex al-center">
                <img src="{{ URL::asset('/images/logos/white-logo.png') }}" alt="">
                <h1>
                    Hybrid <br>
                    Schools Innercity
                </h1>
            </a>
            <p>
                We are a private, co-educational, day school serving from Pre-School, Primary School and High School
                students in grades R to grade 12. <br class="mobile"><br class="mobile">With an aim to educate leaders of character who will value and improve
                the world they inherit through the positive impacts we bring to both our staff and students. <br class="mobile"><br class="mobile">
                we also like to think of ourselves as A community with high expectation and high academic achievement.
            </p>
            <div class="b_bottom flex al-center">
                <span class="line"></span><img src="{{ URL::asset('/images/icons/rounded-arrow.svg') }}" alt="">
            </div>
        </div>
        <div class="block-container flex column">
            <div class="block block2">
                <div class="vertical-nav">
                    <span class="nav-title fw300">School Project</span>
                    <ul>
                        <li><a class="page-link home-link fw600" href="home">Home</a></li>
                        <li><a class="page-link aboutus-link fw600" href="aboutus">About Us</a></li>
                        <li><a class="page-link admin-link fw600" href="admin">Administration</a></li>
                        <li><a class="page-link institution-link fw600" href="institution">Institution</a></li>
                    </ul>
                </div>
            </div>
            <div class="block block3">
                <div class="vertical-nav">
                    <span class="nav-title fw300">Academics</span>
                    <ul>
                        <li><a class="page-link ts-and-cs fw600" href="ts-and-cs">Sciences</a></li>
                        <li><a class="page-link contact-link fw600 active" href="contact">Commercials</a></li>
                        <li><a class="page-link contact-link fw600 active" href="contact">Humanities</a></li>
                    </ul>
                </div>
            </div>
            <div class="block block4">
                <div class="vertical-nav">
                    <span class="nav-title fw300">Support</span>
                    <ul>
                        <li><a class="page-link ts-and-cs fw600" href="ts-and-cs">Terms & Conditions</a></li>
                        <li><a class="page-link contact-link fw600 active" href="contact">Latest News & Events</a></li>
                        <li><a class="page-link contact-link fw600 active" href="contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="block block5">
            <div class="b5_top flex column">
                <span class="title">
                    Stay Connect <br>
                    With Us!
                </span>
                <span class="text">
                    Finding Interest In Us, Stay Connected With Us From Today By Signing 
                    Up To Receive All The Latest News, Promotions & Updates
                </span>
            </div>
            <form class="subscriber-block flex al-center">
                <div class="sub-input hanging-placeholder flex1">
                    <input class="" type="email" name="email" autocomplete="off" required="">
                    <span class="floating-label"><span class="disappear">Enter valid email...</span><span class="appear">(example@example.com)</span></span>
                </div>
                <button type="submit" class="btn subscribe-btn rounded fill_black bold">Subscribe</button>
            </form>
        </div>
    </div>
    <div class="footer2 flex">
        <div class="left">Designed by <a class="otc" href="outcloud.co.za">Outcloud</a> © 2024/2025 | Copyright Hybrid Schools Innercity | All rights reserved.</div>
        <a href="outcloud.co.za">OTC.</a>
    </div>
</footer>