{extends "Main.tpl"}
{block name="main"}
    <div class="row padding">
        <!-- Panel logowania -->
        <div class="col span_12">
            <h1>Logowanie</h1>
            <form action="login" method="POST">
                <label for="login">Nazwa użytkownika</label>
                <input id="login" name="login" type="text" value="{$form->login}" />

                <label for="password">Hasło</label>
                <input id="password" name="password" type="text" />

                <div style="margin-top: 10px;">
                    <a href="{url action='register_show'}" class="title">Rejestracja</a>
                </div>

                <div style="margin-top: 10px;">
                    <button class="btn btn-large" type="submit">Zaloguj</button>
                </div>

            </form>

            <!-- Komunikaty -->
            <ul class="errors" style="margin-top: 12px;">
                {foreach $msgs->getMessages() as $msg}
                    {if is_object($msg)}
                        <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">
                            {$msg->text}
                        </li>
                    {/if}
                {/foreach}
            </ul>
        </div>

        <!-- Panel CMS: strona główna -->
        <div class="col span_12">
            <h1>Strona główna</h1>
            <div class="cms-main-text" style="padding: 10px; border: 1px solid #ccc; background-color: #f8f8f8;">
                {$cmsText|escape:'html'|nl2br}
            </div>
            {if $cmsUpdated}
                <p style="font-size: 12px; color: #777; margin-top: 5px;">
                    🔄 Ostatnia aktualizacja: {$cmsUpdated}
                </p>
            {/if}

        </div>
    </div>


{/block}