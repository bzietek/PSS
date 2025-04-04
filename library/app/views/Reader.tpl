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
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Tytuł</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Autor</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Gatunek</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Akcja</th>
        </tr>
        </thead>
        <tbody>
        {if $books|@count > 0}
            {foreach $books as $book}
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">{$book.title}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{$book.author}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{$book.genreName}</td>

                    {if $book.availableCopies > 0}
                        <form action="borrowBook" method="post">
                            <td style="border: 1px solid #ddd; padding: 8px;">
                                <input type="hidden" name="IdBook" value="{$book.IdBook}">
                                <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Wypożycz</button>
                            </td>
                        </form>
                    {else}
                        <td style="border: 1px solid #ddd; padding: 8px;">
                            <button type="submit" disabled">Brak</button>
                        </td>
                    {/if}
                </tr>
            {/foreach}
        {else}
            <tr>
                <td colspan="4">Brak wyników</td>
            </tr>
        {/if}
        </tbody>
    </table>
    {if $books|@count > 0}
        <div style="text-align: center; margin-top: 20px;">
            {if $currentPage > 1}
                <a href="reader_list?page={$currentPage-1}&genre={$form->genre}&onlyAvailableBooks={$form->onlyAvailableBooks}" style="margin-right: 10px;">⬅️ Poprzednia</a>
            {/if}

            {for $i=1 to $totalPages}
                {if $i == $currentPage}
                    <strong>{$i}</strong>
                {else}
                    <a href="reader_list?page={$i}&genre={$form->genre}&onlyAvailableBooks={$form->onlyAvailableBooks}">{$i}</a>
                {/if}
            {/for}

            {if $currentPage < $totalPages}
                <a href="reader_list?page={$currentPage+1}&genre={$form->genre}&onlyAvailableBooks={$form->onlyAvailableBooks}" style="margin-left: 10px;">Następna ➡️</a>
            {/if}
        </div>
    {/if}
    <a href="{url action="logout"}" class="title">Wyloguj</a>
{/block}