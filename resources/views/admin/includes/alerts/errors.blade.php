@if(Session::has('error'))
    <div class="row mr-2 ml-2" >
            <button type="text" class="mb-4 font-medium text-sm text-red-600"
                    id="type-error">{{Session::get('error')}}
            </button>
    </div>
@endif
