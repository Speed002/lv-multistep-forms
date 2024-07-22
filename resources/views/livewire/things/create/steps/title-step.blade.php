<div>
    <div class="row py-4 mb-3">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <form wire:submit="submit" class="mt-3" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label slate-light">Title</label>
                    <input type="text" class="form-control" wire:model='title' name="title" id="title" value="">
                    @error('title')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>
                <button class="btn btn-light btn-sm slate-light" type="submit">Next step</button>
            </form>
        </div>
        {{-- Empty space --}}
        <div class="col-sm-4">

        </div>
    </div>
</div>
