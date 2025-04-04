{extends "Main.tpl"}
{block name="main"}
    <form action="reader_list" method="POST" style="margin: 20px;">
        <div style="margin-bottom: 15px;">
            <input type="text" name="searchTerm" value="{$form->searchTerm}" placeholder="Szukaj po tytule lub autorze..." style="padding: 5px; border: 1px solid #ccc; border-radius: 4px; width: 300px;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="margin-right: 10px;">
                <input type="hidden" name="onlyAvailableBooks" value="no">
                <input type="checkbox" name="onlyAvailableBooks" value="yes" {if $form->onlyAvailableBooks == "yes"}checked{/if} style="margin-right: 5px;">Pokaż tylko dostępne książki
            </label>
        </div>

        <div style="margin-bottom: 15px;">
            <label>
                <select name="genre" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="" disabled {if !$form->genre}selected{/if}>Wybierz gatunek</option>
                    <option value="Fantastyka" {if $form->genre == "Fantastyka"}selected{/if}>Fantastyka</option>
                    <option value="Horror" {if $form->genre == "Horror"}selected{/if}>Horror</option>
                    <option value="Kryminał" {if $form->genre == "Kryminał"}selected{/if}>Kryminał</option>
                </select>
            </label>
        </div>

        <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Szukaj</button>
    </form>
    <hr>
    <a href="{url action="logout"}" class="title">Wyloguj</a>
{/block}