require('../../../node_modules/jquery/dist/jquery');

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });


$("#toggle").click(function () {
    $(this).toggleClass("on");
    $("#menu").slideToggle();
});




var text = $(".split");

var split = new SplitText(text);

function random(min, max) {
    return (Math.random() * (max - min)) + min;
}

$(split.chars).each(function (i) {
    TweenMax.from($(this), 2.5, {
        opacity: 0,
        x: random(-500, 500),
        y: random(-500, 500),
        z: random(-500, 500),
        scale: .1,
        delay: i * .02,
        yoyo: true,
        repeat: -1,
        repeatDelay: 10
    });
});