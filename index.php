<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de registros</title>
        <link href="styles/site.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="styles/kendo.common.min.css">
        <link rel="stylesheet" href="styles/kendo.rtl.min.css">
        <link rel="stylesheet" href="styles/kendo.default.min.css">
        <link rel="stylesheet" href="styles/kendo.mobile.all.min.css">

        <script src="js/jquery.min.js"></script>
        <script src="js/kendo.all.min.js"></script>
        <?php 
   
include('conect/connector.php'); 
session_start();

if($_POST['enviar'])
  
{
    if(!empty($_POST['user']) )
    {
        $U = $_POST['user'];
        $sql = ("SELECT * FROM usuarios WHERE soid='$U'");
        $res = mysql_query($sql, $link) or die(mysql_error());
        $tot = mysql_num_rows($res);
       
            if($tot > 0)
            {
                 $_SESSION['usuario'] = $U;   
            }
            else 
            {

  echo "<script type=\"text/javascript\">alert(\"Usuario incorrecto.\");</script>";
            }
    }

        if(!empty($_POST['pass']))
            {
                
                $P = $_POST['pass'];
                $sqlP = ("SELECT * FROM usuarios WHERE password='$P'");
                $resP = mysql_query($sqlP, $link) or die(mysql_error());
                $totP = mysql_num_rows($resP);

                    if($totP > 0)
                    {
                        $_SESSION['logueado'] = "SI";
                        $_SESSION['Contraseña'] = $P;
                        echo "<img src=\"images/otrs/Alerta_sistema_registros_sesion_ABIERTA.jpg\"";  
                         
                    }
                    else 
                    {
                        echo "<script type=\"text/javascript\">alert(\"Contraseña incorrecta.\");</script>";
                    }
            }

}
?>
    </head>
    <body>

        <header>
        <div class="content-wrapper">
            <div class="float-left">
                <p class="site-title"><img src="images/logo/Portafoliologo.png"  width="80" height="80"><a href="/">Sistema de registros</a></p>
            </div>
            <div class="float-right">
                <nav>

                <ul id="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="content/regEquipo.php">Registrar equipos</a></li>
                    <li><a href="content/Eliminar.php">Eliminar equipos</a></li>
                    <li><a href="content/consul.php">Consultas</a></li>
                    <li><a href="content/RegUs.php">Registrame</a></li>
                </ul>
                </nav>
            </div>
        </div>
        </header>

        <div id="body">

            <div class="featured">

                <div class="content-wrapper">

                    <hgroup class="title">
                    
                         <h2>Bienvenido!</h2>
                    </hgroup>
                    <p>
                        Este sistema de registros esta diseñado para manejar todos los registros del equipo de tecnologia de su empresa,
                        Si durante el proceso de almacenamiento se genera algun problema porfavor 
                        <mark>Contacte a su administrador de sistemas</mark>.
                    </p>
            
                       
                </div>

            </div>
            <section class="content-wrapper main-content clear-fix">
             <div class="loginform">
        
<br>
    <form method="post" action="" >
    <img src="images/otrs/tab_account_android.png">
        <input class="forms" placeholder="Ingrese su Nombre de Usuario" type="text" name="user" required/></td>
        
        <input class="forms" placeholder="Ingrese su Contraseña" type="password" name="pass" required/></td>
        
        <input class="textButton k-primary" id="PrimaryButton"  type="submit" name="enviar" value="Entrar" /></td>
    
        <!--a href="RegUs.php" class="reg">CREAR CUENTA</a-->
        
    </form>
    
</div>
<br><br>
           
                <h3>Panel Informativo</h3>
                <br />

                <ul id="introPanelBar">
                    <li class="k-state-active">
                        <span class="k-link k-state-selected">Primero lo primero</span>
                        <div style="padding:1em">
                           <P><mark>1.</mark> Para hacer uso de este sistema usted debe contar con una cuenta de usuario, usted puede Solicitar al administrador llenar su <a>formulario de usuario</a> </P>
                            <P><mark>2.</mark> Usted sera procesado para estar autorizado </P>
                            <P><mark>3.</mark> Usted podrá hacer uso de este sistema</i> </P>

                        </div>
                    </li>
                    <li>
                        <span class="k-link">Interfaz del usuario</span>
                        <div style="padding:1em">
                            <p>El sistema cuenta con una interfaz limpia, simple e interactiva<br>
                            Usted podra agregar, editar, eliminar y exportar datos desde el servidor con tansolo unos cliks </p>
                            <a href="">Para mas informacion ingrese <mark>aqui</mark></a>
                        </div>
                    </li>
                    <li>
                        <span class="k-link">Reporte de errores</span>
                        <div style="padding:1em">
                            Usted puede llenar un formulario de reporte de errores si estos llegan a generarse, tome en cuenta que el proceso puede durar horas en solventarce.
                            <a href=""><mark>Ingrese aqui</mark>></a>
                        </div>
                    </li>
                </ul>
                <script>
                    $(function(){
                        $("#introPanelBar").kendoPanelBar({
                            expandMode: "multiple"
                        });
                    });
                </script>
            </section>
        </div>

        <footer>
        <div class="content-wrapper">
            <div class="float-left">
                <p>&copy; 2017 - Un sistema de NTdeveloper, para mas informacion escribase a <a href="Neryetv@gmail.com">Neryetv@gmail.com,</a>Todos los derechos reservados.</p>
            </div>
        </div>
        </footer>
    </body>
</html>
