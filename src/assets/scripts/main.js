/* --------- 　ここから編集禁止  ------------- */
import "vite/modulepreload-polyfill";
console.info("\n %c Orelop WP - https://github.com/hilosiva/orelop-wp \n", "color: #66ffa5; background: #001010; padding:8px 0;");
import.meta.glob(["../images/**"]);
/* --------- 　ここまで編集禁止  ------------- */

import "../styles/global.css";


import hamburger from "./lib/btn.js";
import windowResize from "./lib/windowResize.js";
import ajax from "./lib/ajax.js";

new hamburger();
new windowResize();
new ajax();
