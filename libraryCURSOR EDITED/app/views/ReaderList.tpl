{extends "Main.tpl"}

{block name="main"}
    <form action="{url action='reader_list'}" method="GET" style="margin: 20px;">
        <div style="margin-bottom: 15px;">
            <input type="text" name="searchTerm" value="{$form->searchTerm}" placeholder="Szukaj po tytule lub autorze..." style="padding: 5px; border: 1px solid #ccc; border-radius: 4px; width: 300px;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="margin-right: 10px;">
                <input type="checkbox" name="onlyAvailableBooks" value="yes" {if $form->onlyAvailableBooks == "yes"}checked{/if} style="margin-right: 5px;">Pokaż tylko dostępne książki
            </label>
        </div>

        <div style="margin-bottom: 15px;">
            <label>
                <select name="genre" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="" {if !$form->genre}selected{/if}>Wszystkie gatunki</option>
                    <option value="Fantastyka" {if $form->genre == "Fantastyka"}selected{/if}>Fantastyka</option>
                    <option value="Horror" {if $form->genre == "Horror"}selected{/if}>Horror</option>
                    <option value="Kryminał" {if $form->genre == "Kryminał"}selected{/if}>Kryminał</option>
                </select>
            </label>
        </div>

        <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Szukaj</button>
    </form>

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
                <form action="{url action='borrowBook'}" method="post">
                    <td style="border: 1px solid #ddd; padding: 8px;">
                      <input type="hidden" name="IdBook" value="{$book.IdBook}">
                      <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Wypożycz</button>
                    </td>
                </form>
                {else}
                <td style="border: 1px solid #ddd; padding: 8px;">
                    <button disabled style="padding: 5px 10px; background-color: #ccc; color: white; border: none; border-radius: 4px;">Brak</button>
                </td>
                {/if}
            </tr>
        {/foreach}
    {else}
        <tr>
            <td colspan="4" style="text-align: center; padding: 20px;">Brak wyników</td>
        </tr>
    {/if}
    </tbody>
    </table>

    {if $totalPages > 1}
    <div style="margin-top: 20px; text-align: center;">
        {if $currentPage > 1}
            <a href="{url action='reader_list' page=$currentPage-1 searchTerm=$form->searchTerm genre=$form->genre onlyAvailableBooks=$form->onlyAvailableBooks}" style="margin-right: 10px;">&laquo; Poprzednia</a>
        {/if}
        
        {for $i=1 to $totalPages}
            {if $i == $currentPage}
                <span style="margin: 0 5px; font-weight: bold;">{$i}</span>
            {else}
                <a href="{url action='reader_list' page=$i searchTerm=$form->searchTerm genre=$form->genre onlyAvailableBooks=$form->onlyAvailableBooks}" style="margin: 0 5px;">{$i}</a>
            {/if}
        {/for}
        
        {if $currentPage < $totalPages}
            <a href="{url action='reader_list' page=$currentPage+1 searchTerm=$form->searchTerm genre=$form->genre onlyAvailableBooks=$form->onlyAvailableBooks}" style="margin-left: 10px;">Następna &raquo;</a>
        {/if}
    </div>
    {/if}

    <hr>
    <div style="margin-top: 20px;">
        <a href="{url action='logout'}" class="button" style="padding: 5px 10px; background-color: #f44336; color: white; text-decoration: none; border-radius: 4px;">Wyloguj</a>
    </div>
{/block}