export default class InfoModal{
    constructor(modalId, labelId, bodyId){
        this.modalId = modalId;
        this.modal = document.getElementById(modalId);
        this.label = document.getElementById(labelId);
        this.body = document.getElementById(bodyId);
        this.bootstrapModal = new bootstrap.Modal(document.getElementById(modalId));
    }

    show(label, body, icon){
        this.label.innerHTML = label;
        this.body.innerHTML = `<div>${icon}</div></br> ${body}`;
        this.bootstrapModal.show();
    }
}