@unless(empty($followers))
<!-- Results -->
<div class="row">
    <div class="col-xs-12 col-md-6">
        <h3>{{count($followers)}} {{ trans_choice('index.followers', count($followers))}} </h3>
        <ul class="followers">
            @foreach($followers as $follower)
            <li>
                <img class="avatar" src="{{$follower['avatar_url']}}" />  
                <a href="{{$follower['login']}}">
                    <span class="name">{{$follower['login']}}</span>
                </a>
            </li>
            @endforeach
        </ul>

    </div>
</div>
@endunless