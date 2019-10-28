/*  ┌─────────────────────────────────────────────────────────────────────────┐ 
*   │                                                                         │░
*   │               Onscroll, Update width of the progress bar.               │░
*   │                                                                         │░
*   └─────────────────────────────────────────────────────────────────────────┘░
*    ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
*/

window.onscroll = function () {
    let de = document.documentElement;
    document.getElementById('progress__bar').style.width = (de.scrollTop / (de.scrollHeight - de.clientHeight)) * 100 + '%';
};