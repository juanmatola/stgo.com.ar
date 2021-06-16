function updateFormOpen(id){
    let form = document.getElementById('updatepostform');
    form.action = '/admin/panel/save?id='+id;
}
function deleteModalOpen(id){
    let deleteModalButton = document.getElementById('deleteModalButton');
    deleteModalButton.href = '/admin/panel/delete?id='+id;
}
let showloader = (e) => {
    let selector = `#${e.target.id} > div.form_loader`; 
    let loader = document.querySelector(selector);
    loader.style.display = 'flex';
}

let new_post_form = document.getElementById('newpostform');
let update_post_form = document.getElementById('updatepostform');

new_post_form.addEventListener("submit", showloader);
update_post_form.addEventListener("submit", showloader);