@if(Session::has('success'))
<div class="alert alert-success alert-dismissible flashMessage" id="successMessage" role="alert"
    style="margin-bottom: 0px;">
    <div class="alert-message">
        <strong>Success! </strong>{{session('success')}}
    </div>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible flashMessage" id="errorMessage" role="alert"
    style="margin-bottom: 0px;">
    <div class="alert-message">
        <strong>Error! </strong>{{session('error')}}
    </div>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif