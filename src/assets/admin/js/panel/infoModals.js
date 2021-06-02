import InfoModal from './classes/ModalClass.js';
import { possibleResponses, icons } from './config/config.js';

let infoModal = new InfoModal('infoModal', 'infoModalLabel', 'infoModalBody');
let url = new URL(document.URL);

if (!(url.search === '')){
    let getResponse = url.searchParams;
    let insertResponse = getResponse.get('insert');
    let deleteResponse = getResponse.get('delete');

    switch (insertResponse) {
        case possibleResponses.insert.ok:
            infoModal.show('Éxito', 'Los datos se han guardado correctamente.', icons.ok);
        break;
    
        case possibleResponses.insert.err:
            infoModal.show('Ups..', 'Asegurate de que el archivo que intentas subir: <br><br> - Pesa menos de 3Mb. <br><br> - Es un archivo permitido (.png , .jpeg, .jpg).', icons.err);
        break;

        default:
        break;
    }

    switch (deleteResponse) {
        case possibleResponses.delete.ok:
            infoModal.show('Éxito', 'Los datos se han eliminado correctamente.', icons.ok);
        break;
    
        case possibleResponses.delete.err:
            infoModal.show('Ups..', 'Ocurrió algún error al intentar eliminar el post, si el error persiste comunícate con el soporte', icons.err);
        break;

        default:
        break;
    }

}