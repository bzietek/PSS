Stronnicowanie: 04.04.2025 <br>

ReaderCtrl.class.php - 
1. zmieniono logikę aby wyszukiwanie i wyświetlanie działo się na jednym widoku
2. dodano logikę stronnicowania ze zmienną $page i $offset, tworząc system w którym jeżeli wyszukanych obiektów jest więcej niż 10, reszta pojawi się na następnej stronie 

Reader.tpl -
1. złączono widoki Reader.tpl i ReaderList.tpl
2. dodano linki do następnej i poprzedniej strony

AJAX: 18.04.2025 <br>
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

