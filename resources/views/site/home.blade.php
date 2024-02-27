<style>
    #home .first-block.banner.apply-image {
        background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)),
            url('{{ URL::asset('/images/pages/home/banner.png') }}') no-repeat center;
        background-size: cover;
    }

    @media only screen and (min-width: 1024px) {
        #home .first-block.banner.apply-image {
            background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)),
                url('{{ URL::asset('/images/pages/home/banner.png') }}') no-repeat top center;
            background-size: cover;
        }
    }
</style>

<div class="page" id="home">
    <div class="first-block banner apply-image">
        <div class="left">
            <h1>
                You Are
                Welcomed!
            </h1>
            <h3>Hybrid Schools Innercity</h3>
            <p>
                We are a private, co-educational, day school serving from Pre-School, Primary School and High School
                students in grades R to grade 12. With an aim to educate leaders of character who will value and improve
                the world they inherit through the positive impacts we bring to both our staff and students. we also
                like to think of ourselves as A community with high expectation and high academic achievement.
            </p>
            <button class="left-rounded-btn btn">Apply</button>
        </div>
        <div class="right">
            @php
                $info_blocks = [
                    [
                        'name' => 'Community Engagement',
                        'color' => 'blur',
                        'text' => '
                            Schools are often at the heart of local communities, and working with them can help we 
                            establish a strong presence within the community. This leads to increased brand awareness, 
                            positive community relationships, and potential opportunities for further engagement.
                        ',
                    ],
                    [
                        'name' => 'Education',
                        'color' => 'blur',
                        'text' => '
                            As we know a good education foundation will  help our learners hone their communication skills
                            by learning how to read, write, speak and listen. Education develops critical thinking. This 
                            is vital in teaching a person how to use logic when making decisions and interacting with people.
                        ',
                        'break' => true,
                    ],
                    [
                        'name' => 'Educational Impact',
                        'color' => 'grey',
                        'text' => '
                            Primary and High Schools are key institutions for shaping young minds and providing education. By 
                            collaborating with Our schools, you have an opportunity to make a positive impact on students\' 
                            learning experiences and contribute to their academic development.
                        ',
                    ],
                    [
                        'name' => 'Future Workforce Development',
                        'color' => 'grey',
                        'text' => '
                            By engaging with Our schools, you will be able to contribute to the development of future talent and 
                            the workforce. This can involve activities such as career fairs, internships, mentoring programs, or 
                            skills workshops, which help prepare students for future career opportunities.
                        ',
                    ],
                ];
            @endphp
            @foreach ($info_blocks as $block)
                <div class="block info-block {{ $block['color'] }} shadowed">
                    <span class="h2">{{ $block['name'] }}</span>
                    <p>
                        {{ $block['text'] }}
                    </p>
                </div>
                @if (isset($block['break']))
                    <div style="
                    flex-basis: 100%;
                    width: 0;"></div>
                @endif
            @endforeach
            <div class="block info-block rect red shadowed animation slide-left">
                <p class="text"> 
                    Become A Student Of <br>
                    Our institution
                </p>
                <a href="{{ url('/apply') }}"
                    class="external-link btn round-square-btn hover-red primary animation appear-view grow-in">
                        Apply
                </a>
            </div>
        </div>
    </div>
</div>
