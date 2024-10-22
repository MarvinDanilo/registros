// Función para eliminar una visita utilizando AJAX
function destroy(e) {
    let url = e.getAttribute('url');
    let token = e.getAttribute('token');

    // Confirmar eliminación
    Swal.fire({
        icon: 'question',
        title: '¿Desea continuar?',
        text: 'La visita será eliminada',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Sí'
    }).then((res) => {
        if (res.isConfirmed) {
            const request = new XMLHttpRequest();
            request.open('DELETE', url);
            request.setRequestHeader('X-CSRF-TOKEN', token);

            request.onload = () => {
                if (request.status == 200) {
                    e.closest('tr').remove();
                    Swal.fire({
                        icon: 'success',
                        text: 'Visita eliminada exitosamente'
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: 'No se pudo eliminar la visita, intente de nuevo'
                    });
                }
            };

            request.onerror = (err) => {
                console.error('Error de conexión:', err);
                Swal.fire({
                    icon: 'error',
                    text: 'Ocurrió un error con la conexión, por favor intente nuevamente'
                });
            };

            request.send();
        }
    });
}
