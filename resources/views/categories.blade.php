<h1>Категории объявлений:</h1>
@foreach($categories as $category)
    <a href="category/{{$category->id}}" style="margin: 10px;"> {{$category->name}} ({{count($category->ad)}})</a><br>
    @endforeach
