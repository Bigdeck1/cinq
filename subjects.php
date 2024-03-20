    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Subjects Table</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            .error {
                color: red;
            }

            body {
                color: #000000;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color: #f4f4f4;
            }

            table {
                width: 80%;
                border-collapse: collapse;
                margin-top: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                overflow: hidden;
            }

            th,
            td {
                border: 1px solid #ede7e7;
                padding: 15px;
                text-align: left;
                transition: background-color 0.3s, color 0.3s;
            }

            th {
                background-color: #df7a7a;
                color: #faf9fd;
            }

            th,
            td {
                transition: background-color 0.3s, color 0.3s;
            }

            tr:hover {
                background-color: #ffffff;
            }

            .back-button {
                margin-top: 20px;
                padding: 10px 20px;
                background-color: #000000;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .back-button:hover {
                background-color: #555;
            }

            .dropdown-toggle::after {
                display: none;
            }
        </style>
    </head>

    <body>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>1st Semester</th>
                </tr>
            </thead>
        </table>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Core Subjects</th>
                    <th>Lesson File</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Contemporary Philippine Arts From the Region</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select File
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="lesson_files/arts_lesson.pdf" download>Download</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Media and Information Literacy</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select File
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="lesson_files/media_lesson.pdf" download>Download</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Physical Education and Health 3</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select File
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item" href="lesson_files/pe_lesson.pdf" download>Download</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Understanding Culture, Society and Politics</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select File
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <a class="dropdown-item" href="lesson_files/culture_lesson.pdf" download>Download</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Applied Subjects</th>
                    <th>Lesson File</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>English for Academic and Professional Purposes</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select File
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item" href="lesson_files/english_lesson.pdf" download>Download</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Pagsulat sa Filipino sa Piling Larangan (Akademik)</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select File
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                <a class="dropdown-item" href="lesson_files/filipino_lesson.pdf" download>Download</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Specialized Subjects</th>
                    <th>Lesson File</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>General Biology 1</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select File
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                <a class
                                <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton17" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select File
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton17">
                                <a class="dropdown-item" href="lesson_files/work_immersion_lesson.pdf" download>Download</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>2nd Semester</th>
            </tr>
        </thead>
    </table>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Major Subjects</th>
                <th>Lesson File</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>General physics 2</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select File
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item" href="lesson_files/physics_2_lesson.pdf" download>Download</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>General chemistry 2</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select File
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="lesson_files/chemistry_lesson.pdf" download>Download</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>General Biology 2</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select File
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                            <a class="dropdown-item" href="lesson_files/biology_2_lesson.pdf" download>Download</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Research Project</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select File
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                            <a class="dropdown-item" href="lessons/LESSON-2_ENTREP.pptx.pdf" download>Download</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Practical Research 2</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select File
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                            <a class="dropdown-item" href="lesson_files/practical_research_lesson.pdf" download>Download</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Minor Subjects</th>
                <th>Lesson File</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Physical Education and Health 4</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select File
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                            <a class="dropdown-item" href="lesson_files/pe_4_lesson.pdf" download>Download</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>21st literature from the Philippines and to the world</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select File
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                            <a class="dropdown-item" href="lesson_files/literature_lesson.pdf" download>Download</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Entrepreneurship</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select File
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton8">
                            <a class="dropdown-item" href="" download>Download</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Work Immersion</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select File
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton9">
                            <a class="dropdown-item" href="lesson_files/work_immersion_lesson.pdf" download>Download</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>


        <button class="back-button" onclick="backToHome()">Back to Homepage</button>

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            function backToHome() {
                window.location.href = "homepage.php";
            }
        </script>
    </body>

    </html>
