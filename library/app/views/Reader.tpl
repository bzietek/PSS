{extends "Main.tpl"}
{block name="main"}
    <form action="reader_list" method="POST" style="margin: 20px;">
        <div style="margin-bottom: 15px;">
            <label for="onlyAvailableBooks" style="display: flex; align-items: center; gap: 8px; font-size: 15px; margin: 0;">
                <input type="checkbox" id="onlyAvailableBooks" name="onlyAvailableBooks" value="yes"
                       style="width: 14px; height: 14px; margin: 0;">
                Pokaż tylko dostępne książki
            </label>
        </div>

        <label>
            <select name="genre" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;">
                <option value="" disabled selected>Wybierz gatunek</option>
                <option value="Fantastyka">Fantastyka</option>
                <option value="Horror">Horror</option>
                <option value="Kryminał">Kryminał</option>
            </select>
        </label>

        <button type="submit" style="margin-top: 10px; padding: 5px 10px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Szukaj
        </button>
    </form>

    <hr>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Tytuł</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Autor</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Gatunek</th>
            <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2;">Akcja</th>
        </tr>
        </thead>
        <tbody id="bookTableBody">
        <tr>
            <td colspan="4">Brak wyników</td>
        </tr>
        </tbody>
    </table>

    <div id="paginationControls" style="margin-top: 20px; text-align: center;"></div>

    <script>
        let currentPage = 1;

        function loadBooks(page = 1) {
            const form = document.querySelector('form');
            const formData = new FormData(form);
            formData.append('page', page);

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "reader_search_ajax", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                    const tableBody = document.getElementById("bookTableBody");
                    const pagination = document.getElementById("paginationControls");

                    try {
                        const data = JSON.parse(xhr.responseText);

                        if (data.success) {
                            currentPage = data.currentPage;
                            if (data.books.length > 0) {
                                let html = "";
                                data.books.forEach(function (book) {
                                    html += "<tr>";
                                    html += "<td style='border:1px solid #ddd; padding:8px;'>" + book.title + "</td>";
                                    html += "<td style='border:1px solid #ddd; padding:8px;'>" + book.author + "</td>";
                                    html += "<td style='border:1px solid #ddd; padding:8px;'>" + book.genre + "</td>";
                                    html += "<td style='border:1px solid #ddd; padding:8px;'>";

                                    if (book.availableCopies > 0) {
                                        html += "<button class='borrowBtn' data-id='" + book.IdBook + "' style='padding:5px 10px; background-color:#4CAF50; color:white; border:none; border-radius:4px; cursor:pointer;'>Wypożycz</button>";
                                    } else {
                                        html += "<button type='submit' disabled>Brak</button>";
                                    }

                                    html += "</td></tr>";
                                });
                                tableBody.innerHTML = html;
                            } else {
                                tableBody.innerHTML = "<tr><td colspan='4'>Brak wyników</td></tr>";
                            }

                            let pagHTML = "";
                            if (data.totalPages > 1) {
                                if (currentPage > 1) {
                                    pagHTML += "<button onclick='loadBooks(" + (currentPage - 1) + ")' style='margin-right:10px;'>⬅️ Poprzednia</button>";
                                }
                                pagHTML += "<span>Strona " + currentPage + " z " + data.totalPages + "</span>";
                                if (currentPage < data.totalPages) {
                                    pagHTML += "<button onclick='loadBooks(" + (currentPage + 1) + ")' style='margin-left:10px;'>Następna ➡️</button>";
                                }
                            }
                            pagination.innerHTML = pagHTML;

                        } else {
                            tableBody.innerHTML = "<tr><td colspan='4' style='color:red;'>" + data.message + "</td></tr>";
                            pagination.innerHTML = "";
                        }
                    } catch (err) {
                        tableBody.innerHTML = "<tr><td colspan='4' style='color:red;'>Błąd przetwarzania danych</td></tr>";
                        pagination.innerHTML = "";
                    }
                }
            };
            xhr.send(formData);
        }

        document.querySelector('form').addEventListener('submit', function (e) {
            e.preventDefault();
            currentPage = 1;
            loadBooks(currentPage);
        });

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('borrowBtn')) {
                const bookId = e.target.getAttribute('data-id');
                const xhr = new XMLHttpRequest();
                const formData = new FormData();
                formData.append("IdBook", bookId);

                xhr.open("POST", "borrowBook", true);
                xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert("Książka wypożyczona pomyślnie");
                        loadBooks(currentPage);
                    }
                };
                xhr.send(formData);
            }
        });
    </script>

    <a href="{url action="logout"}" class="title">Wyloguj</a>

    <style>
        input[type="checkbox"] {
            appearance: auto !important;
            visibility: visible !important;
            display: inline-block !important;
        }
    </style>
{/block}
