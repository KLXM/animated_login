<?php
/**
 * @var rex_fragment $this
 * @psalm-scope-this rex_fragment
 */
?>

<div class='box rex-background'>
  <div class='wave -one'></div>
  <div class='wave -two'></div>
  <div class='wave -three'></div>
</div>

<style>
:root {
  --background-color: #0e6cc4;
  --wave-one-color: #0af;
  --wave-two-color: black;
  --wave-three-color: #77daff;
  --loading-background-start: #25a7d7;
  --loading-background-end: #25a7d7; /* Hier kannst du auch #2962FF verwenden, wenn du das lineare Gradient wiederherstellen möchtest */
  --panel-background-color: rgba(50, 64, 80, 0.57);
  --panel-text-color: #dfe3e9;
}

body {
  margin: 0;
  padding: 0;
  background-color: var(--background-color);
  overflow-x: hidden;
  overflow-y: hidden;
}

/*waves****************************/

.box {
  position: fixed;
  top: 0;
  transform: rotate(5deg);
  left: 0;
}

.wave {
  position: fixed;
  top: 0;
  left: 0;
  opacity: .4;
  position: absolute;
  top: 3%;
  left: 10%;
  background: var(--wave-one-color);
  width: 2000px;
  height: 1400px;
  margin-left: 150px;
  margin-top: -250px;
  transform-origin: 10% 58%;
  border-radius: 66%;
  animation: drift 40s infinite linear;
}

.wave.-three {
  animation: drift 30s infinite linear;
  position: fixed;
  background-color: var(--wave-three-color);
}

.wave.-two {
  animation: drift 22s infinite linear;
  opacity: .1;
  background: var(--wave-two-color);
  position: fixed;
}

.box:after {
  content: '';
  display: block;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 11;
  transform: translate3d(0, 0, 0);
}

@keyframes drift {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

/*LOADING SPACE*/

.contain {
  animation-delay: 8s;
  z-index: 1000;
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  background: var(--loading-background-start);
  background: -webkit-linear-gradient(var(--loading-background-start), var(--loading-background-end));
  background: linear-gradient(var(--loading-background-start), var(--loading-background-end));
}

.icon {
  width: 100px;
  height: 100px;
  margin: 0 5px;
}

#rex-page-login .panel-default {
  background-color: var(--panel-background-color);
  border: 0;
  color: var(--panel-text-color);
  border-radius: 10px;
}

/*Animation*/
.icon:nth-child(2) img {
  -webkit-animation-delay: 1.5s;
  animation-delay: 2.4s;
}
.icon:nth-child(3) img {
  -webkit-animation-delay: 1.6s;
  animation-delay: 3.2s;
}
.icon:nth-child(4) img {
  -webkit-animation-delay: 1.8s;
  animation-delay: 5.4s;
}

.icon img {
  -webkit-animation: anim 14s ease infinite;
  animation: anim 14s ease infinite;
  -webkit-transform: scale(0, 0) rotateZ(180deg);
  transform: scale(0, 0) rotateZ(180deg);
}

@-webkit-keyframes anim {
  0% {
    -webkit-transform: scale(0, 0) rotateZ(-90deg);
    transform: scale(0, 0) rotateZ(-90deg);
    opacity: 0;
  }
  30% {
    -webkit-transform: scale(1, 1) rotateZ(0deg);
    transform: scale(1, 1) rotateZ(0deg);
    opacity: 1;
  }
  50% {
    -webkit-transform: scale(1, 1) rotateZ(0deg);
    transform: scale(1, 1) rotateZ(0deg);
    opacity: 1;
  }
  80% {
    -webkit-transform: scale(0, 0) rotateZ(90deg);
    transform: scale(0, 0) rotateZ(90deg);
    opacity: 0;
  }
}

@keyframes anim {
  0% {
    -webkit-transform: scale(0, 0) rotateZ(-90deg);
    transform: scale(0, 0) rotateZ(-90deg);
    opacity: 0;
  }
  30% {
    -webkit-transform: scale(1, 1) rotateZ(0deg);
    transform: scale(1, 1) rotateZ(0deg);
    opacity: 1;
  }
  50% {
    -webkit-transform: scale(1, 1) rotateZ(0deg);
    transform: scale(1, 1) rotateZ(0deg);
    opacity: 1;
  }
  80% {
    -webkit-transform: scale(0, 0) rotateZ(90deg);
    transform: scale(0, 0) rotateZ(90deg);
    opacity: 0;
  }
}
</style>

<footer class="rex-global-footer">
  <nav class="rex-nav-footer">
    <ul class="list-inline">
      <li><a href="https://www.yakamara.de" target="_blank" rel="noreferrer noopener">yakamara.de</a></li>
      <li><a href="https://www.redaxo.org" target="_blank" rel="noreferrer noopener">redaxo.org</a></li>
    </ul>
  </nav>
</footer>
