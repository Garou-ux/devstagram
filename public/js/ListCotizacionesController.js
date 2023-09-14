

//controlador del listado de cotizaciones
appControl = appModule;
//agregamos los eventos de los dropdowns de cada cotizacion
const url_delete_cotizacion = document.getElementById('url_delete_cotizacion').value;
const url_get_pdf = document.getElementById('url_get_pdf').value;

document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.group');

    buttons.forEach(button => {
        const menu = button.nextElementSibling;
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            menu.classList.toggle('hidden');
        });

        document.addEventListener('click', function() {
            menu.classList.add('hidden');
        });
    });
});
const getpdf = async(cotizacion_id) => {
    let data = {
        _token : document.getElementById('ajaxtokengeneral').value,
        cotizacion_id: cotizacion_id
    };
    let response = await appControl.fetchData(url_get_pdf, data, 'POST');

 printJS({ printable: response.html, type: "raw-html", showModal: true })
}

const confirmDeleteCotizacion =  ( cotizacionId ) => {
    Swal.fire({
        icon: 'warning',
        title: '¿Estas seguro de eliminar la Cotización?',
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            deleteCotizacion(cotizacionId);
        }
      })
};

const deleteCotizacion = async ( cotizacionId ) => {
    let data = {
        _token: document.getElementById('ajaxtokengeneral').value,
        cotizacionId : cotizacionId
    };
    let response = await appControl.fetchData(url_delete_cotizacion, data, 'POST');
    Swal.fire('', response.message, response.type);
    location.reload();
};
