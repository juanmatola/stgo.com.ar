function updateFormOpen(id){
    let form = document.getElementById('updatepostform');
    form.action = '/admin/panel/save?id='+id;
}
function deleteModalOpen(id){
    let deleteModalButton = document.getElementById('deleteModalButton');
    deleteModalButton.href = '/admin/panel/delete?id='+id;
}