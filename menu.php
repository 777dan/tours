<form method="post" action="countries.php" name="myform" oninput="price.value=parseInt(range.value)">
    <div>
        <input name="range" type="range" id="range" min="50" max="1000" step="50" value="100" orient="vertical">
        <output id="outputRange" name="price" for="range"></output>
        <label id="price" for="price"> $</label>
    </div>
    <select class="form-select" name="formCountry">
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="France">France</option>
        <option value="Mexico">Mexico</option>
        <option value="Japan">Japan</option>
    </select>
    <select class="stars-select" name="formStars">
        <option value="1_star">1 &#9733;</option>
        <option value="2_stars">2 &#9733;</option>
        <option value="3_stars">3 &#9733;</option>
        <option value="4_stars">4 &#9733;</option>
        <option value="5_stars">5 &#9733;</option>
    </select>
    <select class="transport-select" name="formTransport">
        <option value="airplane">Airplane</option>
        <option value="bus">Bus</option>
        <option value="train">Train</option>
    </select>
    <button type="submit" name=" formSubmit">ОК</button>
</form>