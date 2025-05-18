{extends file="Main.tpl"}
{block name="main"}

    <div style="max-width: 800px; margin: 0 auto;">
        <h2>🛠️ CMS – Edycja strony głównej</h2>

        {if $updatedAt}
            <p style="font-size: 14px; color: #777;">Ostatnia aktualizacja: {$updatedAt}</p>
        {/if}

        <form method="post" action="{url action='cms_save'}">
            <label for="mainText">Treść strony głównej:</label><br>
            <textarea id="mainText" name="mainText" rows="10" style="width: 100%; padding: 10px; font-family: inherit;">{$mainText}</textarea>

            <div style="margin-top: 10px;">
                <button type="submit" class="btn">💾 Zapisz</button>
                <button type="submit" name="clear" value="1" class="btn" style="background-color: #c0392b;">🗑️ Wyczyść</button>
                <a href="{url action='admin_show'}" class="btn" style="background-color: #7f8c8d;">🔙 Powrót</a>
            </div>
        </form>
    </div>

{/block}
