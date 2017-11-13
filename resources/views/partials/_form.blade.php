<!-- Form -->
<form method="post" action="" id="search">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group row">
        <div class="col-xs-8 col-md-6">
            <label for="username">{{ __('index.username')}}</label>
            <input type="text" name="username" class="form-control" placeholder="{{__('index.username.placeholder')}}" id="username">
        </div>
        <br />
        <button class="btn" type="submit" value="{{ __('index.search')}}">{{ __('index.search')}}</button>
    </div>
</form>
@section('scripts')
<script> jQuery(function(){ jQuery("#username").on('change',function(e){ jQuery("#search").attr("action","" + jQuery(this).val()); }); }); </script>
@endsection