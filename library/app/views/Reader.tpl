{extends "Main.tpl"}
{block name="main"}
    <form action="reader_list" method="POST" style="margin: 20px;">
        <label style="margin-right: 10px;"> </label>
        <input type="hidden" name="onlyAvailableBooks" value="no">
            <input type="checkbox" name="onlyAvailableBooks" value="yes" style="margin-right: 5px; display: inline-block; visibility: visible;">Pokaż tylko dostępne książki

        <label>
            <select name="genre" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="" disabled selected>Wybierz gatunek</option>
                <option value="Fantastyka">Fantastyka</option>
                <option value="Horror">Horror</option>
                <option value="Kryminał">Kryminał</option>
            </select>
        </label>
        <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Szukaj</button>
    </form>
    <hr>
    <a href="{url action="logout"}" class="title">Wyloguj</a>
{/block}