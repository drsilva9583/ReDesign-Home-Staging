/* about.js - team member carousel */

document.addEventListener('DOMContentLoaded', () => {

    const track   = document.querySelector('.carousel-track');
    const wrapper = document.querySelector('.carousel-track-wrapper');
    const prevBtn = document.querySelector('.carousel-btn.prev');
    const nextBtn = document.querySelector('.carousel-btn.next');

    if (!track || !prevBtn || !nextBtn) return;

    const cards      = Array.from(track.children);
    const total      = cards.length;
    const visible    = window.innerWidth <= 768 ? 1 : 3;
    let current      = 0;   /* index of leftmost visible card */

    /* get the width of one card */
    function cardWidth() {
        return wrapper.offsetWidth / visible;
    }

    /* move track to show cards starting at index */
    function goTo(index) {
        /* wrap around infinitely */
        current = ((index % total) + total) % total;
        track.style.transform = `translateX(-${current * cardWidth()}px)`;
    }

    prevBtn.addEventListener('click', () => goTo(current - 1));
    nextBtn.addEventListener('click', () => goTo(current + 1));

    /* recalculate on resize */
    window.addEventListener('resize', () => goTo(current));

});