<div>
    <div class="row py-4 mb-3">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="slate">Title <br>
                    <span class="small slate-light">{{$state['title']}}</span></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="slate">Description <br>
                    <span class="small slate-light">{{$state['description']}}</span></span>
                </li>
              </ul>
            <form wire:submit="submit" class="mt-3" method="POST">
                @csrf
                <button class="btn btn-light btn-sm slate-light" wire:click="previousStep" type="button">Previous step</button>
                <button class="btn btn-light btn-sm slate-light" type="submit">Publish</button>
            </form>
        </div>
        {{-- Empty space --}}
        <div class="col-sm-4">

        </div>
    </div>
</div>
