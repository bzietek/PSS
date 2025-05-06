{extends "Main.tpl"}
{block name=main}

    <h2>CMS – Edycja strony głównej</h2>

    <form action="{url action='cms_save'}" method="post">
        <label for="mainText">Treść strony głównej:</label><br>
        <textarea name="mainText" id="mainText" rows="10" style="width: 100%;">{$mainText}</textarea><br><br>
        <button type="submit" style="padding: 8px 16px;">Zapisz</button>
    </form>

{/block}
