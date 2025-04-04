{extends "Main.tpl"}
{block name="main"}
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Tytuł</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Autor</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Imie</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Nazwisko</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Szkody</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Akcja</th>
        </tr>
        </thead>
        <tbody>
        {foreach $borrows as $borrow}
            {if $borrow.returnDate == NULL}
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">{$borrow.title}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{$borrow.author}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{$borrow.firstName}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{$borrow.lastName}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">
                    <form action="reclaim" method="POST">
                        <input type="hidden" name="IdBorrow" value="{$borrow.IdBorrow}">
                        <input type="text" name="damageDescription" value="" style="padding: 5px; border: 1px solid #ddd; border-radius: 4px;">
                </td>
                <td style="border: 1px solid #ddd; padding: 8px;">
                    <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Zaktualizuj</button>
                    </form>
                </td>
            </tr>
            {/if}
        {/foreach}
        </tbody>
    </table>
    <hr>
    <a href="{url action="logout"}" class="title">Wyloguj</a>
{/block}
