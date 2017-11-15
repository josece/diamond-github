<!-- Form -->
<form method="post" action="" id="search">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="currentUser" id="currentUser">
    <div class="form-group row">
        <div class="col-xs-8 col-md-6">
            <label for="username">{{ __('index.username')}}</label>
            <input type="text" name="username" class="form-control" placeholder="{{__('index.username.placeholder')}}" id="username">
        </div>
        <br />
        <button type="submit" class="btn">{{__('index.search')}}</button>
    </div>
</form>
<div class="row" >
    <div class="col-xs-12 col-md-6">
        <h4 id="count"></h4>
        <ul  id="followers">
        </ul>
        <a href="#followers" class="load-more" id="page" title="1">Next page</a></div>
    </div>
</div>
@section('scripts')

<script>
    var count = 0;
    $('#search').submit(function(event) {
        event.preventDefault();
        event.stopPropagation();
        clean();
        var username = $('#username').val()
        $('#currentUser').val(username);
        getUser(username);
        getFollowers(username, 1);
        

    })

    function clean() {
        $('#followers').html(''); //clean
    }
    function getUser(username) {
        $.ajax({
      type: 'GET',
      url: "{{route('followers.user')}}/"+username,
      dataType: 'json' ,
      success: function(result){
        count = result.followers;
        $('#count').html(count + " Followers").show();
        },
       fail:function(result){

       }
    });
    }

    function getFollowers(username, page) {
     $.ajax({
      type: 'GET',
      url: "{{route('followers.usernamePage')}}/"+username+"/"+page,
      dataType: 'json' ,
      success: function(result){

        $.each(result, function(k, v){
            $('#followers').append('<li><img class="avatar" src="'+v.avatar_url+'" /></li>');
        });

        if(page*30 > count){
            $('#page').hide();    
        }else{
           $('#page').show();
       }

   },
   fail:function(result){

   }
});
 }

 $('.load-more').click(function(){
    clean();
    nextPage = parseInt($('#page').attr('title')) +1 ;
    getFollowers($('#currentUser').val(), nextPage);
    $('#page').attr('title', nextPage);
});
</script>
@endsection