{extends "Main.tpl"}
{block name="main"}
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Imie</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Nazwisko</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Rola</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Nowa rola</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Akcja</th>
        </tr>
        </thead>
        <tbody>
        {foreach $users as $user}
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">{$user.firstName}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{$user.lastName}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{$user.roleName}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">
                    <form action="updateRole" method="POST">
                        <input type="hidden" name="IdUser" value="{$user.IdUser}">
                        <select name="newRole" style="padding: 5px; border: 1px solid #ddd; border-radius: 4px;">
                            <option value="czytelnik">czytelnik</option>
                            <option value="bibliotekarz">bibliotekarz</option>
                            <option value="admin">admin</option>
                        </select>
                </td>
                <td style="border: 1px solid #ddd; padding: 8px;">
                    <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Ustaw</button>
                </td>
                </form>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <hr>
    <div class="admin-links">
        <a href="{url action='cms_panel'}" style="padding: 10px; display: inline-block; background-color: #eee; border-radius: 4px;">
            🛠️ Edytuj treść strony głównej (CMS)
        </a>
    </div>

    <a href="{url action="logout"}" class="title">Wyloguj</a>
{/block}
