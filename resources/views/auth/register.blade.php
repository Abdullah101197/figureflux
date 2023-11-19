 @extends('layouts.auth')
 @section('title')
     Register
 @endsection
 @section('content')
     <div class="container">
         @include('flash::message')
     </div>
     <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
         <div class="col-12 text-center">
             <a href="{{ url('/') }}" class="image mb-7 mb-sm-10 image-medium">
                 <img alt="Logo" src="{{ getLogoUrl() }}" class="img-fluid object-contain" style="
    width: 153%;
    height: 157%;
">
             </a>
         </div>

         <div class="w-lg-600px">
             @include('layouts.errors')
             <div class="w-lg-600px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
                 <form class="form w-100" method="POST" action="{{ route('register') }}">
                     @csrf
                     <div class="mb-10 text-center">
                        <h1 class="text-dark mb-3">Create an Account</h1>

                         <div class="text-gray-400 fw-bold fs-4">Already have an account?
                             <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a>
                         </div>
                     </div>

                     <div class="d-flex align-items-center mb-10">
                         <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                         <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                         <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                     </div>
                     <div class="row fv-row mb-7">

                         <!-- Bussiness name -->


                         <div class="col-xl-6">
                             <label class="form-label fw-bolder text-dark fs-6 required" for="name">Enter Your Business
                                 Name:</label>
                             <input class="form-control form-control-lg " id="business_name"
                                 value="{{ old('business_name') }}" type="text" name="business_name"
                                 placeholder="{{ __('messages.client.business_name') }}" autocomplete="off" required
                                 autofocus />
                             <div class="invalid-feedback">
                                 {{ $errors->first('business_name') }}
                             </div>
                         </div>
                         <!-- Many User -->


                         <div class="col-xl-6">
                             <label class="form-label fw-bolder text-dark fs-6 required" for="name">How Many User You Have? </label>
                             <input class="form-control form-control-lg " id="user_count"
                                 value="{{ old('user_count') }}" type="text" name="user_count"
                                 placeholder="{{ __('For Example 1,2,3.....') }}" autocomplete="off" required
                                 autofocus />
                             <div class="invalid-feedback">
                                 {{ $errors->first('user_count') }}
                             </div>
                         </div>



                     </div>

                     <div class="row fv-row mb-7">

                         <!-- Name -->


                         <div class="col-xl-6">
                             <label class="form-label fw-bolder text-dark fs-6 required" for="name">First Name:</label>
                             <input class="form-control form-control-lg " id="first_name" value="{{ old('first_name') }}"
                                 type="text" name="first_name" placeholder="{{ __('messages.client.first_name') }}"
                                 autocomplete="off" required autofocus />
                             <div class="invalid-feedback">
                                 {{ $errors->first('first_name') }}
                             </div>
                         </div>

                         <!-- Last Name -->
                         <div class="col-xl-6">
                             <label class="form-label fw-bolder text-dark fs-6 required" for="last_name">Last
                                 Name:</label>
                             <input class="form-control form-control-lg " type="text" value="{{ old('last_name') }}"
                                 name="last_name" placeholder="{{ __('messages.client.last_name') }}" autocomplete="off"
                                 autofocus />
                             <div class="invalid-feedback">
                                 {{ $errors->first('last_name') }}
                             </div>
                         </div>

                     </div>

                     <!-- Email Address -->
                     <div class="fv-row mb-7">
                         <label class="form-label fw-bolder text-dark fs-6 required" for="email">Email:</label>
                         <input class="form-control form-control-lg " id="email" value="{{ $email }}"
                             type="email" name="email" placeholder="{{ __('messages.client.email') }}" required
                             autocomplete="off" />
                         <div class="invalid-feedback">
                             {{ $errors->first('email') }}
                         </div>
                     </div>
                     <!---->

                     <!---->

                     <!-- Password -->
                     <div class="mb-10 fv-row" data-kt-password-meter="true">

                         <div class="mb-1">

                             <label class="form-label fw-bolder text-dark fs-6 required" for="password">Password:</label>

                             <div class="position-relative mb-3">
                                 <input class="form-control form-control-lg " id="password" type="password" name="password"
                                     placeholder="{{ __('messages.client.password') }}" autocomplete="new-password" />
                                 <div class="invalid-feedback">
                                     {{ $errors->first('password') }}
                                 </div>
                                 <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                     data-kt-password-meter-control="visibility">
                                      <a class="text-dark" id="icon-click">
    <i class="bi bi-eye-slash" id="icon"></i>
  </a>
                                     <!--<i class="bi bi-eye-slash fs-2"></i>-->
                                     <!--<i class="bi bi-eye fs-2 d-none"></i>-->
                                 </span>
                             </div>

                             <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                 <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                 <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                 <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                 <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                             </div>

                         </div>

                         <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.
                         </div>

                     </div>

                     <!-- Confirm Password -->
                     <div class="fv-row mb-5">
                         <label class="form-label fw-bolder text-dark fs-6 required" for="password_confirmation">Confirm
                             Password:</label>
                         <input class="form-control form-control-lg " type="password" id="password_confirmation"
                             name="password_confirmation" placeholder="{{ __('messages.client.confirm_password') }}"
                             autocomplete="off" />
                         <div class="invalid-feedback">
                             {{ $errors->first('password_confirmation') }}
                         </div>
                     </div>

