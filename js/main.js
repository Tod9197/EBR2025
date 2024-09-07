"use strict";

// ヘッダーの背景変化
document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".header");

  const isSpecialPage =
    document.body.classList.contains("page-sponsors") ||
    document.body.classList.contains("page-gallery") ||
    document.body.classList.contains("page-contest");

  if (isSpecialPage || window.scrollY > 100) {
    header.classList.add("black");
  }

  window.addEventListener("scroll", () => {
    if (window.scrollY > 100 || isSpecialPage) {
      header.classList.add("black");
    } else {
      header.classList.remove("black");
    }
  });

  if (window.scrollY > 100) {
    header.classList.add("black");
  }
});

// イベントタイマー
function countDown(due) {
  const now = new Date(); // 現在時刻を定義
  const rest = due.getTime() - now.getTime();
  // パラメータdueのミリ秒から定数nowのミリ秒を引いて定数restに代入
  const sec = Math.floor(rest / 1000) % 60; // 秒を定義
  const min = Math.floor(rest / 1000 / 60) % 60; // 分を定義
  const hours = Math.floor(rest / 1000 / 60 / 60) % 24; // 時間を定義
  const days = Math.floor(rest / 1000 / 60 / 60 / 24); // 日を定義
  const count = [days, hours, min, sec];

  return count;
}

// 升砲館EBR日程を定義
const goal1 = new Date(2024, 11, 14);

function recalc() {
  // Timer セクションが存在する場合のみタイマーを更新
  const timerSection = document.querySelector(".Timer");

  if (timerSection) {
    const counter = countDown(goal1);

    const dayElem = document.getElementById("timer-day");
    const hoursElem = document.getElementById("timer-hours");
    const minElem = document.getElementById("timer-min");
    const secElem = document.getElementById("timer-sec");

    if (dayElem && hoursElem && minElem && secElem) {
      dayElem.textContent = counter[0];
      hoursElem.textContent = counter[1];
      minElem.textContent = String(counter[2]).padStart(2, "0");
      secElem.textContent = String(counter[3]).padStart(2, "0");
    }

    refresh();
  }
}

function refresh() {
  setTimeout(recalc, 1000);
}

document.addEventListener("DOMContentLoaded", function () {
  recalc();
});
//イベントタイマーここまで

// Gallery 画像モーダル;
let modal = document.getElementById("imageModal");
let modalImg = document.getElementById("modalImage");
let captionText = document.getElementById("caption");
let galleryItems = document.querySelectorAll(
  ".galleryImg__listItem img, .galleryArchive__listItem img"
);

// モーダル表示時のスクロール位置を保存するための変数
let initialScrollY = 0;

galleryItems.forEach(function (item) {
  item.onclick = function () {
    modal.classList.add("show");
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;

    // モーダルを開いた時のスクロール位置を記録
    initialScrollY = window.scrollY;
  };

  let closeBtn = document.querySelector(".modal__close");
  closeBtn.onclick = function () {
    modal.classList.remove("show");
  };

  window.onclick = function (e) {
    if (e.target === modal) {
      modal.classList.remove("show");
    }
  };

  // 上下100px以上スクロールしたらモーダルを閉じる
  window.addEventListener("scroll", function () {
    if (modal.classList.contains("show")) {
      let currentScrollY = this.window.scrollY;
      if (Math.abs(currentScrollY - initialScrollY) > 500) {
        modal.classList.remove("show");
      }
    }
  });
});

// 申し込みリンクの表示
document.addEventListener("DOMContentLoaded", function () {
  const requestLink = document.querySelector(".requestLink");
  const requestLinkMobile = document.querySelector(".requestLink.-mobile");
  const hamburgerBtn = document.getElementById("js-hamburger");

  let isHamburgerMenuOpen = false; // 変数をスコープ内で定義

  // requestLink が存在する場合のみ処理を実行
  if (requestLink && requestLinkMobile) {
    // 初期表示時に現在のスクロール位置を確認してリンクを表示
    if (window.scrollY > 200) {
      requestLink.classList.add("show");
      requestLinkMobile.classList.add("show");
    }

    // スクロールイベントを監視
    window.addEventListener("scroll", function () {
      if (!isHamburgerMenuOpen) {
        // ハンバーガーメニューが開いていないときのみ処理を実行
        if (window.scrollY > 200) {
          requestLink.classList.add("show");
          requestLinkMobile.classList.add("show");
        } else {
          requestLink.classList.remove("show");
          requestLinkMobile.classList.remove("show");
        }
      }
    });
  }

  // ハンバーガーメニューのクリックでリンクボタンの表示/非表示をトグル
  if (hamburgerBtn) {
    hamburgerBtn.addEventListener("click", function () {
      isHamburgerMenuOpen = !isHamburgerMenuOpen; // ハンバーガーメニューの状態をトグル
      if (isHamburgerMenuOpen) {
        requestLinkMobile.classList.add("show");
      } else {
        requestLinkMobile.classList.remove("show");
      }
    });
  }
});
