// archivo: tramite.js

// Función para eliminar un trámite con SweetAlert2
function destroy(button) {
    // Obtener el URL para la eliminación
    const url = button.getAttribute('url');
    const token = button.getAttribute('token');

    // Confirmación de eliminación con SweetAlert2
    Swal.fire({
        title: '¿Deseas eliminar este trámite?',
        text: 'Esta acción no se puede deshacer',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            // Crear solicitud AJAX para eliminar el trámite
            const request = new XMLHttpRequest();
            request.open('DELETE', url); // Configura la solicitud como DELETE
            request.setRequestHeader('X-CSRF-TOKEN', token);

            // Configurar evento de carga para la solicitud AJAX
            request.onload = () => {
                if (request.status === 200) {
                    // Si la solicitud es exitosa, eliminar la fila correspondiente de la tabla
                    button.closest('tr').remove();
                    Swal.fire({
                        title: 'Eliminado',
                        text: 'El trámite ha sido eliminado exitosamente.',
                        icon: 'success',
                    });
                } else {
                    // Si ocurre un error, mostrar mensaje de error
                    Swal.fire({
                        title: 'Error',
                        text: 'No se pudo eliminar el trámite. Inténtalo nuevamente.',
                        icon: 'error',
                    });
                }
            };

            // Manejo de errores de conexión en la solicitud AJAX
            request.onerror = (err) => {
                console.error('Error de conexión:', err);
                Swal.fire({
                    title: 'Error',
                    text: 'Hubo un problema de conexión. Por favor, inténtalo de nuevo más tarde.',
                    icon: 'error',
                });
            };

            // Enviar la solicitud AJAX
            request.send();
        }
    });
}

// Función para realizar alguna acción adicional en trámites (si es necesario)
function customAction(button) {
    // Implementa la lógica que necesites para otras acciones relacionadas con los trámites.
    console.log('Realizando acción personalizada con el botón:', button);
}
