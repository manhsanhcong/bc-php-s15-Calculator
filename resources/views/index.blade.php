<!DOCTYPE HTML>
<html>
<body>
<form method="post" action="{{ route('calculator') }}">
    @csrf
    <div>
        <h2>Calculator</h2>
        <div>
            <input type="text" size="15" name="number1" placeholder="number1"/>
        </div>
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select><br/>
        <input type="text" size="15" name="number2" placeholder="number2"><br/>
        <input type="submit" name="result" value="Result">
    </div>
</form>
<p>Result Division : {{ isset($result) ? $result : ' ' }}</p>
</body>
</html>