// let startX, startY, isDragging = false;
// const element = document.getElementById('grid');

// element.addEventListener('mousedown', startDrag);
// element.addEventListener('touchstart', startDrag);

// element.addEventListener('mousemove', drag);
// element.addEventListener('touchmove', drag);

// element.addEventListener('mouseup', endDrag);
// element.addEventListener('touchend', endDrag);

// function startDrag(e) {
//     isDragging = true;
//     startX = e.clientX || e.touches[0].clientX;
//     startY = e.clientY || e.touches[0].clientY;
// }

// function drag(e) {
//     if (!isDragging) return;
//     const currentX = e.clientX || e.touches[0].clientX;
//     const currentY = e.clientY || e.touches[0].clientY;

//     // Hitung perpindahan
//     const deltaX = currentX - startX;
//     const deltaY = currentY - startY;

//     // Lakukan sesuatu dengan perpindahan tersebut, misalnya menggeser elemen
//     // Contoh: element.style.transform = `translate(${deltaX}px, ${deltaY}px)`;

//     // Atau gunakan untuk menggeser peta di dalam elemen besar seperti Google Maps
//     // Contoh: panMap(deltaX, deltaY);

//     // Simpan posisi saat ini untuk digunakan pada perpindahan berikutnya
//     startX = currentX;
//     startY = currentY;
// }

// function endDrag() {
//     isDragging = false;
// }

$(document).ready(function() {
    let startX, startY, isDragging = false;
    const $element = $('#yourElementId');
    
    $element.on('mousedown touchstart', function(e) {
        isDragging = true;
        startX = e.clientX || e.originalEvent.touches[0].clientX;
        startY = e.clientY || e.originalEvent.touches[0].clientY;
    });
    
    $(document).on('mousemove touchmove', function(e) {
        if (!isDragging) return;
        const currentX = e.clientX || e.originalEvent.touches[0].clientX;
        const currentY = e.clientY || e.originalEvent.touches[0].clientY;
        const deltaX = currentX - startX;
        const deltaY = currentY - startY;
        // Lakukan sesuatu dengan perpindahan tersebut
        // Contoh: $element.css('transform', `translate(${deltaX}px, ${deltaY}px)`);
        // Atau gunakan untuk menggeser peta di dalam elemen besar seperti Google Maps
        // Contoh: panMap(deltaX, deltaY);
        startX = currentX;
        startY = currentY;
    });
    
    $(document).on('mouseup touchend', function() {
        isDragging = false;
    });
});
