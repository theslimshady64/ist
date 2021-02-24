<h2>Выберите файл для импорта</h2>
<form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="currency">
    <button type="submit">Отправить</button>
</form>
