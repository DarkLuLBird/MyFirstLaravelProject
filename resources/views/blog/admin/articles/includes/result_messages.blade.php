@if($errors->any())
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">x</span>
                </button>
                {{ $errors->first() }}
            </div>
        </div>
    </div>
@endif

@if(session('succes'))
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-succes" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">x</span>
                </button>
                {{ session()->get('succes') }}
            </div>
        </div>
    </div>
@endif