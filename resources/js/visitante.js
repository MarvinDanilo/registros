function destroy(e) { 
    let url = e.getAttribute('url');
    let token = e.getAttribute('token');
    
    Swal.fire({ 
        icon: 'question',
        title: '¿Desea continuar?', 
        text: 'El visitante será eliminado', 
        showCancelButton: true, 
        cancelButtonText: 'Cancelar', 
        confirmButtonText: 'Sí'
    }).then((res) => { 
        if (res.isConfirmed) { 
            const request = new XMLHttpRequest();
            request.open('DELETE', url);
            request.setRequestHeader('X-CSRF-TOKEN', token);

            request.onload = () => { 
                if (request.status === 200) { 
                    e.closest('tr').remove(); // Eliminar la fila de la tabla
                    Swal.fire({ 
                        icon: 'success', 
                        text: 'Visitante eliminado correctamente'
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: 'Error al eliminar el visitante. Verifique e intente nuevamente.'
                    });
                }
            };

            request.onerror = err => {
                Swal.fire({
                    icon: 'error',
                    text: 'Error de conexión. Por favor, intente más tarde.'
                });
                console.error('Error al eliminar:', err);
            };

            request.send(); 
        }
    });
}
