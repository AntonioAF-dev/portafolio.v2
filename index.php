<?php
define('ROOT_PATH', __DIR__ . '/'); // Define ROOT_PATH como la ruta del directorio actual
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://db.onlinewebfonts.com/c/0ee67558ce9f1e5900b0579062ed114a?family=Symphony+Script+-+personal+use" rel="stylesheet">
    <link rel="shortcut icon" href="https://www.urbasanz.com/wp-content/uploads/2024/02/Gestion-Inmobiliaria.webp" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Portafolio</title>
</head>

<body>
    <div class="container">
        <!-- Incluir navbar vertical fijado-->
        <?php
        $navbarV_path = ROOT_PATH . 'components/navbarV.php';
        if (file_exists($navbarV_path)) {
            include($navbarV_path);
        } else {
            echo "No se encontró el archivo navbarV.php en la ruta: " . $navbarV_path;
        }
        ?>
        <div class="main-content">
            <!-- Incluir el header -->
            <?php
            $header_path = ROOT_PATH . 'includes/header.php';
            if (file_exists($header_path)) {
                include($header_path);
            } else {
                echo "No se encontró el archivo header.php en la ruta: " . $header_path;
            }
            ?>

            <!-- Incluir navbar Horizontal fijado al tocar borde-->
            <?php
            $navbarH_path = ROOT_PATH . 'components/navbarH.php';
            if (file_exists($navbarH_path)) {
                include($navbarH_path);
            } else {
                echo "No se encontró el archivo navbarH.php en la ruta: " . $navbarH_path;
            }
            ?>
            <main>
                <!--main perfil-->
                <div class="container1">
                    <div class="information" id="home">
                        <h2>⚡🙋‍♂️ Sobre Mí</h2>
                        <ul>
                            <li>🔧 Actualmente trabajando en proyectos con PHP.</li>
                            <li>💡 Estoy interesado en aprender sobre la Inteligencia Artificial.</li>
                            <li>📖 Estoy estudiando sobre Fundamentos del desarrollo móvil.</li>
                            <li>❄️ Busco colaborar en Proyectos públicos.</li>
                            <li>📫 Cómo contactarme: <a href="mailto:antonioafkael@gmail.com">antonioafkael@gmail.com</a></li>
                        </ul>
                        <hr>
                        <table width="100%">
                            <tr>
                                <td width="60%">
                                    <h3>🛠️ Habilidades</h3>
                                    <h4>Lenguajes</h4>
                                    <p>
                                        <img src="https://img.shields.io/badge/-C++-05122A?style=flat&logo=C%2B%2B&logoColor=00599C" alt="C++" />&nbsp;
                                        <img src="https://img.shields.io/badge/Java-%23150458.svg?style=flat&logo=java&logoColor=orange" alt="Java" />&nbsp;
                                        <img src="https://img.shields.io/badge/-Python-05122A?style=flat&logo=python" alt="Python" />&nbsp;
                                        <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white" alt="PHP" />&nbsp;
                                        <img src="https://img.shields.io/badge/Shell_Script-121011?style=flat&logo=gnu-bash&logoColor=white" alt="Shell Script" />
                                    </p>
                                    <h4>Desarrollo</h4>
                                    <p>
                                        <img src="https://img.shields.io/badge/Django-092E20?style=flat&logo=django&logoColor=white" alt="Django" />&nbsp;
                                        <img src="https://img.shields.io/badge/Flask-000000?style=flat&logo=flask&logoColor=white" alt="Flask" />&nbsp;
                                        <img src="https://img.shields.io/badge/React-20232A?style=flat&logo=react&logoColor=61DAFB" alt="Reactjs" />&nbsp;
                                        <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black" alt="JavaScript" />&nbsp;
                                        <img src="https://img.shields.io/badge/jQuery-0769AD?style=flat&logo=jquery&logoColor=white" alt="Jquery" />&nbsp;
                                        <img src="https://img.shields.io/badge/Apache-D22128?style=flat&logo=Apache&logoColor=white" alt="Apache" />
                                    </p>
                                    <h4>Bases de Datos</h4>
                                    <p>
                                        <img src="https://img.shields.io/badge/MySQL-00000F?style=flat&logo=mysql&logoColor=white" alt="MySQL" />&nbsp;
                                        <img src="https://img.shields.io/badge/-SQlite-05122A?style=flat&logo=sqlite&logoColor=A8B9CC" alt="SQlite" />&nbsp;
                                        <img src="https://img.shields.io/badge/PostgreSQL-316192?style=flat&logo=postgresql&logoColor=green" alt="PostgreSQL" />
                                    </p>
                                    <h4>Herramientas y Tecnologías</h4>
                                    <p>
                                        <img src="https://img.shields.io/badge/Linux-05122A?style=flat&logo=linux&logoColor=white" alt="Linux" />&nbsp;
                                        <img src="https://img.shields.io/badge/-Git-05122A?style=flat&logo=git" alt="Git" />&nbsp;
                                        <img src="https://img.shields.io/badge/npm-CB3837?style=flat&logo=npm&logoColor=white" alt="NPM" />&nbsp;
                                        <img src="https://img.shields.io/badge/VIM-%2311AB00.svg?&style=flat&logo=vim&logoColor=white" alt="VIM" />&nbsp;
                                        <img src="https://img.shields.io/badge/Amazon_AWS-232F3E?style=flat&logo=amazon-aws&logoColor=white" alt="AWS" />&nbsp;
                                        <img src="https://img.shields.io/badge/fastapi-109989?style=flat&logo=FASTAPI&logoColor=white" alt="Fast API" />
                                    </p>
                                    <h4>Analítica de Datos</h4>
                                    <p>
                                        <img src="https://img.shields.io/badge/Numpy-777BB4?style=flat&logo=numpy&logoColor=white" alt="Numpy" />&nbsp;
                                        <img src="https://img.shields.io/badge/Pandas-2C2D72?style=flat&logo=pandas&logoColor=white" alt="Pandas" />&nbsp;
                                        <img src="https://img.shields.io/badge/Tableau-E97627?style=flat&logo=Tableau&logoColor=white" alt="Tableau" />&nbsp;
                                        <img src="https://img.shields.io/badge/PowerBI-F2C811?style=flat&logo=Power%20BI&logoColor=white" alt="Power BI" />
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>


                    <!--Card-->
                    <div class="card">
                        <img src="assets/img/perfil-portada.webp" alt="Card Image" class="card__image" />
                        <div class="card__content">
                            <p class="card__title">Marco Antonio Acosta Falcón</p>
                            <p class="card__description">
                                Marco Antonio Acosta Falcón es un ingeniero de sistemas e informática
                                con una sólida trayectoria en el desarrollo web. Reconocido por su
                                pasión por la tecnología y el desarrollo de soluciones innovadoras,
                                Marco ha demostrado su habilidad en el diseño y la implementación de
                                proyectos web de alta calidad. Su compromiso con la actualización
                                constante en nuevas tecnologías le ha permitido mantenerse a la vanguardia
                                en un campo en constante evolución.<br /><br />
                                A lo largo de su carrera, Marco ha trabajado en una variedad de proyectos,
                                desde el desarrollo de sitios web formales hasta la implementación de
                                funcionalidades avanzadas como el modo claro/oscuro. Su enfoque meticuloso
                                y su capacidad para resolver problemas complejos han sido clave en el
                                éxito de estos proyectos.<br /><br />
                                En su tiempo libre, Marco se dedica a capacitarse y mantenerse actualizado
                                sobre las últimas tendencias tecnológicas. Su dedicación a la formación
                                continua y su entusiasmo por el aprendizaje lo convierten en un profesional
                                valioso en el ámbito del desarrollo web, y su trabajo sigue inspirando a
                                colegas y nuevos desarrolladores.<br /><br /><br />
                            </p>
                        </div>
                    </div>
                </div>
                <!--seccion de proyectos-->
                <div class="projects">
                    <h2 class="tittle-projects">Ver mis proyectos recientes</h2>
                </div>

                <div class="container2">
                    <div class="project">
                        <img src="assets/img/html.webp" alt="HTML">
                        <div class="description-pj">HTML</div>
                    </div>
                    <div class="project">
                        <img src="assets/img/css.webp" alt="CSS">
                        <div class="description-pj">CSS</div>
                    </div>
                    <div class="project">
                        <img src="assets/img/desing.webp" alt="Design">
                        <div class="description-pj">Design</div>
                    </div>
                    <div class="project">
                        <img src="assets/img/ruby.webp" alt="Ruby">
                        <div class="description-pj">Ruby</div>
                    </div>
                    <div class="project">
                        <img src="assets/img/php.webp" alt="PHP">
                        <div class="description-pj">PHP</div>
                    </div>
                    <div class="project">
                        <img src="assets/img/github.webp" alt="GitHub">
                        <div class="description-pj">GitHub</div>
                    </div>
                </div>

                <div class="projects">
                    <h2 class="tittle-projects">Recuerdos Shakira 😍</h2>
                </div>

                <div class="galeriaR">
                    <div class="img-box">
                        <span style="--i: 1"><img src="assets/img/imagen1.webp" alt="" /></span>
                        <span style="--i: 2"><img src="assets/img/imagen10.webp" alt="" /></span>
                        <span style="--i: 3"><img src="assets/img/imagen3.webp" alt="" /></span>
                        <span style="--i: 4"><img src="assets/img/imagen4.webp" alt="" /></span>
                        <span style="--i: 5"><img src="assets/img/imagen5.webp" alt="" /></span>
                        <span style="--i: 6"><img src="assets/img/imagen6.webp" alt="" /></span>
                        <span style="--i: 7"><img src="assets/img/imagen7.webp" alt="" /></span>
                        <span style="--i: 8"><img src="assets/img/imagen8.webp" alt="" /></span>
                    </div>
                </div>

                <div class="projects">
                    <h2 class="tittle-projects">Visitanos en:</h2>
                </div>
                <div class="map-direction">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.6812684147653!2d-76.24616902403855!3d-9.96045430657385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a7c34f072a1151%3A0x59eea0c4448effea!2sServAcosta!5e0!3m2!1ses-419!2spe!4v1722884032933!5m2!1ses-419!2spe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </main>
            <?php include 'includes/footer.php'; ?>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>