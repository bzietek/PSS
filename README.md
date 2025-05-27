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
<hr>
<h1>CMS konfiguracja: 06.05.2025</h1> <br>

1. ustawiono podstawowe parametry CMS, takie jak adres strony, język i strefa czasowa
2. skonfigurowano moduły potrzebne do działania strony, w tym News, Gallery i Menu
3. przygotowano kontenery i globalne bloki treści (a_part_top, a_part_bottom) do spójnego wyglądu
4. przypisano odpowiednie szablony do stron i modułów, zapewniając poprawną integrację
<hr>
<h1>CMS Szablon i wygląd: 16.05.2025</h1> <br>

1. przygotowano szablony a_page_top i a_page_bottom z nagłówkiem, stopką i stylem w kolorystyce niebieskiej
2. zbudowano responsywne, poziome menu nawigacyjne z podmenu, z użyciem Smarty i CSS
3. dostosowano szablony modułu News (a_news_summary, a_news_detail) do spójnego wyglądu i czytelności
4. wykorzystano globalne bloki treści do ponownego użycia kodu nagłówka i stopki w różnych miejscach

<h1>CMS Galeria: 27.05.2025</h1> <br>

1. dodano szablony i konfigurację modułu Galeria do wyświetlania zdjęć w estetyczny sposób
2. zoptymalizowano pod kątem responsywności i płynnego działania na urządzeniach mobilnych
3. zintegrowano z szablonem strony, tak aby galeria była dostępna z menu i w treści strony
4. przygotowano prosty system zarządzania obrazami w panelu administracyjnym

