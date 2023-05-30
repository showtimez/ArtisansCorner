
    <!DOCTYPE html>
<html>
    <head>
        <title>Become Revisor Email</title>
    </head>
    <body style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
            <tr>
                <td align="center" bgcolor="#a57966" style="padding: 40px 0 30px 0;">
                    <h1 style="color: #ffffff; font-size: 36px; margin: 0;">Richiesta Revisore</h1>
                </td>
            </tr>
            <tr>
                <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">

                    <p style="color: #153643; font-size: 18px; margin: 0;">Da: {{ $user->name }},</p><br>
                    <p style="color: #153643; font-size: 16px; line-height: 24px; margin: 0;">Un utente ha appena espresso interesse a lavorare con noi cliccando sul pulsante "Lavora con noi" sul nostro sito web. Ecco i dettagli della sua richiesta:</p><br>

                    Si prega di esaminare questa richiesta e di contattare l'utente il prima possibile per discutere di eventuali opportunità di collaborazione.
                    <p style="color: #153643; font-size: 16px; line-height: 24px; margin: 0;">Cordiali saluti,</p><br>
                    <p style="color: #153643; font-size: 18px; margin: 0;">
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->email }}</p></p>
                </td>
            </tr>
            <tr>
                <td bgcolor="#1e1e1e" style="padding: 30px 30px;">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td align="center">
                                <p style="color: #ffffff">Se vuoi renderlo revisore clicca quì:</p>
                        <button bgcolor="#a57966"><a href="{{ route('make.revisor', compact('user'))  }}" style="color: #ffffff">Rendi revisore</a></button>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
