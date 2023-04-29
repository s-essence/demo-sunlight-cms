'use strict';

window.addEventListener('load', () => {
  scrollAnimation();
});


/**
 * MVのアニメーションを非同期に実行する
 */
async function mvAnimation() {

  // MVの各要素を取得
  const $mvList_01 = document.querySelector('.mv-list .--01 .item__photo');
  const $mvCp_01 = document.querySelector('.js-mvCp-01-anima');
  const $mvCp_02 = document.querySelector('.js-mvCp-02-anima');
  const $mvCp_03_01 = document.querySelector('.js-mvCp-03-anima-01');
  const $mvCp_03_02 = document.querySelector('.js-mvCp-03-anima-02');
  const $mvCp_04 = document.querySelector('.js-mvCp-04-anima');

  // scene01
  const scene_01 = await new Promise((resolve) => setTimeout(() => {
    $mvList_01.classList.add('is-show');
    resolve(true);
  }, 1000));


  // scene02
  const scene_02 = await new Promise((resolve) => setTimeout(() => {
    $mvCp_01.classList.add('is-show');
    resolve(true);
  }, 1000));


  // scene03
  const scene_03 = await new Promise((resolve) => setTimeout(() => {
    $mvCp_02.classList.add('is-show');
    resolve(true);
  }, 1000));


  // scene04-01
  const scene_04_01 = await new Promise((resolve) => setTimeout(() => {
    $mvCp_03_01.classList.add('is-show');
    resolve(true);
  }, 1000));

  // scene04-02
  const scene_04_02 = await new Promise((resolve) => setTimeout(() => {
    $mvCp_03_02.classList.add('is-show');
    resolve(true);
  }, 1000));


  // scene05
  const scene_05 = await new Promise((resolve) => setTimeout(() => {
    $mvCp_04.classList.add('is-show');
    resolve(true);
  }, 1000));
}


/**
 * MVのアニメーションを非同期に実行する
 */
async function problemsAnimation() {

  // PROBLEMの各要素を取得
  const $problemItem_01 = document.querySelector('.problems-list .--01');
  const $problemItem_02 = document.querySelector('.problems-list .--02');
  const $problemItem_03 = document.querySelector('.problems-list .--03');
  const $problemItem_04 = document.querySelector('.problems-list .--04');
  const speed = 2000;

  // scene01
  const scene_01 = await new Promise((resolve) => setTimeout(() => {
    $problemItem_01.classList.add('is-float-anima');
    resolve(true);
  }, speed));


  // scene02
  const scene_02 = await new Promise((resolve) => setTimeout(() => {
    $problemItem_02.classList.add('is-float-anima');
    resolve(true);
  }, speed));


  // scene03
  const scene_03 = await new Promise((resolve) => setTimeout(() => {
    $problemItem_03.classList.add('is-float-anima');
    resolve(true);
  }, speed));


  // scene04
  const scene_04 = await new Promise((resolve) => setTimeout(() => {
    $problemItem_04.classList.add('is-float-anima');
    resolve(true);
  }, speed));
}

document.addEventListener('DOMContentLoaded', () => {
});


function scrollAnimation (class_name = 'js-anima') {
  let _class_name = class_name;
  let data_anima;

  let currentScrollPos;
  let currentScrollPosBottom;
  let targetPos;
  let elemtop;
  let windowPosCenter;

  const $anima = document.querySelectorAll('.js-anima');
  
  window.addEventListener('scroll', (e) => {
    currentScrollPos = window.pageYOffset; // 現在のスクロール量（画面の最上部）
    currentScrollPosBottom = window.pageYOffset + screen.availHeight; // 現在のスクロール量（画面の最下部）
    windowPosCenter = currentScrollPosBottom - (screen.height / 4);
    for (let i = 0; i < $anima.length; i++){
      targetPos = $anima[i].getBoundingClientRect();
      elemtop = targetPos.top + window.pageYOffset;
      if (elemtop < windowPosCenter) {
        $anima[i].classList.add('is-show');

        // problemの追加アニメーション
        if ($anima[i].classList.contains('js-problems-listItem')) {
          problemsAnimation();
        }
        
      }
      
    }

    
  });
}