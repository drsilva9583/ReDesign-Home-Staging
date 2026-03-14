/* consult.js - FAQ accordion for consult.html */

document.addEventListener('DOMContentLoaded', () => {

    const faqList = document.querySelector('.faq-list');
    if (!faqList) return;

    faqList.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const isOpen = btn.getAttribute('aria-expanded') === 'true';
            const answer = btn.nextElementSibling;
            const item   = btn.closest('.faq-item');

            /* close all others */
            faqList.querySelectorAll('.faq-question').forEach(other => {
                if (other !== btn) {
                    other.setAttribute('aria-expanded', 'false');
                    other.nextElementSibling.hidden = true;
                    other.closest('.faq-item').classList.remove('open');
                }
            });

            /* toggle clicked one */
            btn.setAttribute('aria-expanded', !isOpen);
            answer.hidden = isOpen;
            item.classList.toggle('open', !isOpen);
        });
    });

});