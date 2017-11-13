<!-- Form -->
<form method="get" action="{{route('followers.show', $username)}}">
    <div class="form-group row">
        <div class="col-xs-8 col-md-6">
            <label for="username">{{ __('index.username')}}</label>
            <input type="text" name="username" class="form-control" placeholder="{{__('index.username.placeholder')}}" id="username">
        </div>
        <br />
        <button class="btn" type="submit" value="{{ __('index.search')}}">{{ __('index.search')}}</button>
    </div>
</form>