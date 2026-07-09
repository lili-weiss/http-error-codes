// Copyright (c) 2026 Lili Weiss (https://goli.li/me). All rights reserved.
// Site-wide scripts. Every feature checks whether its elements exist,
// so this single file works on all pages (e.g. 408's monster has no pupils).
(function () {
    'use strict';

    // --- Pupils follow the mouse ---
    const pupilLeft = document.getElementById('pupil-left');
    const pupilRight = document.getElementById('pupil-right');

    if (pupilLeft && pupilRight) {
        document.addEventListener('mousemove', (e) => {
            const offsetX = (e.clientX / window.innerWidth) * 2 - 1;
            const offsetY = (e.clientY / window.innerHeight) * 2 - 1;
            const maxMove = 10;
            const transformString =
                `translate(calc(-50% + ${offsetX * maxMove}px), calc(-50% + ${offsetY * maxMove}px))`;

            pupilLeft.style.transform = transformString;
            pupilRight.style.transform = transformString;
        });
    }

    // --- Info modal ---
    const modal = document.getElementById('infoModal');
    const openBtn = document.getElementById('openModalBtn');
    const closeBtn = document.getElementById('closeModalBtn');

    if (modal && openBtn && closeBtn) {
        openBtn.addEventListener('click', () => modal.classList.add('active'));
        closeBtn.addEventListener('click', () => modal.classList.remove('active'));
        modal.addEventListener('click', (e) => {
            if (e.target === modal) modal.classList.remove('active');
        });
    }
})();
