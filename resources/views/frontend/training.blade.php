@extends('layouts.frontend.non_mix_header')
@section('title')
FigurFlux - Training
@endsection
@section('content')


<div class="custom-container">
    <div class="main-tainging">
        <h1>Expert FigureFlux Training</h1>
        <p>
            Enhance your skills with personalized training sessions on the latest FigureFlux updates.
            <br>
            <br>
            The "Expert FigureFlux Training" is designed to provide comprehensive and personalized training sessions
            on FigureFlux updates.
            No matter how experienced you are, our experienced trainers will guide you through the software's
            features and functions to help you enhance your skills and knowledge. Our training offerings cover
            various topics, from basic to advanced levels, to cater to your specific needs and requirements. With
            our expert guidance, you can optimize the use of the software, boost your productivity and achieve your
            business goals. Join us for a unique learning experience and take your FigureFlux skills to the next
            level.
        </p>
        <h2>Training Offerings:</h2>
        <p>At FigureFlux, we understand the importance of a solid understanding of the software to get the most out
            of it. That's why we offer a range of training options to help you enhance your skills and knowledge of
            our software.</p>
        <h3>Basic Training: </h3>
        <p>This session is designed for users who are new to FigureFlux. You'll learn the fundamentals of the
            software, including how to navigate the platform, use the chat and tasks features, and work with
            documents.</p>
        <h3>Intermediate Training:</h3>
        <p>
            This training covers the advanced features of FigureFlux, including business and payment management,
            accounts and sales, suppliers and purchases, and contracts. You'll learn how to optimize the software
            for your specific needs and streamline your workflow.
        </p>
        <h3>Advanced Training:</h3>
        <p>This session is for experienced FigureFlux users who want to take their skills to the next level. You'll
            learn about more complex features, such as project management, lead management, and support management.
        </p>
        <h3>Custom Training:</h3>
        <p>Need help finding what you're looking for? Our expert trainers can create a customized training program
            based on your specific needs and requirements.</p>
        <h4>No matter which training you choose, you'll receive personalized attention and guidance to help you
            achieve your goals and optimize the use of FigureFlux.</h4>
        <h2>Trainer Profile:</h2>
        <p>Kevin Ross is a seasoned business trainer. Specializes in providing training on FigureFlux features,
            including chat, tasks, documents, business payments, accounts, sales, contracts, HRM and more. Holds a
            Bachelor's in Business Admin. Extensive experience in business operations. Skilled in imparting
            knowledge to organizations looking to optimize processes. Passionate about helping clients achieve their
            goals.</p>
        <h2>Schedule and Availability:</h2>
        <p>Training sessions are available weekly, with virtual and in-person session options. Virtual sessions are
            conducted via video conferencing, making it easy for participants to participate from the comfort of
            their own office or home. In-person sessions are held at our training facilities, with ample space for
            participants to learn and engage with the trainers.</p>
        <p>We offer training sessions at the following times:</p>
        <ul>
            <li>Morning sessions: 9:00 AM - 12:00 PM (UTC)</li>
            <li>Afternoon sessions: 1:00 PM - 4:00 PM (UTC)</li>
            <li>Evening sessions: 5:00 PM - 8:00 PM (UTC)</li>
        </ul>
        <p>Each training session is available on a first-come, first-served basis, with limited spots available to
            ensure personalized attention and maximum engagement. Clients can book their preferred training session
            through our online booking system, which is available 24/7.
            <br><br>
            We strive to accommodate the diverse needs of our clients, and we are flexible in working with them to
            find a training schedule that meets their needs. If you have any questions about our training sessions
            or availability, please don't hesitate to contact us.
        </p>
        <h2>Pricing and Packages:</h2>
        <p>We offer several different training packages to suit the needs of our clients, including:</p>
        <h3>Basic Package:</h3>
        <p>This package includes an overview of the FigureFlux platform, including its features and functionalities.
            The price for this package is $500.</p>
        <h3>Comprehensive Package:</h3>
        <p>This package provides a more in-depth look at the platform, including hands-on training on using the
            various features and tools. The price for this package is $1000.</p>
        <br>
        <h3>Custom Package:</h3>
        <p>For clients with specific training needs, we offer a bespoke training package tailored to their unique
            requirements. The price for this package is determined on a case-by-case basis and depends on the
            complexity and duration of the training.
            <br>
            In addition to our standard training packages, we also offer special packages and discounts for clients
            who sign up for multiple training sessions or are part of a large organization. For more information on
            these discounts, don't hesitate to contact us.
            <br>
            All training packages include access to our trainers and support staff, as well as training materials
            and resources. We accept payment via credit card or bank transfer and offer a 100% satisfaction
            guarantee for all our training packages.
            <br>
            If you have any questions about our pricing structure or packages, please don't hesitate to contact us.
            Our team is here to help and is always happy to provide additional information and support.
        </p>
        <br><br>
        <h2>Registration and Enquiries:</h2>
        <p>Please complete the form below to register for a training session with FigureFlux. We will review your
            submission and contact you to confirm your registration and provide further details about the training
            session you selected.</p>
        <h2>Training Registration Form:</h2>
        <div class="contact-form traning-contact">
          <form method="POST" action="{{ route('training.store') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-fields">
                                <label>Your name*</label>
                                <input type="text" name="name" placeholder="Julia William">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-fields">
                                <label>Contact email *</label>
                                <input type="text" name="email" placeholder="you@example.com">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-fields">
                                <label>Phone*</label>
                                <input type="text" name="phone" placeholder="Phone">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-fields">
                                <label>Select package*</label>

                                <select placeholder="" class="form-control" name="package">

                                    @foreach ($packages as $package)
                                        <option value="{{ $package->plan_name }}">{{ $package->plan_name }}</option>
                                    @endforeach

                                </select>
                                @if ($errors->has('package'))
                                    <span class="text-danger">{{ $errors->first('package') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-fields">
                                <label>Preferred Training Session</label>
                                <select placeholder="" name="shift">
                                    <option value="Morning">Morning</option>
                                    <option value="Afternone">Afternone</option>
                                    <option value="Evening">Evening</option>
                                </select>
                                @if ($errors->has('shift'))
                                    <span class="text-danger">{{ $errors->first('shift') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-fields">
                                <label>Date(s) of Interest:</label>
                                <input type="date" name="date" placeholder="Date Here" />
                                @if ($errors->has('date'))
                                    <span class="text-danger">{{ $errors->first('date') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button>Submit</button>
                </form>
            <p>Additional Notes or Requests:</p>
            <p>For any inquiries about our training services, please get in touch with us at the following email
                address: <strong><a href="mailto:info@figureflux.com">info@figureflux.com</a></strong>
                Alternatively, call us at the following phone number: <strong><a href="tel:+1 (385) 666-6357">+1
                        (385) 666-6357</a></strong>. Our support team is available <strong>Monday to Friday, 9:00 AM
                    - 5:00 PM (UTC),</strong> to assist you with any questions or concerns.
                We look forward to providing you with a world-class training experience and helping you achieve your
                goals.
            </p>
        </div>
        <h2>Testimonials:</h2>
        <p>At FigureFlux, we are proud to have helped many clients improve their skills and achieve their goals
            through our training programs. Here are a few testimonials from some of our satisfied clients:</p>
            @include('layouts.frontend.testimonail')
        <h2>Get A Comprehensive and Effective Learning Experience</h2>
        <p>From expert trainers to flexible scheduling, interactive instruction and affordable pricing, we provide a
            comprehensive learning experience designed to help you reach your goals and succeed.</p>
        <p>Join us today and start unlocking your potential with FigureFlux training!</p>
    </div>
</div>
<div class="faq-main training-faq">
    <div class="faq-inner-wrapper">
        <h2>Frequently Asked Questions</h2>
        <div class="accourdian">
            <div class="accordian-item item1">
                <div class="accordian-link">
                    What is FigureFlux training?
                    <i class="fal fa-plus ion-md-add"></i>
                </div>
                <div class="answer">
                    <p>FigureFlux training is a series of instructional courses designed to help individuals and
                        organizations learn how to effectively use the FigureFlux platform. The courses are taught
                        by experienced trainers and provide hands-on, interactive training to help you gain a deep
                        understanding of the platform and its features. </p>
                </div>
            </div>
            <div class="accordian-item item2">
                <div class="accordian-link">
                    Who is the training suitable for?
                    <i class="fal fa-plus ion-md-add"></i>
                </div>
                <div class="answer">
                    <p>FigureFlux training is suitable for individuals and organizations of all levels who want to
                        improve their skills and knowledge of the FigureFlux platform. Whether you are a beginner or
                        an advanced user, our training programs are designed to meet your needs and help you achieve
                        your goals.</p>
                </div>
            </div>
            <div class="accordian-item item3">
                <div class="accordian-link">
                    What is included in the training program?
                    <i class="fal fa-plus ion-md-add"></i>
                </div>
                <div class="answer">
                    <p>The FigureFlux training program includes a series of instructional courses, each designed to
                        help you learn a specific aspect of the platform. The courses are hands-on and interactive,
                        and include opportunities for you to practice what you have learned. In addition, you will
                        receive a training manual and access to our support team for any questions or concerns you
                        may have.</p>
                </div>
            </div>
            <div class="accordian-item item4">
                <div class="accordian-link">
                    How do I register for FigureFlux training?
                    <i class="fal fa-plus ion-md-add"></i>
                </div>
                <div class="answer">
                    <p>To register for FigureFlux training, simply fill out the registration form on our website and
                        select the course you would like to take. Our team will be in touch with you to confirm your
                        registration and provide further information on scheduling and payment.</p>
                </div>
            </div>
            <div class="accordian-item item5">
                <div class="accordian-link">
                    Is there a cost for FigureFlux training?
                    <i class="fal fa-plus ion-md-add"></i>
                </div>
                <div class="answer">
                    <p>Yes, there is a cost for FigureFlux training. Our pricing structure is flexible and
                        affordable, and we offer special discounts for bulk purchases. For more information on
                        pricing, please visit our website or contact our support team.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
$(document).ready(function() {
    $('.testimonial-inner').slick({
        dots: true,
        infinite: false,
        speed: 300,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
    $('.plans-slide').slick({
        dots: false,
        infinite: false,
        speed: 300,
        arrows: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1020,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
});
</script>

@endsection