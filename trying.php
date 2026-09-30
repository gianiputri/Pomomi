<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sticky Notes Grid</title>
    <style>
        body {
            background: #f9f9f3;
            font-family: sans-serif;
            padding: 40px;
        }

        .grid-task {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            max-width: 900px;
            margin: 0 auto;
        }

        .note {
            background-color: #ddd;
            padding: 20px;
            border-radius: 2px;
            height: 180px;
            position: relative;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transform: rotate(-2deg);
        }

        .note:before {
            content: "";
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 20px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 2px;
        }

        .note .text {
            font-size: 16px;
            margin-bottom: 30px;
        }

        .note .progress {
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-size: 14px;
        }

        /* Warna beda-beda */
        .gray {
            background-color: #d3d3d3;
        }

        .purple {
            background-color: #b9b5f3;
        }

        .yellow {
            background-color: #fdf3a0;
        }

        .green {
            background-color: #e7f7b7;
        }

        .blue {
            background-color: #bae3f7;
        }

        .pink {
            background-color: #f7b7b7;
        }
    </style>
</head>

<body>

    <div class="grid">
        <div class="note gray">
            <div class="text">Study For Exam</div>
            <div class="progress">2/5</div>
        </div>

        <div class="note purple">
            <div class="text">Buat slide presentasi</div>
            <div class="progress">1/2</div>
        </div>

        <div class="note yellow">
            <div class="text">Makalah Psikologi<br>deadline Jumat, 9 Agustus</div>
            <div class="progress">4/5</div>
        </div>

        <div class="note green">
            <div class="text">Baca bab 3</div>
            <div class="progress">1/2</div>
        </div>

        <div class="note blue">
            <div class="text">Kerjakan soal latihan</div>
            <div class="progress">0/3</div>
        </div>

        <div class="note pink">
            <div class="text">Desain layout<br>(deadline: 23 September)</div>
            <div class="progress">2/3</div>
        </div>
    </div>

</body>

</html>