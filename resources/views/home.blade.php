@extends('layouts.master')

@section('content')
<!-- Start banner -->
<section class="banner" id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 banner-left">
                <h2 class="banner-title">Our creativity is your success</h2>
                <p class="banner-desc">We break all boundaries if they happen on our way of project’s development!</p>
                <div class="banner-btn">
                    <a href="#" class="banner-btn-link banner-btn-more">Learn more</a>
                    <a href="#" class="banner-btn-link banner-btn-video"><img src="{{ asset('assets/img/banner/watch-video.svg') }}" alt="Watch Video" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-md-6 banner-right">
                <img src="{{ asset('assets/img/banner/banner-right.svg') }}" alt="Banner Right Image" class="img-fluid">
            </div>
        </div>
    </div>
</section><!-- End banner -->
<!-- Start About Us -->
<section class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-7 about-left">
                <img src="{{ asset('assets/img/about/about-left.png') }}" alt="" srcset="{{ asset('assets/img/about/about-left.png') }}" class="img-fluid">
            </div>
            <div class="col-md-5 about-right">
                <h2 class="about-title">Creative challenges are our passion</h2>
                <p class="about-desc">Our team of designers and developers work closely together to build a creative and positive working environment. Functionality is as important to us as aesthetics.</p>
                <div class="about-btn">
                    <a href="#" class="about-btn-link about-btn-us">About us</a>
                    <a href="#" class="about-btn-link about-btn-contact">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- End About Us -->
<!-- Start Services -->
<section class="services" id="services">
    <div class="container">
        <h2 class="services-title">We provide a wide range of creative services</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="item-icon"><i class="fas fa-paint-brush"></i></div>
                    <h3 class="service-item-title">Web Design & Brending</h3>
                    <p class="service-item-desc">A great brand combines design and conveys company’s value messaging to evoke emotion and drive strategy.</p>
                    <a href="#" class="service-item-link">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="item-icon"><i class="fas fa-code"></i></div>
                    <h3 class="service-item-title">Graphic Design</h3>
                    <p class="service-item-desc">Rich experience plus unlimited imagination create our successful service discovered by clients.</p>
                    <a href="#" class="service-item-link">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="item-icon"><i class="fas fa-cog"></i></div>
                    <h3 class="service-item-title">Video Production</h3>
                    <p class="service-item-desc">Creating and handling professional video is our strong point. It plays major role in your digital business strategy.</p>
                    <a href="#" class="service-item-link">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="item-icon"><i class="fab fa-searchengin"></i></div>
                    <h3 class="service-item-title">SEO</h3>
                    <p class="service-item-desc">We provide everything your site needs to perform at it’s highest capabilities on the major search engines.</p>
                    <a href="#" class="service-item-link">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="item-icon"><i class="fas fa-dumpster-fire"></i></div>
                    <h3 class="service-item-title">Digital Marketing</h3>
                    <p class="service-item-desc">We do collateral design, interactive design, hoarding, signage, presentation centres, and more.</p>
                    <a href="#" class="service-item-link">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="item-icon"><i class="fas fa-comments"></i></div>
                    <h3 class="service-item-title">Infographics</h3>
                    <p class="service-item-desc">Turn your data into captivating artwork that will keep your audience engaged. Our team can help you with it.</p>
                    <a href="#" class="service-item-link">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services -->
<!-- Start Contact Us -->
<section class="contact-us" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 contact-us-left">
                <h2 class="contact-us-title">If you have any questions, please contact us</h2>
                <p class="contact-us-desc">Our professional support team try to do their best to provide you with high-quality consultations concerning any question about our services.</p>
                <div class="contact-us-btn">
                    <a href="#" class="about-btn-link about-btn-us">Contact us</a>
                    <a href="#" class="about-btn-link about-btn-contact">Subscribe</a>
                </div>
            </div>
            <div class="col-md-6 conatct-us-right">
                <img src="{{ asset('assets/img/contact/contact-front.svg') }}" alt="Contact" class="img-fluid">
            </div>
        </div>
    </div>
</section><!-- End Contact Us -->
<!-- Start Projects -->
<section class="projects" id="projects">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 projects-left">
                <div class="row">
                    <div class="col-md-6">
                        <div class="project">
                            <h3 class="project-title">1880+</h3>
                            <p class="project-desc">Completed projects to the end by our specialists.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project">
                            <h3 class="project-title">56</h3>
                            <p class="project-desc">A large team of the best specialists.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project">
                            <h3 class="project-title">2000+</h3>
                            <p class="project-desc">Customers who were satisfied with our work.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="project">
                            <h3 class="project-title">100%</h3>
                            <p class="project-desc">Our values are good organization and result orientation.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="projects-right">
                    <h2 class="projects-title">Why choose our studio for your projects?</h2>
                    <p class="projects-desc">We are a command of professional and enthusiastic people, who like what they do and are always in the process of growing and improving their skills.</p>
                    <div class="projects-btn">
                        <a href="#" class="projects-btn-link">Order service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Projects -->
