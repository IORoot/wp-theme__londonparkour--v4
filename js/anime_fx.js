/**
 * Contents of Effects
 * 
 * anime__blockoutImg
 * anime__blockoutText
 * anime__punchin
 * anime__fadeinX
 * anime__fadeinY
 * anime__isometricScroll
 * 
 */

//  ┌───────────────────────────────────────────┐ 
//  │                                           │░
//  │ Blockout - Image                          │░
//  │                                           │░
//  │ Redacted-type image that appears behind   │░
//  │ coloured block rectangle.                 │░
//  │                                           │░
//  │ CSS Class Requirement:                    │░
//  │ <img class="anime__blockoutImg ">         │░
//  │ This class is needed to work correctly.   │░
//  │                                           │░
//  │ Override border colours to change the     │░
//  │ block colour.                             │░
//  │                                           │░
//  │                                           │░
//  └───────────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

// NOTE - All accompanying CSS is created in /wp-content/themes/londonparkour_v4/sass/anime_js/_blockoutImg.scss

function anime__blockoutImg(imgtarget, delay) {

    // Give the target the relevant CSS class for this effect
    document.querySelector(imgtarget).classList.add('anime__blockoutimg');

    var imgheight = document.querySelector(imgtarget);

    anime({
        targets: imgtarget,
        keyframes: [
            { delay: delay, opacity: 0, duration: 0 },
        // Hide image and create Blockout
        {   duration: 0, opacity: 1, 
            clipPath: 'inset(0px 0px ' + anime.get(imgheight, 'height') + ' 0px)',
            "-webkit-clipPath": 'inset(0px 0px ' + anime.get(imgheight, 'height') + ' 0px)'
        },
        { duration: 1000, borderTopWidth: 0, height: anime.get(imgheight, 'height') },
        {   duration: 1000, 
            borderTopWidth: anime.get(imgheight, 'height'), 
            clipPath: 'inset(0px 0px 0px 0px)',
            "-webkit-clipPath": 'inset(0px 0px 0px 0px)'
        },
        // switch to bottom border
        { duration: 0, borderTopWidth: 0, borderBottomWidth: anime.get(imgheight, 'height')},
        // return to normal
        { duration: 1000, borderTopWidth: 0, borderBottomWidth: 0, height: anime.get(imgheight, 'height') },
        ],
        easing: 'easeOutQuint',
    });
}


//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │            Blockout Text             │░
//  │                                      │░
//  │    Redacted-effect on text layer.    │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

// NOTE - All accompanying CSS is created in /wp-content/themes/londonparkour_v4/sass/anime_js/_blockoutTxt.scss

function anime__blockoutText(target, delay = 0){

    // Give the target the relevant CSS class for this effect
    document.querySelector(target).classList.add('anime__blockouttxt');

    var txttarget = document.querySelector(target)
    var txtwidth = anime.get(txttarget, 'width');

    anime({
        targets: txttarget,
        keyframes: [
        // Hidden
        {   width: txtwidth, 
            duration: 0, 
            clipPath: 'inset(0px ' + txtwidth + ' 0px 0px)',  
            "-webkit-clipPath": 'inset(0px ' + txtwidth + ' 0px 0px)'  
        },
        // line appears
        {   delay: 1500, 
            duration: 500, 
            borderLeftWidth: txtwidth, 
            clipPath: 'inset(0px 0px 0px 0px)',   
            "-webkit-clipPath": 'inset(0px 0px 0px 0px)'   
        },
        // switch to right border
        {duration: 0, borderLeftWidth: 0, borderRightWidth: txtwidth },
        // reveal image
        {duration: 500, borderLeftWidth: 0, borderRightWidth: 0 },
        ],
        delay: delay,
        easing: 'easeOutQuint',
    });
}


//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │           Punchin - image            │░
//  │                                      │░
//  │  Will appear from the top/ bottom/   │░
//  │ sides, scaled down. Will then punch  │░
//  │     up and grow into full frame.     │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
function anime__punchin(imgtarget, delaythis = 0, fromDirection = 'L') {

    if (fromDirection == 'L'){ var translateit = [
        {opactity: 0, delay:0, duration: 0},
        {translateX: -2000, opacity: [0,0.8], scale: 0.8, delay: delaythis, duration: 1000},
        {translateX: 0, opacity: 0.8, scale: 0.8, delay: 300, duration: 300 },
        {translateX: 0, opacity: 1,   scale: 1, delay: 300, duration: 1000},
      ] }
    if (fromDirection == 'R'){ var translateit = [
        {opactity: 0, delay:0, duration: 0},
        {translateX: 2000, opacity: [0 ,0.8], scale: 0.8, delay: delaythis, duration: 1000},
        {translateX: 0, opacity: 0.8, scale: 0.8, delay: 300, duration: 300 },
        {translateX: 0, opacity: 1,   scale: 1, delay: 300, duration: 1000},
      ] }
    if (fromDirection == 'T'){ var translateit = [
        {opactity: 0, delay:0, duration: 0},
        {translateY: -2000, opacity: [0 ,0.8], scale: 0.8, delay: delaythis, duration: 1000},
        {translateY: 0, opacity: 0.8, scale: 0.8, delay: 300, duration: 300 },
        {translateY: 0, opacity: 1,   scale: 1, delay: 300, duration: 1000},
      ] }
    if (fromDirection == 'B'){ var translateit = [
        {opactity: 0, delay:0, duration: 0},
        {translateY: 2000, opacity: [0 ,0.8], scale: 0.8, delay: delaythis, duration: 1000},
        {translateY: 0, opacity: 0.8, scale: 0.8, delay: 300, duration: 300 },
        {translateY: 0, opacity: 1,   scale: 1, delay: 300, duration: 1000},
      ] }

    anime({
        targets: imgtarget,
        keyframes: translateit,
        easing: 'easeOutQuint',
      });
}


