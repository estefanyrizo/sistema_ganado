<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra-Venta</title>
</head>

<body>
    <?php
    foreach ($venta as $venta) : ?>
        <div>
            <h1 align="center">CONTRATO DE COMPRA VENTA DE GANADO VACUNO</h1>
            <p>
                Conste por el presente documento, el Contrato de Compra-Venta de ganado vacuno, que celebran de una parte
                LOS RIZO, con RUC N° 10802434559, debidamente representado por el Sr: ING. FRANCISCO JAVIER RIZO RIZO
                , con Numero de cedula 001-171271-1105A, con domicilio legal en Rio Blanco - Matagalpa, a quien en adelante
                se le denominará LA ENTIDAD
                y de otra parte el señor: <?php echo $venta["nombre"]; ?>, identificado
                con Numero de cedula <?php echo $venta["cedula"]; ?>, a quién
                en adelante se denominará EL CLIENTE, en los términos y condiciones de las cláusulas siguientes:
            </p>

            <h2> CLAUSULA PRIMERA - ANTECEDENTES</h2>
            <p>
                LA ENTIDAD, es una persona natural con negocio cuya activad es la compra venta de productos diversos.
                El CLIENTE, es una persona natural, dedicada a la producción y comercialización de productos diversos,
                servicios agrícolas y ganaderos, conforme a lo
                declarado en su información empresarial.
                Inversipans.RuVEZA
                comiso a peganos.
            </p>


            <h2> CLAUSULA SEGUNDA- ANTECEDENTES</h2>
            <p>
                El objeto del presente es contratar al PROVEEDOR para la Adquisición de Vaquillonas
                Brown swiss, conforme a las Especificaciones Técnicas detalladas.
            </p>

            <div class="pr-5 pl-5">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                             <td>
                                <?php echo $venta["fecha"]; ?>
                            </td>
                            <td>
                                <?php echo $venta["cantidad"]; ?>
                            </td>
                            <td>
                                <?php echo $venta["total"]; ?>
                            </td>
                            <td><a href=""><i class="fa fa-eye"></i></a></td>
                        </tr>

                    </tbody>
                </table>

            </div>
            <p>
                Raza:
                <?php echo $venta["raza"]; ?>
                Color:
                <?php echo $venta["color"]; ?>
                Tamaño:
                <?php echo $venta["tamaño"]; ?>
                peso:
                <?php echo $venta["peso"]; ?>
            </p>

        </div>
    <?php endforeach; ?>
</body>

</html>