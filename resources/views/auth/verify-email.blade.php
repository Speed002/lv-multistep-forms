<x-layouts.reset>
    <div class="px-3">
        <form action="{{route('verification.send')}}" method="POST">
            @csrf
            <div>
                <label for="exampleFormControlInput1" class="form-label slate">Please check your mail for a verification link.</label>
                @if (session('status') == 'verification-link-sent')
                <p class="text-primary-emphasis">A verification link has been sent to your mail.</p>
                @endif
                <div class="mb-3">
                    <small>
                        <a href="#" class="small slate-light">If not recieved, click the link below!</a>
                    </small>
                </div>
            </div>
          <button class="btn btn-light btn-sm slate-light" type="submit">Resend verification link</button>
        </form>
      </div>
</x-layouts.auth>
