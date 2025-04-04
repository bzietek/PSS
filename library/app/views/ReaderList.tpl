{extends "Main.tpl"}

{block name="main"}
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
    <hr>
    <a href="{url action="reader_search"}" class="title">Powrót do wyszukiwania</a>
{/block}