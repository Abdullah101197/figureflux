<div class="row gx-10 mb-5">
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('plan_name', __('Package name') . ':', ['class' => 'form-label required mb-3']) }}
            {{ Form::text('plan_name', isset($package) ? $package->plan_name : null, ['class' => 'form-control form-control-solid', 'placeholder' => __('Package name'), 'required']) }}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('price', __('Price') . ':', ['class' => 'form-label required mb-3']) }}
            {{ Form::number('price', isset($package) ? $package->price : null, ['class' => 'form-control form-control-solid', 'placeholder' => __('Price'), 'required']) }}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('package_duration', __('Package Duration').':', ['class' => 'form-label mb-3 required']) }}
            <select id="package_duration" class="form-select" name="package_duration">
                <option value="">Select Duration</option>
                                    <option value="14" {{ $package->package_duration == "14" ? "selected" : "";}}> Free Trial  </option>

                    <option value="30" {{ $package->package_duration == "30" ? "selected" : "";}}> Monthly </option>
                    <option value="180" {{ $package->package_duration == "180" ? "selected" : "";}}> Biannual </option>
                    <option value="365" {{ $package->package_duration == "365" ? "selected" : "";}}> Annually </option>

            </select>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="">
            {{ Form::label('currencyType', __('messages.setting.currencies') . ':', ['class' => 'form-label mb-3 required']) }}
            <select id="currencyType" class="form-select invoice-currency-type" name="currency_id">
                <option value="">Select Currency</option>
                @foreach ($currencies as $key => $currency)
                    <option value="{{ $currency['id'] }}" {{$package->currency_id == $currency['id'] ? "selected":"" }}>{{ $currency['icon'] }}
                        &nbsp;&nbsp;&nbsp; {{ $currency['name'] }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('features', __('Package features').':', ['class' => 'form-label mb-3 required']) }}
            {{ Form::textarea('features',isset($package) ? $package->features : null,['class' => 'form-control ', 'placeholder' => __('Features')]) }}
        </div>
    </div>


    <div class="col-lg-6">

            <div class="mb-5">
                {{ Form::label('Description', __('Package Description').':', ['class' => 'form-label mb-3 required']) }}
                {{ Form::textarea('Description',isset($package) ? $package->Description : null,['class' => 'form-control ', 'placeholder' => __('Description')]) }}
        </div>
    </div>
    <div class="col-lg-6">



            <div class="mb-5">
                {{ Form::label('status', __('Active Status').':', ['class' => 'form-label mb-3 required']) }}
                <select id="status" class="form-select" name="status">
                        <option value="1"  {{ $package->status == "1" ? "selected" : "";}}>
                            <p style="color: green">Active</p>
                        </option>
                        <option value="0"  {{ $package->status == "0" ? "selected" : "";}}>
                            <p style="color: rgb(128, 0, 2)">InActive</p>
                        </option>
                </select>
        </div>

    </div>

</div>
<div class="float-end d-flex">
    {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary me-3']) }}
    <a href="{{ route('packages.index') }}" type="reset"
        class="btn btn-secondary btn-active-light-primary">{{ __('messages.common.discard') }}</a>
</div>
