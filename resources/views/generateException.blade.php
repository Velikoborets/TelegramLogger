<h2>Нажми на кнопку, сгенерируется "исключение"</h2>

<form method="POST" action="{{ route('testException') }}">
    @csrf
    <button type="submit">Сгенерировать  исключение</button>
</form>

<form method="POST" action="{{ route('testUnHandleException') }}">
    @csrf
    <button type="submit">Сгенерировать не обработанное исключение</button>
</form>
