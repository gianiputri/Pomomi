<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <link href="asset/main.css" rel="stylesheet">

    <title>Pomomi - pomodoro timer</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">Pomomi</div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Task</a></li>
            <li><a href="#">Tracker</a></li>
            <div class="profile-circle"></div>
        </ul>


    </nav>

    <div class="container">
        <div class="landing-page">

            <div class="note">
                <h1>Let’s get a focus </h1>
                <p>step by step, gaol by goal, i’m bulilding the life i want</p>
            </div>
        </div>

        <div class="home_container">
            <div class="timer">
                <div class="count">
                    25:00
                </div>


                <div class="jenis-timer">
                    <button>Focus</button>
                    <button>Short break</button>
                    <button>Long break</button>
                </div>

                <div class="start-btn">
                    <button>start</button>
                </div>

                <div class="task-on">
                    <div class="part-task">
                        1/9
                    </div>
                    <div class="task">
                        mencuci
                    </div>
                </div>
            </div>

            <br>

            <div class="task-music">
                <div class="task-detail">
                    <img src="asset\pink.png" alt="">
                </div>


                <div class="music-player">
                    <div class="title">Lofi - morning rainy</div>

                    <div class="progress-container">
                        <div class="progress" id="progress"></div>
                    </div>

                    <div class="controls">
                        <button class="btn small">&#9198;</button> <!-- prev -->
                        <button class="btn">&#9654;</button> <!-- play -->
                        <button class="btn small">&#9197;</button> <!-- next -->
                    </div>
                </div>
            </div>
        </div>

        <div class="task-overview">
            <h1>
                TASK/
            </h1>

            <p>
                Complate
            </p>

            <div class="add-task">
                <p><u>+Add Task</u></p>
            </div>

            <div class="grid-task">
                <div class="note gray">
                    <div class="text">Study For Exam</div>
                    <div class="yapq">2/5</div>
                </div>

                <div class="note purple">
                    <div class="text">Buat slide presentasi</div>
                    <div class="yapq">1/2</div>
                </div>

                <div class="note yellow">
                    <div class="text">Makalah Psikologi<br>deadline Jumat, 9 Agustus</div>
                    <div class="yapq">4/5</div>
                </div>

                <div class="note green">
                    <div class="text">Baca bab 3</div>
                    <div class="yapq">1/2</div>
                </div>

                <div class="note blue">
                    <div class="text">Kerjakan soal latihan</div>
                    <div class="yapq">0/3</div>
                </div>

                <div class="note pink">
                    <div class="text">Desain layout<br>(deadline: 23 September)</div>
                    <div class="yapq">2/3</div>
                </div>
            </div>
            <br>
            <div class="remind-task">
                <div class="part-taks-remind">
                    6/7
                    <br>
                    your remining task
                </div>

            </div>
        </div>

        <div class="tracker">
            <h1>Tracker</h1>

            <div class="streak">
                1 Api
            </div>
            <div class="diagram-btng">
                YUYUU
            </div>
        </div>

    </div>
</body>

</html>