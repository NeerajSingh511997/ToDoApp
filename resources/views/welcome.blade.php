@extends('layout.master')

@section('content')
   

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Todo Reminder       
        </div>
        <div class="col-lg-6 col-lg-offset-3 content-details">
            <p><cite>"ToDo Reminder"</cite> allow you to create any reminder of your current scheduled task. At the same time allow you the power to modify it anytime.</p>
            <a href="{{ Route('todo') }}" class="btn btn-lg btn-primary">Set up Reminder</a>
        </div>
    </div>
</div>
    
@endsection

