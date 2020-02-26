<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css"/>
        
        <style>
            .s {
                background-color: #4d4d4d;
                color: black;
                opacity: 0.90;
                margin-top: 80px;
                margin-left: 20px;
                margin-right: 20px;
            }
            
                        
            @media screen and (max-width:1000px ){ 
            div nav ul { 
		width:80%;
		height:100%;
		left:-100%;
		margin:0;
		position: fixed;}
            }
            
            
            .menu {
		display:block;
		padding:20px;
		background:#024959;
		color:#fff;
		text-decoration:none;
		font-weight: bold;
		font-size:25px;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		box-sizing:border-box;
                margin-top: 45px;
		width: 40%;
		background:#bfbfbf;
                z-index: 1;
                list-style: none;
            }

            div nav ul li {
		display:block;
		float:none;
		border-bottom:1px solid rgba(255,255,255, .3);
            }
            
            .icon {
                background-image: url(images/menu.png);
                background-size: 40px;
                background-repeat: no-repeat;
                justify-content: center;
                margin-left: 20px;
                margin-right: 20px;
                margin-top: 20px;
            }
            
            .btn {size: auto; 
            background-color: transparent; 
            border-color: transparent; 
            color: black;
            font-size: 20px;
            font-family: helvetica;
            font-weight: bold;
            }
            
            .row > div {
                height: 35px;
                background-color: transparent;
                margin-top: 20px;}

            .cinco {
            background-size: 300px;
            background-repeat: no-repeat;
            justify-content: center;
            margin-left: 20px;
            margin-right: 20px;
            background-image: url(images/icon2.png);
            }
            
            .fullscreen-bg {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
            z-index: -100;
            }
            .fullscreen-bg__video {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            @media (min-aspect-ratio: 16/9) {
            .fullscreen-bg__video {
                width: 100%;
                height: auto;
                }
            }

            
            @media (max-aspect-ratio: 16/9) {
              .fullscreen-bg__video {
                width: auto;
                height: 100%;
              }
            }

            .g {
                background-color: #dfdfdf;
                opacity: 0.90;
                color: black;
                margin-top: 80px;
                margin-left: 20px;
                margin-right: 20px;}
                
            .f {
                background-color: #1e1e1e;
                margin-top: 40px;
                margin-bottom: 20px;
                color: white;
                opacity: 0.90;
            }
            
            @media (max-width: 600px) {
                .cinco {
                    background-size: 100%;
                    background-position-y: 8px;
                }
            }

        </style>
        <title>Estoa de la Ria</title>
    </head>
    <body>
        <div class="container">
            <div class="row" >
                <div class="col col-lg-4 d-block cinco">
                </div>
                <div class="col uno d-lg-block d-none">
                    <button class="btn" onclick="location.href='index.php'">
                        Inicio
                    </button>
                </div>
                <div class="col dos d-lg-block d-none">
                    <button class="btn" onclick="location.href='proyectos.php'">
                        Proyectos
                    </button>
                </div>
                <div class="col tres d-lg-block d-none">
                    <button class="btn" onclick="location.href='contacto.php'">
                        Contacto
                    </button>
                </div>
                <div class="col cuatro d-lg-block d-none">
                    <button class="btn" onclick="location.href='login/ingreso.php'">
                        Ingreso
                    </button>
                </div>
                <nav class="icon d-lg-none d-md-block col-2">
                    <ul class="menu">
                        <li>
                            <button class="btn" onclick="location.href='index.php'">
                                Inicio 
                            </button>
                        </li>
                        <li>
                            <button class="btn" onclick="location.href='proyectos.php'">
                                Proyectos
                            </button>
                        </li>
                        <li>
                            <button class="btn" onclick="location.href='contacto.php'">
                                Contacto
                            </button>
                        </li>
                        <li>
                            <button class="btn" onclick="location.href='login/ingreso.php'">
                                Ingreso
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        <section class="row justify-content-between">
            <main class="col-md-6 g align-self-center">
                <h1>Titulo</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, perspiciatis, facilis, minus quaerat adipisci rerum nihil blanditiis praesentium eveniet totam ab accusamus et. Reiciendis, at dignissimos perferendis ipsum. Dolorem, 
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, placeat, totam natus nostrum eum nobis alias optio ab commodi ullam quaerat dignissimos tenetur ipsa. Rerum labore libero quod sit inventore!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, tenetur, quos, explicabo, quaerat possimus dicta iusto corporis officiis placeat ipsam perspiciatis et sit esse voluptatibus commodi repellat hic qui animi.
                    </p>   
            </main>
            <aside class="col-md-4 s align-self-center">
                <h3>Titulo</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, perspiciatis, facilis, minus quaerat adipisci rerum nihil blanditiis praesentium eveniet totam ab accusamus et. Reiciendis, at dignissimos perferendis ipsum. Dolorem, mollitia.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, placeat, totam natus nostrum eum nobis alias optio ab commodi ullam quaerat dignissimos tenetur ipsa. Rerum labore libero quod sit inventore!
                    </p>
            </aside>
        </section>
        <section>
            <footer class="row1 justify-content-between">
                <div class="col-md-12 f">
                    <h1>Hola, aqui va texto informativo</h1>
                </div>
            </footer>
        </section>
    </div>
        <div class="fullscreen-bg">
            <video loop muted autoplay class="fullscreen-bg__video">
                <source src="videos/videof1.mp4" type="video/mp4">
            </video>
        </div>
        
        <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <symbol id="icon-menu" viewBox="0 0 32 32">
                    <path d="M2 6h28v6h-28zM2 14h28v6h-28zM2 22h28v6h-28z"></path>
                </symbol>
            </defs>
        </svg>
        
        <script src="js/jquery-3.4.1.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="menu.js"></script>
        
        
    </body>
</html>