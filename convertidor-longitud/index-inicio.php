<?php
$valor = "";
$desde = "";
$hasta = "";

function convertir_a_metros($valor, $unidad_desde)
{

    switch ($unidad_desde) {
        case 'Milimetro':
            return $valor / 1000;
            break;

        case 'Centimetro':
            return $valor / 100;
            break;

        case 'Decimetro':
            return $valor / 10;
            break;

        case 'Metro':
            return $valor / 1;
            break;

        case 'Decametro':
            return $valor * 10;
            break;

        case 'Hectometro':
            return $valor * 100;
            break;

        case 'Kilometro':
            return $valor * 1000;
            break;

        default:
            return "Unidad de medida no soportada";
            break;
    }
}

function convertir_desde_metros($valor, $unidad_hasta)
{
    switch ($unidad_hasta) {
        case 'Milimetro':
            return $valor * 1000;
            break;
        case 'Centimetro':
            return $valor * 100;
            break;

        case 'Decimetro':
            return $valor * 10;
            break;

        case 'Metro':
            return $valor * 1;
            break;

        case 'Decametro':
            return $valor / 10;
            break;

        case 'Hectometro':
            return $valor / 100;
            break;

        case 'Kilometro':
            return $valor / 1000;
            break;

        default:
            return "Unidad de medida no soportada";
            break;
    }
}


if (isset($_POST["convertir"])) {
    $valor = $_POST["valor"];
    $desde = $_POST["desde"];
    $hasta = $_POST["hasta"];

    $calculoDesde = convertir_a_metros($valor, $desde);

    $calcularHasta = convertir_desde_metros($calculoDesde, $hasta);

    $resultado = number_format($calcularHasta, 2);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Conversor de Longitud</h1>

    <main class="container">
        <form method="POST">
            <section class="row mt-4">

                <div class="col-sm-4">
                    <div>
                        <label for="valor" class="form-label">VALOR:</label>
                        <input type="number" name="valor" class="form-control" min="0" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <label for="desde" class="form-label">Desde:</label>
                    <select class="form-select" id="desde" name="desde">
                        <option value="">--Selecciona un valor--</option>
                        <option value="Milimetro">Milímetro</option>
                        <option value="Centimetro">Centímetro</option>
                        <option value="Decimetro">Decímetro</option>
                        <option value="Metro">Metro</option>
                        <option value="Decametro">Decámetro</option>
                        <option value="Hectometro">Hectómetro</option>
                        <option value="Kilometro">Kilómetro</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <label for="hasta" class="form-label">Hasta:</label>
                    <select class="form-select" id="hasta" name="hasta">
                        <option value="">--Selecciona un valor--</option>
                        <option value="Milimetro">Milímetro</option>
                        <option value="Centimetro">Centímetro</option>
                        <option value="Decimetro">Decímetro</option>
                        <option value="Metro">Metro</option>
                        <option value="Decametro">Decámetro</option>
                        <option value="Hectometro">Hectómetro</option>
                        <option value="Kilometro">Kilómetro</option>
                    </select>
                </div>

            </section>

            <section class="row mt-4">
                <div class="col-sm-6">
                    <button type="submit" name="convertir" class="btn btn-primary w-100 py-4">CONVERTIR</button>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="resultado" class="form-label">RESULTADO:</label>
                        <input type="text" name="resultado" class="form-control" value="<?php if (isset($resultado)) echo $resultado; ?>" readonly>
                    </div>
                </div>
            </section>
        </form>
    </main>
</body>
</html>