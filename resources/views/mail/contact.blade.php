<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta charset="utf-8"> <!-- utf-8 works for most cases -->
	<meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
	<title>Nuevo Contacto</title> <!-- The title tag shows in email notifications, like Android 4.4. -->

	<!-- Web Font / @font-face : BEGIN -->
	<!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

	<!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
	<!--[if mso]-->
		<style>
			* {
				font-family: Lato, sans-serif !important;
			}
		</style>
	<!--[endif]-->

	<!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
	<!--[if !mso]><!-->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<!--<![endif]-->

	<!-- Web Font / @font-face : END -->

	<!-- CSS Reset -->
    <style>

		/* What it does: Remove spaces around the email design added by some email clients. */
		/* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
	        margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],	/* iOS */
        .x-gmail-data-detectors, 	/* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
        
        /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
        .a6S {
	        display: none !important;
	        opacity: 0.01 !important;
        }
        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
	        display:none !important;
	   	}

        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit (@ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }

    </style>
    
    <!-- Progressive Enhancements -->
    <style>

        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #5e72e4 !important;
            border-color: #5e72e4 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 600px) {

            .email-container {
                width: 100% !important;
                margin: auto !important;
            }

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }

            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }

            /* What it does: Adjust typography on small screens to improve readability */
			.email-container p {
				font-size: 17px !important;
				line-height: 22px !important;
			}
			
        }

    </style>

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. --> 
    <!--[if gte mso 9]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    
</head>
<body width="100%" bgcolor="#2b3878" style="margin: 0; mso-line-height-rule: exactly;">
    <center style="width: 100%; background: #fff; text-align: left;">

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: Lato, sans-serif;">
            Nuevo contacto desde Equiser.net
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!-- Email Body : BEGIN -->
        <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">

            <!-- Header Image, Flush : BEGIN -->
            <tr>
				<td bgcolor="#2b3878" style="text-align: left; padding: 30px;">
                    <img style="padding: 0; display: block" src="https://www.garmocar.com/images/logo-garmocar-negativo-horizontal.png" width="300">
                    <h2 style="font-family: Lato, sans-serif; font-size: 18px;color:#FFF; padding-left: 15px; padding-top: 10px;">
                    Nueva solicitud de información</h2>
				</td>
            </tr>
            <!-- Header Image, Flush : END -->

            <!-- 1 Column Text + Button : BEGIN -->
            <tr>
                <td bgcolor="#EBEBEB" style="padding: 40px 40px 20px; text-align: center;">
                    <h1 style="margin: 0; font-family: Lato, sans-serif; font-size: 17px; line-height: 27px; color: #333333; font-weight: bold;">Estos son los datos de la persona que solicitó información</h1>
                </td>
            </tr>
            <!-- 1 Column Text + Button : END -->

            <!-- 3 Even Columns : BEGIN -->
            <tr>
                <td bgcolor="#EBEBEB" align="center" valign="top" style="padding: 30px;">
                    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <!-- Column : BEGIN -->
                            <td width="33.33%" class="stack-column-center">
                                <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <td style="font-family: Lato, sans-serif; font-size: 13px; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: center;" class="center-on-narrow">
                                            <p style="margin: 0; font-size: 15px;"><b>Ubicación</b></p>
                                            <p style="margin: 0;">{{ $location }}</p>
                                            <p style="margin: 0; font-size: 15px;"><b>Nombre</b></p>
                                            <p style="margin: 0;">{{ $name }}</p>
                                            <p style="margin: 0; font-size: 15px;"><b>Correo</b></p>
                                            <p style="margin: 0;">{{ $email }}</p>
                                            <p style="margin: 0; font-size: 15px;"><b>Asunto</b></p>
                                            <p style="margin: 0;">{{ $subject }}</p>
                                            <p style="margin: 0; font-size: 15px;"><b>Mensaje</b></p>
                                            <p style="margin: 0;">{{ $message_form }}</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <!-- Column : END -->
                        </tr>
                    </table>
                </td>
            </tr>
        <!-- Email Body : END -->

        <!-- Email Footer : BEGIN -->
        <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
            <tr>
                <td bgcolor="#2b3878" style="padding: 40px 40px 20px; font-family: Lato, sans-serif; font-size: 15px; line-height: 20px; color: #EBEBEB; text-align: center;">
                    <a style="color:#EBEBEB; text-decoration:none; cursor: pointer;" href="http://www.equiser.net">EQUISER</a><br> <br>
                    Este mensaje fue enviado desde la página web.
                    <br><br>
                </td>
            </tr>
        </table>
        <!-- Email Footer : END -->

    </center>
</body>
</html>