<div class="fv-row mb-10">
                         <label class="form-check form-check-custom  form-check-inline">
                             <input class="form-check-input" type="checkbox" name="toc" value="1" required />
                             <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                                 <a class="ms-1 link-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                     Terms and conditions
                                 </a>.</span>
                         </label>

                         <div class="modal fade" id="myModal">
                             <div class="modal-dialog modal-lg">
                                 <div class="modal-content">

                                     <div class="modal-body">
                                         <p>Welcome to our FigureFlux - An ERP Software registration page. Before you
                                             proceed, we kindly request you to carefully read and agree to the following
                                             terms and conditions:
                                             <br>
                                             <strong>
                                                 License Agreement: </strong>By registering for our FigureFlux software, you
                                             agree to be bound by the terms of our License Agreement. This agreement
                                             outlines the terms and conditions under which you may use our software, as well
                                             as any limitations and restrictions on use.
                                             <br>
                                             <strong> Payment:</strong> Our ERP software is a paid service, and you agree to
                                             pay the fees associated with the service as outlined on the registration page.
                                             Payment can be made using the payment methods listed on the registration page.
                                             <br>
                                             <strong>Use Restrictions: </strong>You agree to use our ERP software only for
                                             lawful purposes, and not to use it for any illegal, fraudulent, or unauthorized
                                             purpose. You also agree not to copy, modify, or distribute our software without
                                             our express written permission.
                                             <br>
                                             <strong> User Account:</strong>
                                             By registering for our ERP software, you will be given access to a user
                                             account. You are responsible for maintaining the confidentiality of your user
                                             account information, and for all activities that occur under your account.
                                             <br>
                                             <strong> Data Privacy:</strong>
                                             We take the privacy of your personal data very seriously. By registering for
                                             our ERP software, you agree to our Privacy Policy, which outlines how we
                                             collect, use, and protect your personal data.
                                             <br>
                                             <strong> Technical Support:</strong> We provide technical support for our
                                             FigureFlux software during business hours. If you experience any technical
                                             issues, please contact our support team for assistance.
                                             <br>
                                             <strong> Termination: </strong> We reserve the right to terminate your access
                                             to our ERP software at any time, for any reason, without notice. Upon
                                             termination, you must immediately cease using our software and destroy any
                                             copies you may have.
                                             <br>

                                             By clicking the "Agree" button below, you acknowledge that you have read and
                                             agree to these terms and conditions. If you do not agree to these terms and
                                             conditions, you may not register for our FigureFlux software.
                                         </p>
                                     </div>

                                     <div class="modal-footer">
                                         <button type="button" class="btn"
                                             data-bs-dismiss="modal">Close</button>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="text-center">
                         <button type="submit" class="btn btn-lg btn-primary">
                             <span class="indicator-label"> {{ __('Register') }}</span>
                             {{-- <span class="indicator-progress">Please wait... --}}
                             {{-- <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span> --}}
                         </button>
                     </div>

                 </form>

             </div>
         </div>

     </div>
 @endsection
