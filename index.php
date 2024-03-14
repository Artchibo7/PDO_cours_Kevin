<?php

require_once "./repository/StudentRepository.php";

$studentRepository = new StudentRepository();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/styles/global.css" />
    <link rel="stylesheet" href="./assets/styles/exercice.css" />
    <link rel="stylesheet" href="./style.css" />
    <title>EXO PHP - PDO</title>
</head>

<body>
    <main>
        <article class="exercicePlayground">
            <div class="exerciceHeader">
                <div class="exerciceToolbar">
                    <div class="exerciceToolbarLeftboxStorage">
                        <h1>Exercice PHP - PDO</h1>
                    </div>
                    <a href="correction/index.php" class="button">Voir la correction</a>
                </div>
                <div>
                    <p>Exploiter la base de données avec PHP et PDO</p>
                </div>
            </div>
            <ul class="exerciceList">
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 1</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            $students = $studentRepository->getAll();

                            echo ("<ul>");

                            foreach($students as $student){
                                echo (
                                    "<li>"
                                    . $student->getName() . " - " . $student->getSurname() .
                                    "</li>"
                                );
                            }

                            echo ("</ul>");
                            ?>
                            // ========================================================================
                            // Exercice 1 : READ
                            // ========================================================================
                            // Objectif : Afficher une liste des étudiants du campus.
                            ?>
                        </div>
                    </section>
                </li>
                <li>
                    <section class="exercice">
                        <h2 class="exerciceTitle">Exercice 2</h2>
                        <div class="exerciceboxStorage">
                            <?php
                            // ========================================================================
                            // Exercice 2 : CREATE
                            // ========================================================================
                            // Objectif : Créer de nouveaux étudiants.
                            ?>
                            <form action="createStudent.php" method="POST">
                                <div>
                                    <label for="name">Name *</label>
                                    <input required type="text" name="name" id="name">
                                </div>
                                <div>
                                    <label for="surname">Surname *</label>
                                    <input required type="text" name="surname" id="surname">
                                </div>
                                <div>
                                    <label for="birthdate">Birthdate *</label>
                                    <input required type="date" name="birthdate" id="birthdate">
                                </div>
                                <div>
                                    <label for="email">Email *</label>
                                    <input required type="email" name="email" id="email">
                                </div>
                                <div>
                                    <label for="department">Department</label>
                                    <select required name="department" id="department">
                                        <option value="1">École d'Ingénierie</option>
                                        <option value="2">Faculté des Sciences</option>
                                        <option value="3">Faculté des Arts</option>
                                        <option value="4">Faculté de Lettres</option>
                                        <option value="5">Faculté des Sciences de la Vie</option>
                                        <option value="6">Département d'Histoire</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="submit" value="Save">
                                </div>
                            </form>
                        </div>
                    </section>
                </li>
            </ul>
        </article>
    </main>
</body>

</html>