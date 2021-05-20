export default function (imgHtml) {
    if (imgHtml.naturalHeight > imgHtml.naturalWidth) {
        imgHtml.style.objectFit = 'contain';
    }else{
        imgHtml.style.objectFit = 'cover';
    }
}