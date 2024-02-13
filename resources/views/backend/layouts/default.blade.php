@include("backend.partials.head")

<div class="container-scroller">
    
    @include("backend.partials.header")
    
    <div class="container-fluid page-body-wrapper">
        
        @include("backend.partials.sidebar")

        <div class="main-panel">
            <div class="content-wrapper">
                @yield("content")
                @show
            </div>
           
            @include("backend.partials.footer")

        </div>
    </div>

</div>

@include("backend.partials.foot")