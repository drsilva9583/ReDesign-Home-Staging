/* about.js - team member carousel */

document.addEventListener('DOMContentLoaded', () => {

    const track   = document.querySelector('.carousel-track');
    const wrapper = document.querySelector('.carousel-track-wrapper');
    const prevBtn = document.querySelector('.carousel-btn.prev');
    const nextBtn = document.querySelector('.carousel-btn.next');

    if (!track || !prevBtn || !nextBtn) return;

    const original = Array.from(track.children);
    const total    = original.length;
    const visible  = window.innerWidth <= 768 ? 1 : 3;

    /* clone all cards and append so we always have cards to slide into */
    original.forEach(card => {
        track.appendChild(card.cloneNode(true));
    });

    let current = 0;

    function cardWidth() {
        return wrapper.offsetWidth / visible;
    }

    function goTo(index, animate = true) {
        if (!animate) track.style.transition = 'none';
        else track.style.transition = 'transform 0.4s ease';

        current = index;
        track.style.transform = `translateX(-${current * cardWidth()}px)`;
    }

    nextBtn.addEventListener('click', () => {
        current++;
        goTo(current);

        /* when we reach the end of originals silently reset to the start */
        if (current >= total) {
            setTimeout(() => goTo(0, false), 400);
        }
    });

    prevBtn.addEventListener('click', () => {
        /* if at start, silently jump to cloned end then slide back */
        if (current <= 0) {
            goTo(total, false);
            setTimeout(() => {
                current = total - 1;
                goTo(current);
            }, 20);
        } else {
            current--;
            goTo(current);
        }
    });

    window.addEventListener('resize', () => goTo(current, false));

});