<!-- Start Work Step -->
<section class="work-step" id="work-step">
    <div class="container">
        <h2 class="work-step-title">Steps of our work</h2>
        <div class="row work-step-item">
            <div class="col-md-4">
                <div class="work-step-item-left">
                    <img src="{{ asset('assets/img/work-step/work-step-item-1.svg') }}" alt="Work Step Items 1" class="img-fluid">
                </div>
            </div>
            <div class="col-md-8">
                <div class="work-step-item-right">
                    <div class="work-step-item-icon"><span class="work-step-counter">01</span></div>
                    <div class="work-step-item-content">
                        <h3 class="work-step-item-title">Meeting With The Customer</h3>
                        <p class="work-step-item-desc">The first meeting is very import to form contact and discuss the main ideas of the project.</p>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="row work-step-item flex-row-reverse">
            <div class="col-md-4">
                <div class="work-step-item-left">
                    <img src="{{ asset('assets/img/work-step/work-step-item-2.svg') }}" alt="Work Step Items 2" class="img-fluid">
                </div>
            </div>
            <div class="col-md-8">
                <div class="work-step-item-right">
                    <div class="work-step-item-icon"><span class="work-step-counter">02</span></div>
                    <div class="work-step-item-content">
                        <h3 class="work-step-item-title">Meeting With The Customer</h3>
                        <p class="work-step-item-desc">The first meeting is very import to form contact and discuss the main ideas of the project.</p>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="row work-step-item">
            <div class="col-md-5">
                <div class="work-step-item-left">
                    <img src="{{ asset('assets/img/work-step/work-step-item-3.svg') }}" alt="Work Step Items 3" class="img-fluid">
                </div>
            </div>
            <div class="col-md-7">
                <div class="work-step-item-right">
                    <div class="work-step-item-icon"><span class="work-step-counter">03</span></div>
                    <div class="work-step-item-content">
                        <h3 class="work-step-item-title">Meeting With The Customer</h3>
                        <p class="work-step-item-desc">The first meeting is very import to form contact and discuss the main ideas of the project.</p>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="row work-step-item flex-row-reverse">
            <div class="col-md-5">
                <div class="work-step-item-left">
                    <img src="{{ asset('assets/img/work-step/work-step-item-4.svg') }}" alt="Work Step Items 4" class="img-fluid">
                </div>
            </div>
            <div class="col-md-7">
                <div class="work-step-item-right">
                    <div class="work-step-item-icon"><span class="work-step-counter">04</span></div>
                    <div class="work-step-item-content">
                        <h3 class="work-step-item-title">Meeting With The Customer</h3>
                        <p class="work-step-item-desc">The first meeting is very import to form contact and discuss the main ideas of the project.</p>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="row work-step-item">
            <div class="col-md-5">
                <div class="work-step-item-left">
                    <img src="{{ asset('assets/img/work-step/work-step-item-5.svg') }}" alt="Work Step Items 5" class="img-fluid">
                </div>
            </div>
            <div class="col-md-7">
                <div class="work-step-item-right">
                    <div class="work-step-item-icon"><span class="work-step-counter">05</span></div>
                    <div class="work-step-item-content">
                        <h3 class="work-step-item-title">Meeting With The Customer</h3>
                        <p class="work-step-item-desc">The first meeting is very import to form contact and discuss the main ideas of the project.</p>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</section><!-- End Work Step -->
<!-- Start Work -->
<section class="work" id="work">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="work-title">Our team's work with Projects</h2>
            </div>
            <div class="col-md-6 text-right align-self-center work-btn">
                <a href="#" class="about-btn-link about-btn-us">All projects</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <figure class="work-item">
                    <img src="{{ asset('assets/img/work/project-1.jpg') }}" alt="Project 1" class="img-fluid">
                    <figcaption class="work-item-caption">
                        <h3 class="work-item-caption-title">Minimal Creative "Impuls"</h3>
                        <a href="#" class="work-item-link">View site <i class="fas fa-long-arrow-alt-right"></i></a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="work-item">
                    <img src="{{ asset('assets/img/work/project-2.jpg') }}" alt="Project 2" class="img-fluid">
                    <figcaption class="work-item-caption">
                        <h3 class="work-item-caption-title">Travel Company "Tour Up"</h3>
                        <a href="#" class="work-item-link">View site <i class="fas fa-long-arrow-alt-right"></i></a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4">
                <figure class="work-item">
                    <img src="{{ asset('assets/img/work/project-3.jpg') }}" alt="Project 3" class="img-fluid">
                    <figcaption class="work-item-caption">
                        <h3 class="work-item-caption-title">Restaurant Pizza "Little Italy"</h3>
                        <a href="#" class="work-item-link">View site <i class="fas fa-long-arrow-alt-right"></i></a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section><!-- End Work -->
<!-- Start Sign Up -->
<section class="signup" id="signup">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/signup/signup-image.svg') }}" alt="Sign Up Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="signup-right">
                    <h2 class="signup-title">Sign up for our consultation</h2>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="name" id="name" value="" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" value="" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="passion" name="password" id="password" value="" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="signup" id="signup-submit" class="about-btn-link about-btn-us" value="Sign up">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Sign Up -->
@endsection
