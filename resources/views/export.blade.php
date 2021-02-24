<h2>Выберите файл для экспорта</h2>
<form action="{{ route('export') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="allCurrency" value="{{ $currency }}">
    <input type="file" name="currency" required>
    <button type="submit">Отправить</button>
</form>
