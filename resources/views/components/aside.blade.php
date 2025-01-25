<aside class="col-md-3">
    <h5>Категорії</h5>
    <ul class="list-group">
        @foreach($categories as $category)
            @if($category->children()->count() > 0)

                <li class="list-group-item">
                    <a href="{{route('category.view',['id'=>$category->id])}}">{{$category->name}}</a>
                    <ul class="px-2 pt-2">
                        @foreach ($category->childrenCategories as $childCategory)
                            <li class="list-group-item" style="border:0;"><a href="{{route('category.view',['id'=>$childCategory->id])}}">{{$childCategory->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
               
            @else
                <li class="list-group-item"><a href="{{route('category.view',['id'=>$category->id])}}">{{$category->name}}</a></li>
            @endif
        @endforeach
    </ul>
</aside>