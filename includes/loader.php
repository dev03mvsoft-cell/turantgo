<style>
    #loader-wrapper {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100vh;
        z-index: 9999999;
        background-color: white;

    }

    .logo-icon-container {
        position: absolute;
        width: 100px;
        height: 100px;
        transform: translateX(-100px);
    }

    .blue-arrow-static {
        fill: #0C478C;
        opacity: 0;
        animation: fade-in .1s linear 3.5s forwards;
    }

    .orange-bar {
        fill: #F37021;
        transform: translateX(-100%);
        animation: bar-slide .5s ease-out forwards;
    }

    .bar-1 {
        animation-delay: 3.5s;
    }

    .bar-2 {
        animation-delay: 3.6s;
    }

    .bar-3 {
        animation-delay: 3.7s;
    }

    #flying-plane {
        position: fixed;
        width: 100px;
        height: 100px;
        z-index: 10;
        animation: fly-curve 2.5s cubic-bezier(0.4, 0, 0.2, 1) forwards,
            land-align 1s ease-out 2.5s forwards,
            fade-out .1s linear 3.5s forwards;
    }

    .blue-arrow-fly {
        fill: #0C478C;
        opacity: 0;
        animation: fade-in .1s linear forwards;
    }

    .logo-text {
        font-size: 40px;
        font-weight: bold;
        color: #0C478C;
        margin-left: 50px;
        visibility: hidden;
        white-space: nowrap;
    }

    .text-mask {
        opacity: 0;
        animation: reveal-text 1s ease-out 3.5s forwards;
    }

    @keyframes fly-curve {
        0% {
            left: 100vw;
            top: 0vh;
            transform: translate(-50%, -50%) scale(.3) rotate(45deg);
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        50% {
            left: 0vw;
            top: 100vh;
            transform: translate(-50%, -50%) scale(.6) rotate(-15deg);
        }

        75% {
            left: 50vw;
            top: 50vh;
            transform: translate(-50%, -50%) scale(.8) rotate(10deg);
        }

        100% {
            left: calc(50% - 100px);
            top: 50%;
            transform: translate(-50%, -50%) scale(1) rotate(0deg);
        }
    }

    @keyframes land-align {

        0%,
        100% {
            left: calc(50% - 100px);
            top: 50%;
        }
    }

    @keyframes fade-in {
        100% {
            opacity: 1;
        }
    }

    @keyframes fade-out {
        100% {
            opacity: 0;
        }
    }

    @keyframes bar-slide {
        100% {
            transform: translateX(0);
        }
    }

    @keyframes reveal-text {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
            visibility: visible;
        }
    }

    .fade-out {
        opacity: 0;
        transition: opacity 0.5s ease;
        pointer-events: none;
    }
</style>



<!-- This is the container for the final, static logo at the screen center -->
<div id="loader-wrapper">
    <!-- This SVG flies across the screen -->
    <svg id="flying-plane" viewBox="0 0 100 70">
        <!-- Path data approximated from your logo's blue arrow shape -->
        <path class="blue-arrow-fly" d="M23 17 
         Q25 18 27 20 
         L88 18 
         Q92 18 90 22
         L36 67
         Q34 65 37 62
         L52 40 
         Q52 38 52 36" />
    </svg>

    <svg class="logo-icon-container" viewBox="0 0 100 70">
        <!-- Static Blue Arrow (Appears when the flying plane lands) -->
        <path class="blue-arrow-static" d="M23 17 
         Q25 18 27 20 
         L88 18 
         Q92 18 90 22
         L36 67
         Q34 65 37 62
         L52 40 
         Q52 38 52 36" />

        <!-- Orange Bars (Slide in to complete the logo) -->
        <rect class="orange-bar bar-1" x="14" y="5" width="68" height="8" rx="5" />
        <rect class="orange-bar bar-2" x="0" y="20" width="46" height="8" rx="5" />
        <rect class="orange-bar bar-3" x="4" y="34" width="40" height="8" rx="5" />
    </svg>

    <!-- The Text (Reveals at the very end) -->
    <div class="logo-text">
        <span class="text-mask">TurantGo</span>
    </div>
</div>
