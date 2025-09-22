<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Antrian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .header {
            border-bottom: 2px solid #000;
            padding: 10px 0;
        }
        .container {
            margin-top: 20px;
        }
        .queue-number {
            font-size: 48px;
            font-weight: bold;
            color: #007BFF;
        }
        .footer {
            margin-top: 20px;
            font-style: italic;
            color: #555;
        }
        /* Gaya untuk tampilan cetak */
        @media print {
            body {
                font-size: 18px;
            }
            .header h2, .header p, .container h2, .container p, .footer {
                font-size: 20px;
            }
            .queue-number {
                font-size: 72px;
            }
            .container, .footer {
                margin: 0;
            }
            .print-only {
                display: block;
            }
        }
        /* Tombol */
        .btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #218838;
        }
        .btn-print {
            background-color: #007bff;
        }
        .btn-print:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Mal Pelayanan Publik Kabupaten Tulang Bawang</h2>
            <p>Jl. Lintas Sumatra, Tiuh Tohou, Kec. Menggala, Kab. Tulang Bawang, Lampung</p>
        </div>  
        <h2>Nomor Antrian</h2>
        <p>Silakan tunggu panggilan nomor antrian Anda.</p>
        <div class="queue-number" id="queue-number">-</div>
        <button class="btn" onclick="getQueueNumber()">Ambil Nomor Antrian</button>
        <button class="btn btn-print" onclick="window.print()">Cetak Nomor Antrian</button>
            <div class="footer">
        ** Terima Kasih **
    </div>
    </div>
    <div class="footer">
        <p>&copy; 2021 Tulang Bawang Kabupaten</p>
    </div>

    <script>
        // Menyimpan huruf antrian (A, B, C, dst.)
        const letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
        let currentLetterIndex = 0;
        let currentNumber = 1;

        function getQueueNumber() {
            // Mengambil huruf dan nomor antrian
            const letter = letters[currentLetterIndex];
            const queueNumber = String(currentNumber).padStart(3, '0');
            const fullQueueNumber = letter + queueNumber;

            // Menampilkan nomor antrian
            document.getElementById("queue-number").innerText = fullQueueNumber;

            // Mengupdate nomor antrian berikutnya
            currentNumber++;
            if (currentNumber > 999) {
                currentNumber = 1;
                currentLetterIndex++;
                if (currentLetterIndex >= letters.length) {
                    currentLetterIndex = 0; // Kembali ke A jika sudah sampai Z
                }
            }
        }
    </script>

    <script>
        // Mengupdate waktu setiap detik
        function updateDateTime() {
            const now = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
            document.getElementById("datetime").innerText = now.toLocaleDateString('id-ID', options);
        }
        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
</body>
</html>
