@if (session('message_store'))
    <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span></span>
        </button>
        {{ session ('message_store') }}
        </div>
    </div>

@elseif (session('message_update'))
    <div class="alert alert-warning alert-dismissible show fade">
        <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span></span>
        </button>
        {{ session ('message_update') }}
        </div>
    </div>

@elseif (session('message_destroy'))
    <div class="alert alert-danger alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span></span>
</button>
{{ session('message_destroy') }}
    </div>
</div>
@endif

