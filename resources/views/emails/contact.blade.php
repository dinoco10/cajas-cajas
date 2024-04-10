<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0"
      style="width: 100% !important;-webkit-text-size-adjust: none;margin: 0;padding: 0;background-color: #fff">
<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="height: 100% !important;margin: 0;padding: 0;width: 100% !important;background-color: #E2E4E9">
    <tr>
        <td align="center" valign="top" style="border-collapse: collapse">
            <table border="0" cellpadding="0" cellspacing="0" width="664" id="templateContainer" style="border: none;box-shadow: 0 0 10px #909090;border-radius: 10px;background-color: #006A8B">
                <!-- Logo -->
                <tr>
                    <td align="center" valign="top" style="border-collapse: collapse">
                        <table border="0" cellpadding="0" cellspacing="0" width="664" height="100" id="templateHeader" style="border-bottom: 0">
                            <tr>
                                <td class="spacer-1" width="50" style="border-collapse: collapse;font-size:1px; background-color: #006A8B;">&nbsp;</td>
                                <td style="border-collapse: collapse;" width="614" height="100">
                                    <img 	src="{!! url('images/header_logo_3.png') !!}"
                                            alt="Cajas Más Cajas - Logo"
                                            width="100"
                                            height="auto"
                                            style="border:0;line-height:100%;outline:none;text-decoration:none;display:block;"								/>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- Title -->
                <tr>
                    <td align="center" valign="top" style="border-collapse: collapse">
                        <table border="0" cellpadding="0" cellspacing="0" width="664" id="templateNav" style="background-color: #353535;">
                            <tr>
                                <td class="spacer-1" width="50" style="border-collapse: collapse;font-size:1px; background-color: #353535;">&nbsp;</td>
                                <td class="tituloNewsletter" width="564"
                                    style="border-collapse: collapse;color: #FFF;font-size: 20px;font-weight: bold;text-align: left;font-family: Arial;line-height: 41px;height: 41px; background-color: #353535;">
                                    Nuevo Mensaje De Contacto</td>
                                <td class="spacer-2" width="50" style="border-collapse:collapse;font-size:1px; background-color: #353535;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!--  Budget -->
                <tr>
                    <td align="center" valign="top" style="border-collapse: collapse">
                        <table border="0" cellpadding="0" cellspacing="0" width="664" id="cuponGrandeHolder" style="background: #fff">
                            <tr>
                                <td class="spacer-1" height="20" style="border-collapse: collapse;font-size:1px; background-color: #FFFFFF;"></td>
                            </tr>
                            <tr>
                                <td class="spacer-1" width="50" style="border-collapse: collapse;font-size:1px; background-color: #fff;">&nbsp;</td>
                                <td width="564">
                                    <ul style="list-style-type: none; margin: 0; padding: 0;">
                                        <li style="color: #353535; font-family: Arial; font-size: 14px; line-height: 200%; border-bottom: 1px #E2E4E9 solid;"><b>Nombre:</b> {!! $contact->name !!}</li>
                                        <li style="color: #353535; font-family: Arial; font-size: 14px; line-height: 200%; border-bottom: 1px #E2E4E9 solid;"><b>Teléfono:</b> {!! $contact->phone !!}</li>
                                        <li style="color: #353535; font-family: Arial; font-size: 14px; line-height: 200%; border-bottom: 1px #E2E4E9 solid;"><b>Email:</b> {!! $contact->email !!}</li>
                                        <li style="color: #353535; font-family: Arial; font-size: 14px; line-height: 200%; border-bottom: 1px #E2E4E9 solid;"><b>Mensaje:</b> {!! $contact->message !!}</li>
                                        <li style="color: #353535; font-family: Arial; font-size: 14px; line-height: 200%;"><b>Fecha:</b> {!! $contact->created_at->format('d/m/Y H:i') . ' hs.' !!}</li>
                                    </ul>
                                </td>
                                <td class="spacer-1" width="50" style="border-collapse: collapse;font-size:1px; background-color: #fff;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="spacer-1" height="20" style="border-collapse: collapse;font-size:1px; background-color: #FFFFFF;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- Footer  -->
                <tr>
                    <td>
                        <table border="0" cellpadding="10" cellspacing="0" width="664" id="templateFooter" style="background-color: #353535;border-top: 0">
                            <tr>
                                <td>
                                    <p style="font-family: Arial;font-size: 12px;line-height: 125%;text-align: center;color:#FFF;">
                                        Cajas Más Cajas - {{ date('Y') }} - All rights reserved ©
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
