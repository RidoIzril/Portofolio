/* ==========================
   AOS
========================== */

AOS.init({

    duration:1000,

    once:true

});

/* ==========================
   Navbar Scroll
========================== */

const navbar = document.querySelector(".navbar");

window.addEventListener("scroll",()=>{

    if(window.scrollY>60){

        navbar.classList.add("scrolled");

    }

    else{

        navbar.classList.remove("scrolled");

    }

});

/* ==========================
   Typing Animation
========================== */

new Typed("#typing",{

    strings:[

        "Laravel Developer",

        "Full Stack Developer",

        "UI / UX Designer",

        "Freelancer"

    ],

    typeSpeed:70,

    backSpeed:40,

    loop:true

});

/* ==========================
   Particles
========================== */

particlesJS("particles-js",{

    particles:{

        number:{

            value:70

        },

        color:{

            value:"#ff2d2d"

        },

        shape:{

            type:"circle"

        },

        opacity:{

            value:.6

        },

        size:{

            value:3

        },

        line_linked:{

            enable:true,

            color:"#ff2d2d",

            opacity:.25

        },

        move:{

            enable:true,

            speed:2

        }

    }

});