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
                <img alt="Logo" src="{{getLogoUrl() }}" class="img-fluid object-contain">
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

                        <!-- Name -->
                        <div class="col-xl-6">
                            <label class="form-label fw-bolder text-dark fs-6 required" for="name">First Name:</label>
                            <input class="form-control form-control-lg " id="first_name"
                                   value="{{ old('first_name') }}" type="text" name="first_name"
                                   placeholder="{{__('messages.client.first_name')}}" autocomplete="off" required
                                   autofocus/>
                            <div class="invalid-feedback">
                                {{ $errors->first('first_name') }}
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="col-xl-6">
                            <label class="form-label fw-bolder text-dark fs-6 required" for="last_name">Last
                                Name:</label>
                            <input class="form-control form-control-lg " type="text"
                                   value="{{ old('last_name') }}" name="last_name"
                                   placeholder="{{__('messages.client.last_name')}}"
                                   autocomplete="off" autofocus/>
                            <div class="invalid-feedback">
                                {{ $errors->first('last_name') }}
                            </div>
                        </div>

                    </div>

                    <!-- Email Address -->
                    <div class="fv-row mb-7">
                        <label class="form-label fw-bolder text-dark fs-6 required" for="email">Email:</label>
                        <input class="form-control form-control-lg " id="email"
                               value="{{ old('email') }}"
                               type="email" name="email" placeholder="{{__('messages.client.email')}}" required
                               autocomplete="off"/>
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-10 fv-row" data-kt-password-meter="true">

                        <div class="mb-1">

                            <label class="form-label fw-bolder text-dark fs-6 required" for="password">Password:</label>

                            <div class="position-relative mb-3">
                                <input class="form-control form-control-lg " id="password"
                                       type="password"
                                       name="password" placeholder="{{ __('messages.client.password')}}"
                                       autocomplete="new-password"/>
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                      data-kt-password-meter-control="visibility">
											<i class="bi bi-eye-slash fs-2"></i>
											<i class="bi bi-eye fs-2 d-none"></i>
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
                        <input class="form-control form-control-lg " type="password"
                               id="password_confirmation" name="password_confirmation"
                               placeholder="{{ __('messages.client.confirm_password')}}"
                               autocomplete="off"/>
                        <div class="invalid-feedback">
                            {{ $errors->first('password_confirmation') }}
                        </div>
                    </div>

                    <div class="fv-row mb-10">
                        <label class="form-check form-check-custom  form-check-inline">
                            <input class="form-check-input" type="checkbox" name="toc" value="1" required/>
                            <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
									<a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                        </label>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-primary">
                            <span class="indicator-label"> {{ __('Register') }}</span>
                            <span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>

    <!--end::Main-->
@endsection


{{-- <div class="row">
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('first_name', __('messages.client.first_name').':', ['class' => 'form-label required mb-3']) }}
            {{ Form::text('first_name', isset($user) ? $user->first_name : null, ['class' => 'form-control form-control-solid', 'placeholder' => __('messages.client.first_name'), 'required']) }}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('last_name', __('messages.client.last_name').':', ['class' => 'form-label required mb-3']) }}
            {{ Form::text('last_name', isset($user) ? $user->last_name : null, ['class' => 'form-control form-control-solid', 'placeholder' => __('messages.client.last_name'), 'required']) }}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('email', __('messages.client.email').':', ['class' => 'form-label mb-3 required']) }}
            {{ Form::email('email', isset($user) ? $user->email : null, ['class' => 'form-control form-control-solid', 'placeholder' => __('messages.client.email'),'required']) }}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="">
            {{ Form::label('contact', __('messages.client.contact_no').':', ['class' => 'form-label mb-3']) }}
            {{ Form::tel('contact', getSettingValue('country_code'), ['class' => 'form-control form-control-solid', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber']) }}
            {{ Form::hidden('region_code', isset($user) ? $user->region_code : null,['id'=>'prefix_code']) }}
            <span id="valid-msg" class="hide text-success fw-400 fs-small mt-2">✓ &nbsp; Valid</span>
            <span id="error-msg" class="hide text-danger fw-400 fs-small mt-2"></span>
        </div>
    </div>
    @if(!isset($user))
        <div class="col-md-6 mb-5">
            <div class="fv-row">
                <div class="mb-1">
                    {{ Form::label('password',__('messages.client.password').':' ,['class' => 'form-label mb-3 required']) }}
                    <div class="position-relative mb-3">
                        <input class="form-control form-control-solid"
                               type="password" placeholder={{__('messages.client.password')}} name="password"
                               autocomplete="off"
                               aria-label="Password" data-toggle="password" required>
                        <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                                <i class="bi bi-eye-slash-fill"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-5">
            <div class="fv-row">
                <div class="mb-1">
                    {{ Form::label('confirmPassword',__('messages.client.confirm_password').':' ,['class' => 'form-label mb-3 required']) }}
                    <div class="position-relative mb-3">
                        <input class="form-control form-control-solid"
                               type="password"
                               placeholder={{__('messages.client.confirm_password')}} name="password_confirmation"
                               autocomplete="off" aria-label="Password" data-toggle="password" required>
                        <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 me-4 input-icon input-password-hide cursor-pointer text-gray-600">
                               <i class="bi bi-eye-slash-fill"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="mb-3" io-image-input="true">
        <label for="exampleInputImage" class="form-label">{{ __('messages.client.profile') }}:</label>
        <div class="d-block">
            <div class="image-picker">
                <div class="image previewImage" id="exampleInputImage"
                {{$styleCss}}="
                background-image:url({{ !empty($user->profile_image) ? $user->profile_image : asset('assets/images/avatar.png') }}
                )">
            </div>
            <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip" title="edit">
                    <label>
                        <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                            <input type="file" id="profile_image" name="profile" class="image-upload d-none"
                                   accept="image/*"/>
                    </label>
                </span>
        </div>
    </div>
    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
</div>
</div>
<div class="float-end d-flex mb-5">
    {{ Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-3']) }}
    <a href="{{ route('users.index') }}" type="reset"
       class="btn btn-secondary btn-active-light-primary">{{__('messages.common.discard')}}</a>
</div> --}}

