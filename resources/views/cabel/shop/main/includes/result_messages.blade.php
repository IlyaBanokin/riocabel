@if($errors->any())
    <div class="isa_info">
        <i class="fa fa-info-circle" style="float: left"></i>
            @foreach($errors->all() as $errorTxt)
                    {{ $errorTxt }} <br/>
            @endforeach
    </div>
@endif

@if(session('success'))
    <div class="isa_success">
        <i class="fa fa-check"></i>
        {{ session()->get('success') }}
    </div>
@endif
