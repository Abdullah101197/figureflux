<div class="row">
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('title', __('Job Title') . ':', ['class' => 'form-label required mb-3']) }}
            {{ Form::text('title', isset($job) ? $job->title : null, ['class' => 'form-control form-control-solid', 'placeholder' => __('Package name'), 'required']) }}
        </div>
    </div>





    <div class="col-lg-6">

        <div class="mb-5">
            {{ Form::label('Description', __('Job Description') . ':', ['class' => 'form-label mb-3 required']) }}
            {{ Form::textarea('Description', isset($job) ? $job->Description : null, ['class' => 'form-control form-control-solid', 'placeholder' => __('job_duration'), 'required']) }}

        </div>
    </div>


    <div class="mb-3" io-image-input="true">
        <br>
        <br>
    </div>
</div>
<div class="float-end d-flex mb-5">
    {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary me-3']) }}
    <a href="{{ route('jobs.index') }}" type="reset"
        class="btn btn-secondary btn-active-light-primary">{{ __('messages.common.discard') }}</a>
</div>
