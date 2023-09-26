//funcion que es para que solo sea posible rellenar con numeros y siendo posible borrar si hay algun fallo//
function preventNonNumericInput(event){

    if (event.key === 'Backspace' || event.key === 'Delete') {
        return;
        }
    if ((event.keyCode < 48 || event.keyCode > 57) && event.key !== ',') {
        // Si no es un número, impedir la acción por defecto del evento
        event.preventDefault();
    };
}
