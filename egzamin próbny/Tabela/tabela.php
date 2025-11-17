<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Tabela produktów</title>
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 40px;
        }

        h1 {
            text-align: center;
            color: #00bcd4;
            margin-bottom: 30px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #1e1e1e;
            box-shadow: 0 0 20px rgba(0, 188, 212, 0.2);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px 20px;
            text-align: center;
        }

        th {
            background-color: #00bcd4;
            color: #121212;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tr:nth-child(even) {
            background-color: #2a2a2a;
        }

        tr:hover {
            background-color: #333333;
            transition: 0.3s;
        }

        td {
            border-bottom: 1px solid #333;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>

    <h1>📦 Lista produktów</h1>

    <?php
        // Tablica z danymi (możesz łatwo zmienić)
        $produkty = [
            ["Laptop", "Elektronika", 3599.99, "Dostępny"],
            ["Mysz bezprzewodowa", "Akcesoria", 89.99, "Dostępny"],
            ["Monitor 27\"", "Elektronika", 1299.00, "Niedostępny"],
            ["Klawiatura mechaniczna", "Akcesoria", 349.50, "Dostępny"],
            ["Słuchawki Bluetooth", "Audio", 249.00, "Dostępny"]
        ];

        echo "<table>";
        echo "<tr><th>Nazwa</th><th>Kategoria</th><th>Cena (zł)</th><th>Status</th></tr>";

        foreach ($produkty as $produkt) {
            echo "<tr>";
            echo "<td>{$produkt[0]}</td>";
            echo "<td>{$produkt[1]}</td>";
            echo "<td>" . number_format($produkt[2], 2, ',', ' ') . "</td>";
            echo "<td>{$produkt[3]}</td>";
            echo "</tr>";
        }

        echo "</table>";
    ?>

    <div class="footer">
        &copy; <?= date("Y") ?> Sklep Online — Wszystkie prawa zastrzeżone
    </div>

</body>
</htm