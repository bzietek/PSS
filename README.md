<h1>Stronnicowanie: 04.04.2025</h1> <br>

ReaderCtrl.class.php - 
1. zmieniono logikę aby wyszukiwanie i wyświetlanie działo się na jednym widoku
2. dodano logikę stronnicowania ze zmienną $page i $offset, tworząc system w którym jeżeli wyszukanych obiektów jest więcej niż 10, reszta pojawi się na następnej stronie 

Reader.tpl -
1. złączono widoki Reader.tpl i ReaderList.tpl
2. dodano linki do następnej i poprzedniej strony
<hr>
<h1>AJAX: 18.04.2025</h1> <br>

ReaderCtrl.class.php -
1. dodano nową metodę action_reader_search_ajax, obsługującą żądania AJAX do wyszukiwania książek
2. dane zwracane są w formacie JSON, zawierającym książki, numer strony i liczbę wszystkich stron
3. zmodyfikowano action_borrowBook, aby rozpoznawała żądania AJAX (nagłówek X-Requested-With)
4. jeżeli żądanie pochodzi z AJAX-a – książka zostaje wypożyczona, a odpowiedź to prosty komunikat tekstowy
5. przy klasycznym żądaniu nadal występuje przekierowanie z komunikatem

Reader.tpl - 
1. dodano obsługę wysyłania formularza AJAX-em z użyciem XMLHttpRequest
2. książki ładowane są bez przeładowania strony
3. po kliknięciu „Szukaj” wyświetlana jest tylko jedna strona wyników – z przyciskami do kolejnych
4. dodano dynamiczne stronnicowanie AJAX (poprzednia, nastepna)
5. przycisk „Wypożycz” też jest obsługiwany AJAX-owo – po wypożyczeniu lista książek odświeża się bez przeładowania

<h1> CMS – Edycja treści strony głównej: 06.05.2025</h1>

<h3>CmsCtrl.class.php</h3>
<ol>
  <li>Dodano kontroler <code>CmsCtrl</code> z metodami <code>action_cms_panel</code> i <code>action_cms_save</code></li>
  <li><code>action_cms_panel</code> pobiera treść z bazy (sekcja <code>main_text</code>) i przekazuje do widoku</li>
  <li><code>action_cms_save</code> sprawdza, czy wpis <code>main_text</code> już istnieje:
    <ul>
      <li>jeśli tak – wykonuje <code>UPDATE</code></li>
      <li>jeśli nie – wykonuje <code>INSERT</code></li>
    </ul>
  </li>
  <li>Po zapisaniu treści następuje przekierowanie z komunikatem „Treść została zapisana”</li>
</ol>

<h3>cms.tpl</h3>
<ol>
  <li>Dodano formularz z <code>&lt;textarea&gt;</code> do edycji treści strony głównej</li>
  <li>Po kliknięciu „Zapisz” treść trafia do kontrolera i zapisywana jest do bazy</li>
  <li>Formularz wyświetlany tylko administratorowi po przejściu z panelu <code>admin_show</code></li>
</ol>

<h3>LoginCtrl.class.php + Login.tpl</h3>
<ol>
  <li>Do <code>generateView()</code> dodano pobieranie treści <code>main_text</code> z bazy</li>
  <li>Treść przekazywana do zmiennej <code>{$cmsText}</code></li>
  <li>W <code>Login.tpl</code> treść wyświetlana w sekcji „Strona główna”</li>
</ol>

<p><strong>📌 Treść widoczna od razu po wejściu na stronę (dla wszystkich użytkowników)</strong><br>
<strong>📌 Edycja dostępna wyłącznie dla administratora przez link w <code>admin_show</code></strong></p>

<h2>CMS – Szablon i wygląd: 16.05.2025</h2>

<h3>CmsCtrl.class.php</h3>
<ul>
  <li>Dodano zapisywanie daty ostatniej aktualizacji (pole <code>updated_at</code>) w bazie przy zapisie treści</li>
  <li>Dodano nową tabelę <code>cms_history</code> z kolumnami <code>id</code>, <code>content</code>, <code>created_at</code> do zapisywania historii edycji treści</li>
  <li>W metodzie <code>action_cms_save</code> dodano zapis poprzedniej treści do historii po każdej zmianie</li>
  <li>W metodzie <code>action_cms_panel</code> pobierana jest data ostatniej aktualizacji i przekazywana do widoku</li>
</ul>

<h3>cms.tpl</h3>
<ul>
  <li>Dodano wyświetlanie daty ostatniej aktualizacji pod formularzem</li>
  <li>Dodano przycisk „Wyczyść”, który pozwala wyczyścić treść strony</li>
  <li>Dodano przycisk „Wróć do panelu admina”, który odsyła do <code>admin_show</code></li>
  <li>Ulepszono styl formularza – padding, szerokość, marginesy</li>
  <li>Komunikaty o sukcesie wyświetlane nad formularzem</li>
</ul>

<h3>LoginCtrl.class.php + Login.tpl</h3>
<ul>
  <li>W <code>generateView()</code> treść <code>main_text</code> jest przekazywana jako <code>cmsText</code></li>
  <li>W widoku <code>Login.tpl</code> dodano filtr <code>|nl2br</code> przy wyświetlaniu treści, co poprawia układ i widoczność akapitów</li>
  <li>Ogłoszenie wygląda estetycznie, a administrator może je zmieniać z poziomu CMS</li>
</ul>

<p>📌 Treść formatuje się automatycznie – nowe linie są zamieniane na <code>&lt;br&gt;</code><br>
📌 Edycje są zapisywane w bazie w historii (CMS działa jak prosty edytor ogłoszeń)<br>
📌 Użytkownik widzi datę ostatniej aktualizacji ogłoszenia na stronie głównej</p>

