        @if (Auth::id() == $user->id)
            <div class="mt-4">
                <form method="POST" action="{{ route('users.edit_profile',$user->id) }}">
                @csrf
                <div class="form-control mt-4">
                    <textarea rows="10" name="profile" class="input input-bordered w-full h-auto" maxlength="100">{{ $user->profile }}</textarea>
                </div>
        
                <button type="submit" class="btn btn-primary btn-block normal-case">Edit Profile</button>
                </form>
            </div>
        @endif