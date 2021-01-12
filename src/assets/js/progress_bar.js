/*  ┌─────────────────────────────────────────────────────────────────────────┐ 
*   │                                                                         │░
*   │               Onscroll, Update width of the progress bar.               │░
*   │                                                                         │░
*   └─────────────────────────────────────────────────────────────────────────┘░
*    ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
*/

window.onscroll = function () {
    
    const de = document.documentElement;                        // <HTML> tag is the documentElement
    const pb = document.getElementById('progress-bar'); // progress-bar
    
    pb.style.width = (de.scrollTop / (de.scrollHeight - de.clientHeight)) * 100 + '%';
};