/**
 *  Homepage Anime FX
*/

// Background
// anime__punchin('.heropanel__fly',0,'L');
// anime__punchin('.heropanel__pt', 300, 'R');
// anime__punchin('.heropanel__pulse',600, 'B');

// FLY
anime__fadeinX('.heropanel__fly .heropanel__button',2200, -50);
anime__punchin('.heropanel__fly .heropanel__overlay', 50, 'L');
anime__punchin('.heropanel__fly .heropanel__xxl', 150, 'L');
anime__punchin('.heropanel__fly .heropanel__eyebrow', 200, 'L');

// // PT
// anime__blockoutText('.heropanel__pt .heropanel__content h4');
// anime__blockoutText('.heropanel__pt .heropanel__content p', 500);

// PULSE
anime__isometricScroll('.heropanel__pulse > .heropanel__overlay');

anime__poppins('.animated-stack');