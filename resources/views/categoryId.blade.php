<h1>Объявления категории: {{$category->name}}</h1>
<a href="..">Категории</a>
@foreach($ads as $ad)
    <table border="1px" style="margin: 15px;width:500px">
        <tr>
            <td>№</td>
            <td>{{$ad->id}}</td>
        </tr>
        <tr>
            <td>Название</td>
            <td>{{$ad->title}}</td>
        </tr>
        <tr>
            <td>Цена</td>
            <td>{{$ad->price}} руб.</td>
        </tr>
        <tr>
            <td>Описание</td>
            <td>{{$ad->description}}</td>
        </tr>
        <tr>
            <td>Дата добавления</td>
            <td>{{$ad->created_at}}</td>
        </tr>

    </table><br>
@endforeach
<h2>Добавить новое объявление<br>В эту категорию</h2>


<form method="post">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="Заголовок"><br><br>
    <input type="text" name="price" placeholder="Цена"><br><br>
    <textarea name="description" placeholder="Описание"></textarea><br><br>
    <input type="submit">
</form>
