{extends "Main.tpl"}

{block name="main"}
    <div class="col span_12">
    <h1>Rejestracja</h1>
    <form action="register" method="POST">
        <label for="login">Login użytkownika</label>
        <input id="login" name="login" type="text" value="{$form->login}">
        <label for="firstName">Imię</label>
        <input id="firstName" name="firstName" type="text" value="{$form->firstName}">
        <label for="lastName">Nazwisko</label>
        <input id="lastName" name="lastName" type="text" value="{$form->lastName}">
        <label for="password">Hasło</label>
        <input id="password" name="password" type="text" value="{$form->password}" style="width: 460px;">
        <label for="repeatedPassword">Powtórz hasło</label>
        <input id="repeatedPassword" name="repeatedPassword" type="text" value="{$form->repeatedPassword}" style="width: 460px";>
        <a href="{url action="login_show"}" class="title">Powrót do logowania</a>
        <hr>
        <button class="btn btn-large" type="submit">Zarejestruj</button>
    </form>
        <br>
    </div>
{/block}