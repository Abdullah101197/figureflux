<div class="row gx-10 mb-5">
    <div class="col-lg-6">
        <div class="mb-5">
            {{ Form::label('plan_name', __('Job Title') . ':', ['class' => 'form-label required mb-3']) }}
            {{ Form::text('plan_name', isset($job) ? $job->title : null, ['class' => 'form-control form-control-solid', 'placeholder' => __('Package name'), 'required']) }}
        </div>
    </div>






    <div class="col-lg-6">

            <div class="mb-5">
                {{ Form::label('Description', __('Job Description').':', ['class' => 'form-label mb-3 required']) }}
                {{ Form::textarea('Description',isset($job) ? $job->Description : null,['class' => 'form-control ', 'placeholder' => __('Description')]) }}
        </div>
    </div>


</div>
<div class="float-end d-flex">
    {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary me-3']) }}
    <a href="{{ route('jobs.index') }}" type="reset"
        class="btn btn-secondary btn-active-light-primary">{{ __('messages.common.discard') }}</a>
</div>
