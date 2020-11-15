<style>
* {
  box-sizing: border-box;
}
:root {
  --page-count: <?=$page_count;?>;
  --page-scroll: <?=$page_scroll;?>;
  --underline: rgba(64,64,64,0.4);
  --spine: #000;
  --cover: #1a1a1a;
  --bg: #4d4d4d;
  --insert: #d9d9d9;
  --page: #e6e6e6;
}
body {
  width: 100vw;
  height: calc(((var(--page-count) + 2) * var(--page-scroll)) * 1vh);
  background: var(--bg);
  overflow-x: hidden;
}
h1 {
  text-align: center;
  font-size: 1rem;
  margin: 0;
  padding: 0;
}
.page {
  height: 100%;
  width: 100%;
  position: relative;
  transform-style: preserve-3d;
}
.page .page__number {
  position: absolute;
  color: #808080;
  bottom: 1rem;
  font-size: 1vmin;
}
.page__half--front .page__number {
  right: 1rem;
}
.page__half--back .page__number {
  left: 1rem;
}
.page__half {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  transform: rotateY(calc(var(--rotation) * 1deg)) translate3d(0, 0, calc((0.5 * var(--coefficient)) * 1px));
  -webkit-clip-path: inset(0 0.5% 0 0.5%);
  clip-path: inset(0 0.5% 0 0.5%);
}
.page__half--front {
  --rotation: 0;
  --coefficient: 0;
  backface-visibility: hidden;
  border-radius: 0 5% 5% 0;
}
.page__half--back {
  --rotation: 180;
  --coefficient: 2;
  border-radius: 5% 0 0 5%;
}
.book {
  height: <?=$height ?>;
  position: fixed;
  width: <?=$width ?>;
  min-width: 150px;
  min-height: 200px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0.5);
  transform-style: preserve-3d;
  perspective: 1200px;
}
.book__insert {
  content: '';
  position: absolute;
  height: 94%;
  width: 94%;
  background: var(--insert);
  top: 50%;
  right: -1rem;
  transform: translate(0, -50%);
  border-radius: 5% 0 0 5%;
}
/* 書桿 */
.book__spine {
  height: 100%;
  left: 0;
  top: 0;
  position: absolute;
  background: var(--spine);
  transform-origin: 0 50%;
  width: 12px;
  transform: translate3d(0, 0, -13px) scaleX(1) rotateY(0deg);
}
.book__page {
  position: absolute;
  left: 2%;
  top: 50%;
  border-radius: 0 5% 5% 0;
  transform: translate(0, -50%);
  height: 94%;
  width: 94%;
  z-index: calc(((var(--page-count) + 2) - var(--page-index)) * 2);
  transform-origin: 0% 50%;
}
/* 書套 */
.book__cover {
  border-radius: 0 5% 5% 0;
  height: 100%;
  width: 100%;
  position: absolute;
  top: 50%;
  left: 0;
  background: var(--cover);
}
.book__cover--front {
  transform-origin: 0 50%;
}
.book__cover--front .page__half--back {
  border-right: 1rem solid var(--spine);
}
.book__cover--back {
  transform-origin: 0% 50%;
}
.book__cover--back .page__half--front {
  border-left: 1rem solid var(--spine);
}
.book__cover--back .book__insert {
  left: 0;
  border-radius: 0 5% 5% 0;
}
.book__page:not(.book__cover) .page__half {
  background: repeating-linear-gradient(0deg, transparent 0 1rem, var(--underline) 1rem calc(1rem + 1px), transparent calc(1rem + 1px)) 0 1rem/100% 100% no-repeat, var(--page);
}
.sticker {
  height: 15%;
  position: absolute;
  bottom: 5%;
  right: 5%;
  transform: rotate(-25deg);
}
.code {
  line-height: 1.2;
  font-family: monospace;
  white-space: pre-line;
  max-width: 100%;
  max-height: 100%;
  font-weight: bold;
  color: #0f0f0f;
  text-shadow: 2px 2px 0 #1c1c1c;
  border-radius: 5%;
  display: block;
  overflow: hidden;
}
/* logo 漸進 */
.gsap-logo {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  height: 50%;
}
img {
  width: 90%;
  height: 90%;
  object-fit: center;
  z-index: 2;
}
</style>
