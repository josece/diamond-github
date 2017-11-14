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
<div class="row">
    <div class="col-xs-12 col-md-6">
        <ul  id="followers">

</ul></div></div>
@section('scripts')

<script>
    $('#search').submit(function(event){

        event.preventDefault();
        event.stopPropagation();
        clean();
        getFollowers($('#username').val());

    })

    function clean(){
        $('#followers').html('');
    }

    function getFollowers(username){
       $.ajax({
          type: 'GET',
          url: "{{route('followers.getWithParameter', '')}}/"+username,
          dataType: 'json' ,
          success: function(result){

            $.each(result, function(k, v){
                $('#followers').append('<li><img class="avatar" src="'+v.avatar_url+'" /><span class="name">'+v.login+'</span></li>');
            });
       
   },
   fail:function(result){
    //
}});
}


</script>
@endsection