const nimInput = document.getElementById('nim');
const angkatanInput = document.getElementById('angkatan');
const whatsappInput = document.getElementById('whatsapp');

nimInput.addEventListener('input', function() {

    let nim = nimInput.value;

    if(nim.length >= 2) {
        angkatanInput.value = nim.substring(0, 2);
    } else {
        angkatanInput.value = '';
    }
});

whatsappInput.addEventListener('input', function() {

    let whatsapp = whatsappInput.value.replace(/[^0-9+]/g, '');

    if(whatsapp.startsWith('0')) {
        whatsapp = '+62' + whatsapp.substring(1);
    }

    if(whatsapp.startsWith('62')) {
        whatsapp = '+' + whatsapp;
    }

    whatsappInput.value = whatsapp;
});
