<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Pambolazo</h2>
 
        <div>
            Gracias por Participar.
        </div>
        <br>
        <br>
        <br>
        <div>Tu token de la quiniela es la siguiente:</div>
        <br>
        <br>
        <table border=1 cellspacing=0 cellpadding=0>
            <tr>
                <td>Correo electrónico: </td>
                <td> {{ $email }} </td>
            </tr>
            <tr>
                <td>Token: </td>
                <td>{{ $token }}</td>
            </tr>
        </table>        
    </body>
</html>