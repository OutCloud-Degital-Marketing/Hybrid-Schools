
<header class="header1 desktop" id="top-of-site">
    <div class="top">
        <div class="contact-list">
            @php
                foreach ($contact as $key => $value) {
                    echo "<a href='" . $value['link'] . "' class='contact-block'><span class='img-ctn'><img src='" . $value['image'] . "' alt='" . $key . " icon'></span><span class='name'>" . $value['info'] . "</span></a>";
                }
            @endphp
        </div>
        <div class="search-top">
            <button class="search-btn img-ctn"><img src="{{ URL::asset('/images/icons/search.svg') }}" alt="Search Icon"></button>
            <div class="search-input hanging-placeholder">
                <input type="search" autocomplete="off" required>
                <span class="floating-label"><span class="disappear">Search...</span><span class="appear">(Hybrid keywords)</span></span>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="search-bottom">
            <button class="btn search-close-btn img-ctn"><img src="{{ URL::asset('/images/icons/close.svg') }}" alt="close button"></button>
            <div class="search-title"><b>Most Searched</b></div>
            <div class="search-sugg">
                <button class="search-object" data-id="services">Pricing</button>
                <button class="search-object" data-id="Applications">Applications</button>
            </div>
        </div>
    </div>
</header>
<header class="header header2">
    <div class="mobile" id="mobile-nav-ctn">
        <div class="view">
            <div class="button-ctn left navBtn">
                <button class="btn menu-btn img-ctn"><img src="{{ URL::asset('/images/icons/menu.svg') }}" alt="menu button"></button>
                <button class="btn close-btn img-ctn"><img src="{{ URL::asset('/images/icons/close.svg') }}" alt="close button"></button>
            </div>
            <div class="quick-link-ctn">
                <a href="{{ URL::to('/') }}" class="img-ctn logo"><img src="{{ URL::asset('/images/logos/logo_otc.png') }}" alt="Logo"></a>
            </div>
        </div>
        <aside class="popup-ctn mobile-menu">
            <div class="mobile-nav">
                <div class="search-ctn">
                    <div class="search-top">
                        <button class="search-btn img-ctn"><img src="{{ URL::asset('/images/icons/search.svg') }}" alt="Search Icon"></button>
                        <div class="search-input hanging-placeholder">
                            <input type="search" autocomplete="off" required>
                            <span class="floating-label"><span class="disappear">Search...</span><span class="appear">(Hybrid Schools section)</span></span>
                        </div>
                    </div>
                    <div class="search-bottom">
                        <div class="search-title"><b>Most Searched</b></div>
                        <div class="search-sugg">
                            <button class="search-object" data-id="services">Pricing</button>
                            <button class="search-object" data-id="Applications">Applications</button>
                        </div>
                    </div>
                </div>
                <div class="bottom-nav">
                    <span class="nav-title fw900"><?php echo $pageTitle ?></span>
                    <ul class="mobile-nav-sub">
                        <?php
                        printSelectedNav($pageLinks, array("Terms and Conditions", "Testimonials"), true);
                        ?>
                    </ul>
                </div>
                <div class="line-ctn">
                    <div class="line"></div>
                </div>
                <div class="contact-list column">
                    @php
                        foreach ($contact as $key => $value) {
                            echo "<a href='" . $value['link'] . "' class='contact-block'><span class='img-ctn'><img src='" . $value['image'] . "' alt='" . $key . " icon'></span><span class='name'>" . $value['info'] . "</span></a>";
                        }
                    @endphp
                </div>
                <div class="booking-ctn">
                    <a href="{{ url('/apply') }}" class="page-link btn round-btn trial-btn fw700 animation appear-view grow-in">Apply</a>
                </div>
            </div>
        </aside>
    </div>
    <div class="desktop">
        <div class="view">
            <div class="left"><a href="{{ URL::to('/') }}" class="img-ctn logo"><img src="{{ URL::asset('/images/logos/logo_otc.png') }}" alt="Logo"></a></div>
            <div class="mid">
                <ul class="nav-menu">
                    <?php
                    printSelectedNav($pageLinks, array("Terms and Conditions", "Testimonials"), true);
                    ?>
                </ul>
            </div>
            {{-- <div class="right booking-ctn">
                <a href="booking-page" class="page-link btn round-square-btn trial-btn fw700 animation appear-view grow-in">Free Trial</a>
            </div> --}}
            <div class="right booking-ctn" style="margin-left: 1rem;">
                <a href="{{ url('/apply') }}" class="external-link btn round-btn stroke fw700 animation appear-view grow-in">APPLY</a>
            </div>
        </div>
    </div>
</header>