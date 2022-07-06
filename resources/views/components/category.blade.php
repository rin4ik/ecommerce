<div class="ml-4">
    <a class="{{$category->depth === 0 ? 'font-bold' : ''}}" href="/categories/{{$category->slug}}">{{$category->title}}</a>
    
    @foreach($category->children as $child)
       <x-category :category="$child" />
    @endforeach 
</div>