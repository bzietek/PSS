Stronnicowanie: 04.04.2025
ReaderCtrl.class.php - 
1. zmieniono logikę aby wyszukiwanie i wyświetlanie działo się na jednym widoku
2. dodano logikę stronnicowania ze zmienną $page i $offset, tworząc system w którym jeżeli wyszukanych obiektów jest więcej niż 10, reszta pojawi się na następnej stronie 

Reader.tpl -
1. złączono widoki Reader.tpl i ReaderList.tpl
2. dodano linki do następnej i poprzedniej strony
