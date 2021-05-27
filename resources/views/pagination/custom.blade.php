<style>
.page{
padding-left: 513px;
}

</style>
@if ($paginator->hasPages())
		<div class="page">
       
        @if ($paginator->onFirstPage())
            <button  type="button" class="btn btn-dark disabled"><span>← Previous</span></button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"><button type="button" class="btn btn-dark">← Previous</button></a>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <button type="button" class="btn btn-warning disabled"><span>{{ $element }}</span></button>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button type="button" class="btn btn-warning active my-active"><span>{{ $page }}</span></button>
                    @else
                        <a href="{{ $url }}"><button type="button" class="btn btn-warning" >{{ $page }}</button></a>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next"><button type="button" class="btn btn-dark" >Next →</button></a>
        @else
            <button type="button" class="btn btn-dark disabled"><span>Next →</span></button>
        @endif
    </div>
@endif 