//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │                                      │░
//  │           Fade-in (x & y)            │░
//  │                                      │░
//  │   Opacity and directional fadein.    │░
//  │                                      │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
function anime__fadeinX(target, delay = 0, translateAmount = 50 ) {

    anime({
        targets: target,
        translateX: translateAmount,
        opacity: 0,
        duration: 300,
        endDelay: delay,
        direction: 'reverse',
        easing: 'easeOutQuint',
      });
}

function anime__fadeinY(target, delaythis, translateAmount = 50 ) {

    anime({
        targets: target,
        translateY: [translateAmount,0],
        opacity: [0,1],
        duration: 300,
        delay: delaythis,
        easing: 'easeOutQuint',
      });
}


//  ┌──────────────────────────────────────┐ 
//  │                                      │░
//  │           Isometric Scroll           │░
//  │                                      │░
//  │ Use for 'the pulse' image to make it │░
//  │     isometric and scroll it in.      │░
//  │                                      │░
//  └──────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

// function anime__isometricScroll(target, delay = 0) {

//     var imgtarget = target;
//     var imgheight = anime.get(document.querySelector(imgtarget), 'height');

//     anime({
//         targets: imgtarget,
//         keyframes: [
//             {rotateX: 60, rotateY: 0, rotateZ: -45, duration: 0, height: 0},
//             {height: imgheight, duration: 1000 },
//         ],
//         delay: delay,
//         easing: 'easeOutQuint'
//     });
// }

function anime__isometricScroll(target) {

    var imgtarget = target;
    var imgheight = anime.get(document.querySelector(imgtarget), 'height');

    var tl = anime.timeline({
        targets: target,
        easing: 'easeOutExpo',
        delay: function(el, i) { return i * 300 },
        duration: 1500,

        complete: function(anim) {
            anime({
                targets: target,
                loop: true,
                scale: [1.2, 1.1],
                direction: 'alternate',
            })
        }

      });

      tl
      .add({
        backgroundPosition: '50% -70%',
      })
      .add({
        backgroundPosition: '0% 0%',
        delay: 3000, opacity: 0.8, rotateX: 60, rotateY: 0, rotateZ: -45, translateX: 100, translateY: 50, translateZ: 0, height: imgheight,
      })
      .add({ 
        opacity: 1, scale: 3, translateX: 500, translateY: 500, translateZ: 0,
      })
      .add({
        translateY: -250,
      })
      .add({
        translateX: 50,
      })
      .add({
        opacity: 1, scale: 1.1, translateX: 50, translateY: 300, translateZ:50, 
      });
}


//  ┌───────────────────────────────────────────┐ 
//  │                                           │░
//  │                                           │░
//  │              Morph Shapes                 │░
//  │                   PT                      │░
//  │                                           │░
//  └───────────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

function anime__morphshapes(target) {

  // defaults
  var morph_timeline = anime.timeline({
    targets: target,
    delay: 300,
    easing: 'easeInOutExpo',
    duration: 3000,
    loop: true,
    direction: 'alternate',
  });

  // Animation
  morph_timeline
  // blob
  .add({
    d: 'M294,58 C476,-56 578,29 558,163 C538,297 631,314 572,426 C517,527 478,616 355,567 C232,518 127,576 60,460 C-2,351 -8,253 60,145 C149,5 190,122 294,58 Z'
  })
  // hex
  .add({
    d: 'M300,0 C300,0 560,140 560,140 C560,140 560,460 560,460 C560,460 300,600 300,600 C300,600 40,460 40,460 C40,460 40,140 40,140 C40,140 300,0 300,0 Z'
  })
  //square
  .add({
    d: 'M300,0 C300,0 600,0 600,0 C600,0 600,600 600,600 C600,600 300,600 300,600 C300,600 0,600 0,600 C0,600 0,0 0,0 C0,0 300,0 300,0 Z'
  });

}

//  ┌───────────────────────────────────────────┐ 
//  │                                           │░
//  │                                           │░
//  │              Morph Shapes                 │░
//  │            Private Parkour                │░
//  │                                           │░
//  └───────────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

function anime__morphpixels(target) {

  anime ({
    targets: target,
    easing: 'easeInOutExpo',
    duration: 1000,
    opacity: 0,
    loop: true,
    delay: anime.stagger(100),
    direction: 'alternate',
  });

}

//  ┌───────────────────────────────────────────┐ 
//  │                                           │░
//  │                                           │░
//  │             Animate Borders               │░
//  │                TUTORIALS                  │░
//  │                                           │░
//  └───────────────────────────────────────────┘░
//   ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░

function anime__animateborders(target) {

  anime({
    targets: target,
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 1000,
    delay: function(el, i) { return i * 150 },
    direction: 'alternate',
    loop: true
  });

}
