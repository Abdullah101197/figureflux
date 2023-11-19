

@if(isset($value['features']))
<textarea name="" id="" cols="20" rows="3" disabled>{{$value['features']}}</textarea>

@endif
@if(isset($value['Description']))
<textarea name="" id="" cols="20" rows="3" disabled>{{$value['Description']}}</textarea>

@endif
@if(isset($value['status']))

@if ($value['status']==1)

<p style="color: green">Active</p>
@else
<p style="color: Red">InActive </p>

@endif

@endif
