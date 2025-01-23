<div class="card border border-base-300">
    <div class="card-body bg-base-200 text-4xl">
        <h2 class="card-title">{{ $user->name }}</h2>
    </div>
    <figure>
        {{-- ユーザーのメールアドレスをもとにGravatarを取得して表示 --}}
        <img src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
    </figure>
    <div class="card-body bg-base-200">
        {{-- <p class="force-wrap" "mb-0">profile:<br>{!! nl2br(e(wordwrap('1234567890123456789212345678931234567894123456789512345678961234567897123456789812345678991234567890', 45, "\n", true))) !!}</p>
         --}}
        <p class="force-wrap" "mb-0">profile:<br>{!! nl2br(e(wordwrap($user->profile, 45, "\n", true))) !!}</p>
    </div>
</div>
{{-- フォロー／アンフォローボタン --}}
@include('user_follow.follow_button')
