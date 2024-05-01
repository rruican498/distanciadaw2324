<?php
/**
 * Este script PHP contiene funciones para calcular el área y el perímetro de un trapecio.
 *
 * Proporciona funciones para calcular el área y el perímetro de un trapecio dado sus bases y altura.
 *
 * @package trapecio
 * @version 1.0.0
 * @author Rafael Ruiz Cañete
 * @license MIT
 */

/**
 * Calcula el área de un trapecio.
 *
 * Esta función toma las longitudes de las bases y la altura como entrada y devuelve el área del trapecio.
 *
 * @param float $base_mayor La longitud de la base mayor del trapecio.
 * @param float $base_menor La longitud de la base menor del trapecio.
 * @param float $altura La altura del trapecio.
 * @return float El área del trapecio.
 * @throws InvalidArgumentException Si alguna de las longitudes es negativa o cero.
 *
 * @since 1.0.0
 */
function calcular_area_trapecio($base_mayor, $base_menor, $altura) {
    if ($base_mayor <= 0 || $base_menor <= 0 || $altura <= 0) {
        throw new InvalidArgumentException("Las longitudes de las bases y la altura deben ser positivas.");
    }

    return (($base_mayor + $base_menor) / 2) * $altura;
}

/**
 * Calcula el perímetro de un trapecio.
 *
 * Esta función toma las longitudes de las bases y los lados no paralelos como entrada y 
 * devuelve el perímetro del trapecio.
 *
 * @param float $base_mayor La longitud de la base mayor del trapecio.
 * @param float $base_menor La longitud de la base menor del trapecio.
 * @param float $lado1 La longitud del primer lado no paralelo.
 * @param float $lado2 La longitud del segundo lado no paralelo.
 * @return float El perímetro del trapecio.
 * @throws InvalidArgumentException Si alguna de las longitudes es negativa o cero.
 *
 * @since 1.0.0
 */
function calcular_perimetro_trapecio($base_mayor, $base_menor, $lado1, $lado2) {
    if ($base_mayor <= 0 || $base_menor <= 0 || $lado1 <= 0 || $lado2 <= 0) {
        throw new InvalidArgumentException("Las longitudes de las bases y los lados no paralelos deben ser positivas.");
    }

    return $base_mayor + $base_menor + $lado1 + $lado2;
}

/**
 * @internal Solo para uso interno de desarrolladores.
 *
 * Se añadiran en posteriornes versiones se añadiran nuevos cálculos
 * 
 */

/**
 * Calcula las diagonales de un trapecio.
 *
 * Esta función toma las longitudes de las bases y la altura como entrada y devuelve las longitudes de las diagonales del trapecio.
 *
 * @param float $base_mayor La longitud de la base mayor del trapecio.
 * @param float $base_menor La longitud de la base menor del trapecio.
 * @param float $altura La altura del trapecio.
 * @return array Un arreglo asociativo que contiene las longitudes de las diagonales del trapecio. La clave 'diagonal_mayor' representa la diagonal mayor y la clave 'diagonal_menor' representa la diagonal menor.
 * @throws InvalidArgumentException Si alguna de las longitudes es negativa o cero.
 *
 * @since 1.0.0
 */
function calcular_diagonales_trapecio($base_mayor, $base_menor, $altura) {
    if ($base_mayor <= 0 || $base_menor <= 0 || $altura <= 0) {
        throw new InvalidArgumentException("Las longitudes de las bases y la altura deben ser positivas.");
    }

    // Calcula las diagonales usando la fórmula de Pitágoras en el trapecio.
    $diagonal_mayor = sqrt(pow($base_mayor, 2) + pow($altura, 2));
    $diagonal_menor = sqrt(pow($base_menor, 2) + pow($altura, 2));

    return array(
        'diagonal_mayor' => $diagonal_mayor,
        'diagonal_menor' => $diagonal_menor
    );
}

?>
