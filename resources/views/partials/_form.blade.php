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
        <ul  id="followers">
        </ul>
        <a href="#followers" class="load-more" id="page" title="1">Next page</div>
        </div>
    </div>
    @section('scripts')

    <script>
        $('#search').submit(function(event){
            event.preventDefault();
            event.stopPropagation();
        clean();
        $('#currentUser').val($('#username').val())
        getFollowers($('#currentUser').val(), 1);
    })

        function clean()
    {
        $('#followers').html(''); //clean
    }


        function getFollowers(username, page){
         $.ajax({
          type: 'GET',
          url: "{{route('followers.usernamePage')}}/"+username+"/"+page,
          dataType: 'json' ,
          success: function(result){

            $.each(result, function(k, v){
                $('#followers').append('<li><img class="avatar" src="'+v.avatar_url+'" /></li>');
            });
            if(result.length<30){
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