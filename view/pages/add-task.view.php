<?php include "view/_partials/head.view.php";?>
    <h1>Nauja užduotis</h1>
    <form method="post">
        <input type="text" name="subject" placeholder="Uzduoties pavadinimas">
        <select name="priority">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <label>Pasirinkite data</label>
        <input type="date" name="dueDate">
        <button type="submit" name="save">Saugoti</button>
    </form>
<?php include "view/_partials/end.view.php";?>