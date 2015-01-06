<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>Welcome to SquareDent</title>
    <style type="text/css">
.ReadMsgBody { width: 100%; background-color: #ffffff; }
.ExternalClass { width: 100%; background-color: #ffffff; }
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
html { width: 100%; }
body { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; margin: 0; padding: 0; }
table { border-spacing: 0; border-collapse: collapse; }
img { display: block !important; }
table td { border-collapse: collapse; }
.yshortcuts a { border-bottom: none !important; }
a { color: #3498db; text-decoration: none; }
.textbutton a { font-family: 'open sans', arial, sans-serif !important; color: #ffffff !important; }
.footer-link a { color: #7f8c8d !important; }
 @media only screen and (max-width: 640px) {
body { width: auto !important; }
table[class="table600"] { width: 450px !important; }
table[class="table-inner"] { width: 90% !important; }
table[class="table2-2"] { width: 47% !important; text-align: left !important; }
table[class="table3-3"] { width: 100% !important; text-align: center !important; }
table[class="table1-3"] { width: 29% !important; }
table[class="table3-1"] { width: 64% !important; text-align: left !important; }
/* Image */
img[class="img1"] { width: 100% !important; height: auto !important; }
}
 @media only screen and (max-width: 479px) {
body { width: auto !important; }
table[class="table600"] { width: 290px !important; }
table[class="table-inner"] { width: 82% !important; }
table[class="table2-2"] { width: 100% !important; text-align: left !important; }
table[class="table3-3"] { width: 100% !important; text-align: center !important; }
table[class="table1-3"] { width: 100% !important; }
table[class="table3-1"] { width: 100% !important; text-align: center !important; }
/* image */
img[class="img1"] { width: 100% !important; }
img[class="img-hide"] { width: 0px !important; height: 0px !important; line-height: 0px !important; max-height: 0px !important; max-width: 0px !important; }
}
</style>
</head>

<body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">

        <!-- header -->

        <tr>
            <td>
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td valign="top" style="background-color: #008CBA;background-size:cover; background-position:center;">
                            <table class="table600" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td height="40"></td>
                                </tr>

                                <!-- title -->
                                <tr>
                                    <td mc:edit="header title" align="center" style="font-family: 'Open Sans', Arial, sans-serif; font-size:30px; color:#FFFFFF;">Bienvenido a Pambolazo</td>
                                </tr>
                                <!-- end title -->

                                <tr>
                                    <td height="10"></td>
                                </tr>

                                <!-- logo -->
                                <tr>
                                    <!-- -->
                                </tr>
                                <!-- end logo -->

                                <tr>
                                    <td>
                                        <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td height="10" style="border-bottom:2px solid #FFFFFF"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="30"></td>
                                </tr>

                                <!-- content -->
                                <tr>
                                    <td mc:edit="header content" align="center" style="font-family: 'Open Sans', Arial, sans-serif; font-size:14px; color:#ffffff; line-height:24px;">
                                       Plataforma de quinielas de futbol soccer.
                                    </td>
                                </tr>
                                <!-- end content -->

                                <tr>
                                    <td height="50"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- end header -->

        <!-- 1/1 content center -->
        <tr mc:repeatable="layout" mc:hideable mc:variant="1/1 content center">
            <td>
                <table class="table600" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="50"></td>
                    </tr>
                    <!-- title -->
                    <tr>
                        <td mc:edit="1/1 content center title" align="center" style="font-family: 'Open Sans', Arial, sans-serif; font-size:18px;  color:#3498db;">
                            Hola, <strong>{{$name}}</strong>. <br>
                            Pambolazo este de regreso y ahora podrás generar tus quinielas con tus amigos.

                        </td>
                    </tr>
                    <!-- end title -->
                    <tr>
                        <td height="10"></td>
                    </tr>

                    <!-- content -->
                    <tr>
                        <td mc:edit="1/1 content center content" align="center" style="font-family: 'Open Sans', Arial, sans-serif; font-size:13px; color:#7f8c8d; line-height:24px;">
                            Este correo es para notificarte que el servicio esta disponible, tendrás que recuperar tu contraseña siguiendo esta liga: 
                        </td>
                    </tr>

                    <tr>
                        <td height="10"></td>
                    </tr>

                    <!-- button -->
                    <tr>
                        <td>
                            <table width="150" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#3498db" class="textbutton" style=" border-radius:30px;">
                                <tr>
                                    <td width="10"></td>
                                    <td mc:edit="CTA bar button" height="30" align="center" style="font-family: 'Open Sans', Arial, sans-serif; font-size:13px; color:#ffffff;">
                                        <a href="{{ URL::to('token/reset', array($confirmation)) }}" style="color:#ffffff;">Recuperar Contraseña</a>
                                    </td>
                                    <td width="10"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <tr>
                        <td height="10"></td>
                    </tr>
                    
                    <tr>
                        <td mc:edit="1/1 content center content" align="center" style="font-family: 'Open Sans', Arial, sans-serif; font-size:13px; color:#7f8c8d; line-height:24px;">
                            Si ya tienes tu contraseña, ¡arma tu quiniela! 
                        </td>
                    </tr>

                    <tr>
                        <td height="10"></td>
                    </tr>


                    <!-- button -->
                    <tr>
                        <td>
                            <table width="150" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#3498db" class="textbutton" style=" border-radius:30px;">
                                <tr>
                                    <td width="10"></td>
                                    <td mc:edit="CTA bar button" height="30" align="center" style="font-family: 'Open Sans', Arial, sans-serif; font-size:13px; color:#ffffff;">
                                        <a href="http://pambolazo.com" style="color:#ffffff;">Ir a Pambolazo</a>
                                    </td>
                                    <td width="10"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- end button --> 

                    <!-- end content -->
                </table>
            </td>
        </tr>
        <!-- end 1/1 content center -->


        <!-- footer -->
        <tr>
            <td>
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="50"></td>
                    </tr>
                        <td bgcolor="#e2e6e7" align="center">
                            <table class="table600" width="600" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td height="10"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- copyright -->

                                        <table class="table3-3" width="390" border="0" align="left" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td mc:edit="copyright" valign="middle" style="font-family: 'Open Sans', Arial, sans-serif; font-size:13px; color:#7f8c8d; line-height:28px;">© 2015 Pambolazo</td>
                                            </tr>
                                        </table>

                                        <!-- end copyright -->
                                        <!--Space-->

                                        <table width="1" height="0" border="0" cellpadding="0" cellspacing="0" align="left">
                                            <tr>
                                                <td height="0" style="font-size: 0;line-height: 0;border-collapse: collapse;">
                                                    <p style="padding-left: 24px;">&nbsp;</p>
                                                </td>
                                            </tr>
                                        </table>

                                        <!--End Space-->

                                        <table class="table3-3" width="184" border="0" align="right" cellpadding="0" cellspacing="0">
                                            <!-- email option -->
                                            <tr>
                                               
                                            </tr>
                                            <!-- email option -->
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="10"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>