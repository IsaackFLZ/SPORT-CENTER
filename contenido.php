<?php

session_start();

 if ( !isset( $_SESSION['correo'] ) ) {
    header("location: registro.html");
  } 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="style_usuario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&family=Mohave:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <ul class="navbar">
            <h1>SPORT-CENTER</h1>
            <li><a href="#s1">Bienvenido</a> </li>
            <li><a href="#s2">Prices</a></li>
            <li><a href="#s3">Our Trainers</a></li>
            <li><a href="#s4">Where We are</a></li>
            <li><a href="#s4">Health News</a></li>
            <li><a href="#s5">Profile</a></li>
        <!-- <li><a href="#s4" rel="noopener noreferrer">Contact</a></li>
            <li id="fs"><a href="login.html" target="_blank" rel="noopener noreferrer">Sing In</a> </li>
            <li id="fs"><a href="registro.html" target="_blank" rel="noopener noreferrer">Sing Up</a> </li> -->
        </ul>
    </header>
    <section id="s1">
        <article>
            <figure class="slider">
                <ul>
                    <li><img src="../src/men.jpg" alt="" width="1701" height="800"></li>
                    <li><img src="../src/men2.jpg" alt=""width="1701"height="800" ></li>
                    <li><img src="../src/men3.jpg" alt="" width="1701"height="800"></li>
                </ul>
            </figure>
            <div class="textbox">
                <h1 id ="hsf">HELLO <?php echo $_SESSION['correo']?>, YOU HAVE </h1> <BR>
                <h1 id = "hsf">TO GIVE YOUR BEST EVERY DAY!</h1>
            </div>
            
        </article>
    </section>
    <section id="s2">
        <article>
            <div>
                <h1>
                    PRICES!!!
                </h1>
            </div>
            <div class="cards">
                <div id="card1">
                    <h2>Suscripción Anual</h2>
                    <p>
                        $ 770.000
                    </p>
                    <button>Inscripción</button>
                </div>
                <div id="card2">
                    <h2>Suscripción por 6 Meses</h2>
                    <p>
                        $ 500.000
                    </p>
                    <button>Inscripción</button>
                </div>
                <div id="card3">
                    <h2>Suscripción Mensual</h2>
                    <p>
                        $ 45.000
                    </p>
                    <button>Inscripción</button>
        
                </div>
            </div>
        </article>
    </section>
    <section id="s3">
        <?php
        $server = "localhost";
        $user = "isaack";
        $passw = "12345";
        $bd = "usuarios";
    
    $conexion = mysqli_connect($server, $user, $passw,$bd) 
            or die("Ha sucedido un error inexperado en la conexion de la base de datos");
    
        
    
    $sql="select * from entrenadores";
    $result = $conexion->query($sql);
    while($row =  $result->fetch_assoc()){

        ?>

        <article>
        
            <div class="cards2">
                <div id="card4">
                    <img src="<?php echo $row["img"]?>" alt="" width="250" heigth="250">
                    <h2><?php echo $row["Nombre"]?></h2><h2><?php echo $row["Apellido"]?></h2>
                    <p>
                    <?php echo $row["Especialidad"]?>
                    </p>
                    <button>Contactar</button>
                </div>
                <?php
            }
                ?>
            </div>
        </article>
    </section>
    <section id="s4">
        <article>
            <figure>
                <!--Imágen de fondo-->
            </figure>
            <div>
                <h1>
                    <!--Where we are-->
                </h1>
            </div>
            <div class="cards3">
                <div id="card7">
                    <h2>Ubicación</h2>
                    <button>Ver en Google Maps</button>
                </div>
            </div>
        </article>
    </section>
    <section id="s5">
        <article>
            <figure>
                <!--Imágen de fondo-->
            </figure>
            <div>
                <h1>
                    <!--Health News-->
                </h1>
                <br>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veritatis, suscipit eius sint maxime quisquam nulla quod nisi sapiente quidem ipsum! Temporibus, recusandae vero. Laboriosam quasi voluptatum animi asperiores tempora?
                </p>
            </div>
            <div class="cards4">
                <div id="card8">
                    <img src="" alt="">
                    <h2>Noticia Saludable #1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, eligendi quo! Deserunt itaque vero assumenda, minima quasi voluptatibus enim ea impedit eos reiciendis quae deleniti porro. Magni incidunt distinctio vero!</p>
                </div>
                <div id="card9">
                    <figure>
                        <img src="" alt="">
                    </figure>
                    <h2>Noticia Saludable #2</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, eligendi quo! Deserunt itaque vero assumenda, minima quasi voluptatibus enim ea impedit eos reiciendis quae deleniti porro. Magni incidunt distinctio vero!</p>
                </div>
                <div id="card10">
                    <figure>
                        <img src="" alt="">
                    </figure>
                    <h2>Noticia Saludable #3</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, eligendi quo! Deserunt itaque vero assumenda, minima quasi voluptatibus enim ea impedit eos reiciendis quae deleniti porro. Magni incidunt distinctio vero!</p>
                </div>
            </div>
        </article>
    </section>
    <footer id="s6">
        <div id="col1">
            <h1>SPORT-CENTER</h1>
            <p>Train your body and your mind on a smart way</p>
        </div>
        <hr>
        <div id="col2">
            <h1>Contactanos</h1>
            <p>Sincelejo</p>
            <p>Diagonal 44 BIS - Calle 45</p>
            <p>Piso 2</p>
            <p>+57 (2) 829-8-00</p>
        </div>
        <hr>
        <div id="col3">
            <h1>Eventos</h1>
            <p>Sincelejo - 21/04/2022</p>
            <ul>
                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam magni praesentium ipsam quo dignissimos molestiae asperiores quos commodi, magnam, harum, accusantium id maxime similique minima ipsum quae suscipit ullam optio?</li>
            </ul>
        </div>
    
</footer>
    <div id="bottom-text">
        <p>Designed By Isaack Florez & Andres Gracia</p>
        <p>All Rigths Reserved 2022©</p>
    </div>
</body>
</html>
<?php session_destroy();?>
