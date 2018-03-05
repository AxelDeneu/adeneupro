
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

Vue.component('example', require('./components/Example.vue'));

const app1 = new Vue({
    el: '#app'
});

$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});


/*CLUSTER EFFECT*/
var parentCluster = document.getElementById('parentCluster');

const app = new PIXI.Application({
  width:      parentCluster.offsetWidth,
  height:     parentCluster.offsetHeight-10,
  autoStart: false,
  transparent: true
});

var divCluster = document.getElementById("cluster");
divCluster.appendChild(app.view);


function random(min, max) {
  if (arguments.length < 2) {
    max = min;
    min = 0;
  }
  if (min > max) {
    var hold = max;
    max = min;
    min = hold;
  }
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

var createStar = function(centerX, centerY, orbitRadius, maxStars) {
  var radius = random(100, orbitRadius) / 30;
  var timePassed = random(0, maxStars);
  var speed = random(orbitRadius) / 500000;
  var star =  new PIXI.Sprite(app.loader.resources['star'].texture);
  star.anchor.set(0.5);
  star.width = radius;
  star.height = radius;
  star.alpha = random(2, 10) / 10;
  app.stage.addChild(star);
  app.ticker.add(function() {
    star.x = Math.cos(timePassed + 1) * orbitRadius + centerX;
    star.y = Math.sin(timePassed) * orbitRadius / 2 + centerY;
    timePassed += speed;
    var twinkle = random(10);
    if (twinkle === 1 && star.alpha > 0) {
      star.alpha -= 0.2;
    } else if (twinkle === 2 && star.alpha < 1) {
      star.alpha += 0.2;
    }
  });
  return star;
};

var starRun = function() {
  var stars = [];
  var maxStars = 1200;
  var starCenterX = app.renderer.width / 2;
  var starCenterY = app.renderer.height / 2;
  for (var i = 0; i < maxStars; i++) {
    stars.push(createStar(starCenterX, starCenterY, random(starCenterX - 10), maxStars));
  }
};
var starRun2 = function() {
  var stars = [];
  var maxStars = 200;
  var starCenterX = app.renderer.width / 2;
  var starCenterY = app.renderer.height / 2;
  var radiusMax = starCenterX - 10;
  for (var i = 0; i < maxStars; i++) {
    stars[i] = createStar(starCenterX, starCenterY, radiusMax, maxStars);
  }

  for (var j = 0; j < maxStars; j++) {
    stars[j] = createStar(starCenterX - 10, starCenterY - 10, radiusMax / 10 * 7, maxStars);
  }

  for (var k = 0; k < maxStars; k++) {
    stars[k] = createStar(starCenterX - 30, starCenterY - 30, radiusMax / 10 * 3, maxStars);
  }
};

function onAssetsLoaded(loader, res) {
  console.log('All files loaded');

  starRun();
  // starRun2();

  app.start();
}

app.loader
  .add('star','images/star.png')
  .load(onAssetsLoaded);
/*END CLUSTER EFFECT*/





$(document).ready(function() {
	$('.animation-target').mouseover(function() {
    	$('.select-text').html($(this).data('value'));
  	}).mouseout(function() {
    	$('.select-text').html('&nbsp;');
  	});
})

