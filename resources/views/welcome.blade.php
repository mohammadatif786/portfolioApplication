@extends('layouts.frontend.index')

@section('content')
    <!-- Start Hero Seciton -->
    <section class="st-hero st-style2 st-bg st-dynamic-bg" data-src='{{asset('frontened/img/hero-bg-2.jpg')}}'>
        <div class="container">
            <div class="st-hero-text">
                <h1>Hi, I am <span>{{ isset($userData) ? $userData->name  : '' }}</span></h1>
                <p>I am a frontend web developer. I can provide clean code and pixel perfect design. <br>I also make
                    website more & more interactive with web animations.</p>
                <div class="st-hero-social-links">
                    <a href="#" class="st-social-btn">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="st-social-btn">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="st-social-btn">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
        <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5" class="st-hero-shape">
            <polygon points="-30,300 355.167,210.5 1432.5,290 1920,198.5 1920,300"></polygon>
        </svg>
    </section>
    <!-- End Hero Seciton -->

    <!-- Start About Seciton -->
    <section id="about" class="st-about-wrap">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">ABOUT ME</h4>
                <h2 class="st-section-heading-subtitle">ABOUT ME</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="st-about-img-wrap">
                        {{-- <div class="st-about-img st-dynamic-bg st-bg" data-src="{{ asset('frontened/img/section/about.jpg')}}"></div> --}}
                        <div class="st-about-img st-dynamic-bg st-bg" data-src="{{ asset('backend/admin/images/'.$about->image_url)}}"></div>
                    </div>
                    <div class="st-height-b0 st-height-lg-b30"></div>
                </div>
                <div class="col-lg-6">
                    <div class="st-vertical-middle">
                        <div class="st-vertical-middle-in">
                            <div class="st-text-block st-style1">
                                <h2 class="st-text-block-title">Hi There! I'm {{ isset($userData) ? $userData->name : ''  }}</h2>
                                <h4 class="st-text-block-subtitle">Full Stack Developer</h4>
                                <div class="st-text-block-text">
                                    <p>{{ isset($about) ? $about->bio : '' }}</p>
                                </div>
                                <ul class="st-text-block-details st-mp0">
                                    <li><span>Birthday</span> : <span>{{ isset($about) ? $birthday : '' }}</span></li>
                                    <li><span>Phone</span> : <span> {{ isset($about) ? $about->phone : '' }} </span></li>
                                    <li><span>Email</span> : <span>{{ isset($userData) ? $userData->email : '' }}</span></li>
                                    <li><span>From</span> : <span>{{ isset($about) ? $about->address : '' }}</span></li>
                                    <li><span>Language</span> : <span>{{ isset($about) ? $about->languages : '' }}</span></li>
                                    <li><span>Freelance</span> : <span>{{ $about->freelance == 'Available for freelance' ? 'Available' : 'Not Available' }}</span></li>
                                </ul>
                                <div class="st-text-block-btn">
                                    <a href="{{ asset('backend/admin/files/'.$about->cv_url) }}" target="_blank" class="st-btn st-style1 st-color1">Download CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Seciton -->

    <!-- Start Service Seciton -->
    <section id="service">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">SERVICES</h4>
                <h2 class="st-section-heading-subtitle">SERVICES</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <!-- Iconbox Container -->

        <div class="container">
            <div class="row">
                @foreach( $services as $service )

                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="st-iconbox st-style1">
                            <div class="st-iconbox-icon">
                               <i class="{{ $service->icon }}"></i>
                            </div>
                            <h2 class="st-iconbox-title">{{ $service->title }}</h2>
                            <div class="st-iconbox-text" style="height: 180px">{{ $service->description }}</div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>
    <!-- End Service Seciton -->

    <!-- Start Skill Seciton -->
    <section id="skill" class="st-dark-bg">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">MY SKILLS</h4>
                <h2 class="st-section-heading-subtitle">MY SKILLS</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="st-skill-wrap">
                        <div class="st-skill-heading">
                            <h2 class="st-skill-title">All the skills that I have in that field
                                of work are mentioned.</h2>
                            <div class="st-skill-subtitle">
                                As a web developer, I believe in building a solid skillset to ensure each project is executed with precision. Below are my key strengths, measured by years of experience and depth of expertise. I am committed to constantly improving and expanding my capabilities to stay up-to-date with industry standards.
                            </div>
                        </div><!-- .st-skill-heading -->
                    </div>
                </div>

                <!-- Progressbar -->

                <div class="col-lg-6">
                    <div class="st-height-b0 st-height-lg-b30"></div>
                    <div class="st-progressbar-wrap">
                        @foreach($skills as $skill)
                            <div class="st-single-progressbar mb-4">
                                <div class="st-progressbar-heading">
                                    <h3 class="st-progressbar-title">{{ $skill->name }}</h3>
                                    <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s"
                                        data-wow-delay="0.5s"> {{ $skill->proficiency }} %</div>
                                </div>
                                <div class="st-progressbar" data-progress="{{ $skill->proficiency }}">
                                    <div class="st-progressbar-in wow fadeInLeft"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skill Seciton -->

    <!-- Start Resume Seciton -->
    <section id="resume" class="st-dark-bg">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">RESUME</h4>
                <h2 class="st-section-heading-subtitle">RESUME</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Experience -->
                <div class="col-lg-6">
                    <div class="st-resume-wrap">
                        <div class="st-resume-heading">
                            <img src="{{ asset('frontened/img/icon/resume-icon1.png')}}" alt="resume-icon">
                            <h2 class="st-resume-heading-title">Experience</h2>
                        </div>

                        <div class="st-height-b50 st-height-lg-b30"></div>

                        @foreach($experiences as $experience)
                            <div class="st-resume-timeline-wrap">
                                <div class="st-resume-timeline">
                                    <h3 class="st-resume-timeline-title">{{ $experience->job_title }}</h3>
                                    <div class="st-resume-timeline-duration">{{ $experience->start_date }} - {{ $experience->end_date }}</div>
                                    <h4 class="st-resume-timeline-subtitle">{{ $experience->company }}</h4>
                                    <div class="st-resume-timeline-text">
                                        <p>{{ $experience->description }}</p>
                                    </div>
                                </div> <!-- st-resume-timeline -->
                                <div class="st-height-b50 st-height-lg-b30"></div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Education -->
                <div class="col-lg-6">

                    <div class="st-height-b0 st-height-lg-b50"></div>
                    <div class="st-resume-wrap">
                        <div class="st-resume-heading">
                            <img src="{{ asset('frontened/img/icon/resume-icon2.png')}}" alt="resume-icon">
                            <h2 class="st-resume-heading-title">Education</h2>
                        </div>
                        <div class="st-height-b50 st-height-lg-b30"></div>

                        <div class="st-resume-timeline-wrap">
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Master of Computer Science</h3>
                                <div class="st-resume-timeline-duration">2015 - 2016</div>
                                <h4 class="st-resume-timeline-subtitle">University of XYZ</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                        ligula nulla, tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div> <!-- st-resume-timeline -->
                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Bachelor of Computer Science</h3>
                                <div class="st-resume-timeline-duration">2010 - 2014</div>
                                <h4 class="st-resume-timeline-subtitle">University of ABC</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                        ligula nulla, tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div> <!-- st-resume-timeline -->
                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Diploma in Computer Science</h3>
                                <div class="st-resume-timeline-duration">2006 - 2010</div>
                                <h4 class="st-resume-timeline-subtitle">XYZ Institution</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                        ligula nulla, tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div> <!-- st-resume-timeline -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>
    <!-- End Resume Seciton -->

    <!-- Start Blog Seciton -->
    <section id="blog">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">BLOG</h4>
                <h2 class="st-section-heading-subtitle">LATEST NEWS</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <!-- Latest News Container -->

        <div class="container">
            <div class="st-slider st-style2">
                <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
                    data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3"
                    data-lg-slides="3" data-add-slides="3">
                    <div class="slick-wrapper">
                        <div class="slick-slide-in">
                            <div class="st-post-single st-style1">
                                <a class='st-post-thumb st-zoom' href='{{ route('blog') }}'>
                                    <img src="frontened/img/blog/blog1.jpg" class="st-zoom-in" alt="blog1">
                                </a>
                                <div class="st-post-info">
                                    <div class="st-post-date">
                                        By:
                                        <a href="#" class="st-post-author">Admin</a>
                                        <span class="st-post-date-divider">|</span>
                                        <span class="st-post-publish-date">27-09-2020</span>
                                    </div>
                                    <h4 class="st-post-title"><a href='{{ route('blog') }}'>What are the latest trends
                                            in Graphic design according to you?</a></h4>
                                </div>
                            </div>
                        </div><!-- .slick-slide-in -->
                        <div class="slick-slide-in">
                            <div class="st-post-single st-style1">
                                <a class='st-post-thumb st-zoom' href='{{ route('blog') }}'>
                                    <img src="{{asset('frontened/img/blog/blog2.jpg')}}" class="st-zoom-in" alt="blog2">
                                </a>
                                <div class="st-post-info">
                                    <div class="st-post-date">
                                        By:
                                        <a href="#" class="st-post-author">Admin</a>
                                        <span class="st-post-date-divider">|</span>
                                        <span class="st-post-publish-date">27-09-2020</span>
                                    </div>
                                    <h4 class="st-post-title"><a href='{{ route('blog') }}'>What do you think makes
                                            someone a good designer?</a></h4>
                                </div>
                            </div>
                        </div><!-- .slick-slide-in -->
                        <div class="slick-slide-in">
                            <div class="st-post-single st-style1">
                                <a class='st-post-thumb st-zoom' href='{{ route('blog') }}'>
                                    <img src="{{asset('frontened/img/blog/blog3.jpg')}}" class="st-zoom-in" alt="blog3">
                                </a>
                                <div class="st-post-info">
                                    <div class="st-post-date">
                                        By:
                                        <a href="#" class="st-post-author">Admin</a>
                                        <span class="st-post-date-divider">|</span>
                                        <span class="st-post-publish-date">27-09-2020</span>
                                    </div>
                                    <h4 class="st-post-title"><a href='{{ route('blog') }}'>Were there any mistakes
                                            you’ve made as a designer</a></h4>
                                </div>
                            </div>
                        </div><!-- .slick-slide-in -->
                        <div class="slick-slide-in">
                            <div class="st-post-single st-style1">
                                <a class='st-post-thumb st-zoom' href='{{ route('blog') }}'>
                                    <img src="{{asset('frontened/img/blog/blog1.jpg')}}" class="st-zoom-in" alt="blog1">
                                </a>
                                <div class="st-post-info">
                                    <div class="st-post-date">
                                        By:
                                        <a href="#" class="st-post-author">Admin</a>
                                        <span class="st-post-date-divider">|</span>
                                        <span class="st-post-publish-date">27-09-2020</span>
                                    </div>
                                    <h4 class="st-post-title"><a href='{{ route('blog') }}'>What are the latest trends
                                            in Graphic design according to you?</a></h4>
                                </div>
                            </div>
                        </div><!-- .slick-slide-in -->
                        <div class="slick-slide-in">
                            <div class="st-post-single st-style1">
                                <a class='st-post-thumb st-zoom' href='{{ route('blog') }}'>
                                    <img src="{{asset('frontened/img/blog/blog2.jpg')}}" class="st-zoom-in" alt="blog2">
                                </a>
                                <div class="st-post-info">
                                    <div class="st-post-date">
                                        By:
                                        <a href="#" class="st-post-author">Admin</a>
                                        <span class="st-post-date-divider">|</span>
                                        <span class="st-post-publish-date">27-09-2020</span>
                                    </div>
                                    <h4 class="st-post-title"><a href='{{ route('blog') }}'>What do you think makes
                                            someone a good designer?</a></h4>
                                </div>
                            </div>
                        </div><!-- .slick-slide-in -->
                        <div class="slick-slide-in">
                            <div class="st-post-single st-style1">
                                <a class='st-post-thumb st-zoom' href='{{ route('blog') }}'>
                                    <img src="{{asset('frontened/img/blog/blog3.jpg')}}" class="st-zoom-in" alt="blog3">
                                </a>
                                <div class="st-post-info">
                                    <div class="st-post-date">
                                        By:
                                        <a href="#" class="st-post-author">Admin</a>
                                        <span class="st-post-date-divider">|</span>
                                        <span class="st-post-publish-date">27-09-2020</span>
                                    </div>
                                    <h4 class="st-post-title"><a href='{{ route('blog') }}'>Were there any mistakes
                                            you’ve made as a designer</a></h4>
                                </div>
                            </div>
                        </div><!-- .slick-slide-in -->
                    </div>
                </div><!-- .slick-container -->
                <div class="pagination st-style1 st-flex st-hidden"></div>
                <!-- If dont need Pagination then add class .st-hidden -->
            </div><!-- .st-slider -->
        </div>
        <div class="st-height-b95 st-height-lg-b75"></div>
    </section>
    <!-- End Blog Seciton -->

    <!-- Start Contact Seciton -->
    <section id="contact" class="st-dark-bg">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">CONTACT ME</h4>
                <h2 class="st-section-heading-subtitle">CONTACT ME</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>

        <!-- Contact Container -->

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="st-contact-title">Just say Hello</h3>
                    <div id="st-alert"></div>
                    <form action="#" method="POST" class="st-contact-form" id="contact-form">
                        <div class="st-form-field">
                            <input type="text" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="st-form-field">
                            <input type="text" id="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="st-form-field">
                            <input type="text" id="subject" name="subject" placeholder="Your Subject" required>
                        </div>
                        <div class="st-form-field">
                            <textarea cols="30" rows="10" id="msg" name="msg" placeholder="Your Message" required></textarea>
                        </div>
                        <button class="st-btn st-style1 st-color1" type="submit" id="submit" name="submit">Send
                            message</button>
                    </form>
                </div>
                <div class="st-height-b0 st-height-lg-b30"></div>

                <div class="col-lg-6">
                    <div class="st-height-b0 st-height-lg-b40"></div>
                    <h3 class="st-contact-title">Contact Info</h3>
                    <div class="st-contact-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla tincidunt id faucibus
                        sed
                        suscipit feugiat.
                    </div>
                    <div class="st-contact-info-wrap">
                        <div class="st-single-contact-info">
                            <i class="fas fa-envelope"></i>
                            <div class="st-single-info-details">
                                <h4>Email</h4>
                                <a href="#">devis@example.com</a>
                                <a href="#">info@support.com</a>
                            </div>
                        </div>
                        <div class="st-single-contact-info">
                            <i class="fas fa-phone-alt"></i>
                            <div class="st-single-info-details">
                                <h4>Phone</h4>
                                <span>+1 876-369-9009</span>
                                <span>+1 213-519-1786</span>
                            </div>
                        </div>
                        <div class="st-single-contact-info">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="st-single-info-details">
                                <h4>Address</h4>
                                <span>2661 High Meadow Lane Bear Creek, <br>Olancha, KY 93544</span>
                            </div>
                        </div>
                        <div class="st-social-info">
                            <div class="st-social-text">Visite my social profile and get connected</div>
                            <div class="st-social-link">
                                <a href="#" class="st-social-btn active">
                                    <span class="st-social-icon"><i class="fab fa-dribbble"></i></span>
                                    <span class="st-icon-name">Dribbble</span>
                                </a>
                                <a href="#" class="st-social-btn">
                                    <span class="st-social-icon"><i class="fab fa-behance"></i></span>
                                    <span class="st-icon-name">Behance</span>
                                </a>
                                <a href="#" class="st-social-btn">
                                    <span class="st-social-icon"><i class="fab fa-twitter"></i></span>
                                    <span class="st-icon-name">Twitter</span>
                                </a>
                                <a href="#" class="st-social-btn">
                                    <span class="st-social-icon"><i class="fab fa-linkedin"></i></span>
                                    <span class="st-icon-name">LinkedIn</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>
    <!-- End Contact Seciton -->
@endsection
