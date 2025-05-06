{extends "Main.tpl"}
{block name="main"}
        <div class="col span_12">
            <h1>Logowanie</h1>
            <form action="login" method="POST">
                <label for="login">Nazwa użytkownika</label>
                <input id="login" name="login" type="text" value="{$form->login}">
                <label for="password">Hasło</label>
                <input id="password" name="password" type="text" value="{$form->password}" style="width: 460px;">
                <div class="row">
                    <div class="col span_12">
                        <a href="{url action="register_show"}" class="title">Rejestracja</a>
                    </div>
                </div>
            <hr>
                <div class="row">
                    <div class="col span_12 " >
                        <button class="btn btn-large" type="submit">Zaloguj</button>
            </form>
                    </div>
                </div>
            <br>
            </div>
    <h2>Strona główna</h2>
    <div class="cms-main-text" style="padding: 10px; border: 1px solid #ccc;">
        {$cmsText|escape:'html'}
    </div>

{/block}