/**
 *  Homepage Anime FX
*/

// Background
anime__punchin('.c-hero-panel__fly',0,'L');
anime__punchin('.c-hero-panel__pt', 300, 'R');
anime__punchin('.c-hero-panel__pulse',600, 'B');

// FLY
anime__fadeinX('.c-hero-panel__fly .c-hero-panel__button',2200, -50);
anime__punchin('.c-hero-panel__fly .c-hero-panel__overlay', 50, 'L');
anime__punchin('.c-hero-panel__fly .c-hero-panel__xxl', 150, 'L');
anime__punchin('.c-hero-panel__fly .c-hero-panel__eyebrow', 200, 'L');

// PT
// anime__blockoutText('.c-hero-panel__pt .c-hero-panel__content h4');
// anime__blockoutText('.c-hero-panel__pt .c-hero-panel__content p', 500);

// PULSE
anime__isometricScroll('.c-hero-panel__pulse > .c-hero-panel__overlay');