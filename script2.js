function generateFibonacciSeries() {
    // Obtenemos el valor que ingresa el usuario
    let n = document.getElementById("numberInput").value;

    // Creamos un arreglo para almacenar la serie, inicializandolo con los primeros dos numeros: 0 y 1
    let fibonacciSeries = [0, 1];

    // Creamos un bucle "for" para generar la serie Fibonacci
    for (let i = 2; i < n; i++) {
        // Se calcula cada numero sumando los dos numeros anteriores
        fibonacciSeries[i] = fibonacciSeries[i - 1] + fibonacciSeries[i - 2];
    }

    // Cuando ya se genero la serie Fibonacci la podemos mostrar
    document.getElementById("fibonacciSeries").innerHTML = fibonacciSeries.join(", ");
}

