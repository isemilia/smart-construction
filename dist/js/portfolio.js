window.addEventListener('DOMContentLoaded', () => {
    //projectsStart
    const projImgs = Array.from(document.querySelectorAll('[data-projects-img] img'));
    const projModal = document.querySelector('[data-projects-modal]');
    const projModalImg = document.querySelector('[data-projects-modal-img]');

    const projTitles = Array.from(document.querySelectorAll('[data-projects-title]'));
    const projModalCaption = document.querySelector('[data-projects-modal-caption]');

    projImgs.forEach((img, index) => {
        img.addEventListener('click', function() {
            projModal.classList.add('projects__modal_active');
            projModalImg.src = img.src;
            projModalCaption.innerHTML = projTitles[index].innerHTML;
        });
    });

    projModal.addEventListener('click', function(e) {
        e.target.classList.remove('projects__modal_active');
    });
    //projectsEnd
});