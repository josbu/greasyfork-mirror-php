<?php
echo <<<ADSNBIDHJ
<section class="text-content">
      <h2 class="super-title">欢迎来到 Greasy Fork，一个专注于用户脚本的网站。</h2>
      <div id="home-script-nav">
        <form class="home-search" action="/zh-CN/scripts" accept-charset="UTF-8" method="get">
          <input type="search" name="q" placeholder="搜索用户脚本">
          <input type="submit" value="🔎" class="search-submit">
        </form>
        <div id="home-top-sites">
          脚本适用于：
          <a href="/zh-CN/scripts/by-site/baidu.com">baidu.com</a>
          <a href="/zh-CN/scripts/by-site/bilibili.com">bilibili.com</a>
          <a href="/zh-CN/scripts/by-site/qq.com">qq.com</a>
          <a href="/zh-CN/scripts/by-site/youtube.com">youtube.com</a>
          <a href="/zh-CN/scripts/by-site/youku.com">youku.com</a>
          <a href="/zh-CN/scripts/by-site">更多...</a>
        </div>
      </div>
      <section>
        <h3>用户脚本是什么？</h3>
        <p>用户脚本让您掌控网页浏览体验。安装后，它们能自动改善您访问网站的使用体验，有些能为网站添加新功能，有些能使网站更易于使用，有些能让网站隐藏烦人内容。Greasy Fork
          上的用户脚本都是由用户编写并向全世界发布，您能免费安装它们，并且轻松使用。</p>
      </section>
      <section id="home-step-1">
        <h3>第 1 步：安装一个用户脚本管理器</h3>
        <figure>
          <img width="300" height="177" src="../assets/tampermonkey-manage-BuqpPkri.webp">
          <figcaption>Chrome 上的 Tampermonkey</figcaption>
        </figure>
        <p>要使用用户脚本，您首先需要安装一个用户脚本管理器。您可以根据当前使用的浏览器来选择一个用户脚本管理器。</p>
        <p>
          <span class="browser-list-selector browser-list-selector-active" data-for="desktop-browser-list">桌面端</span>
          <span class="browser-list-selector" data-for="android-browser-list">移动端（Android）</span>
          <span class="browser-list-selector" data-for="ios-browser-list">移动端（iOS）</span>
        </p>
        <div id="desktop-browser-list" class="browser-list" style="display: block;">
          <ul>
            <li>Chrome：<a
                href="https://chrome.google.com/webstore/detail/tampermonkey/dhdgffkkebhmkfjojejmpbldmpobfkfo">Tampermonkey</a>
              或 <a
                href="https://chrome.google.com/webstore/detail/violent-monkey/jinjaccalgkegednnccohejagnlnfdag">Violentmonkey</a>
            </li>
            <li>Firefox：<a href="https://addons.mozilla.org/firefox/addon/greasemonkey/">Greasemonkey</a>、<a
                href="https://addons.mozilla.org/firefox/addon/tampermonkey/">Tampermonkey</a> 或 <a
                href="https://addons.mozilla.org/firefox/addon/violentmonkey/">Violentmonkey</a></li>
            <li>Safari：<a href="https://www.tampermonkey.net/?browser=safari">Tampermonkey</a> 或 <a
                href="https://apps.apple.com/app/userscripts/id1463298887">Userscripts</a></li>
            <li>Microsoft Edge：<a
                href="https://microsoftedge.microsoft.com/addons/detail/tampermonkey/iikmkjmpaadaobahmlepeloendndfphd">Tampermonkey</a>
              或 <a
                href="https://microsoftedge.microsoft.com/addons/detail/violentmonkey/eeagobfjdenkkddmbclomhiblgggliao">Violentmonkey</a>
            </li>
            <li>Opera：<a href="https://addons.opera.com/extensions/details/tampermonkey-beta/">Tampermonkey</a> 或 <a
                href="https://violentmonkey.github.io/get-it/">Violentmonkey</a></li>
            <li>Maxthon：<a href="http://extension.maxthon.com/detail/index.php?view_id=1680">Violentmonkey</a></li>
            <li>AdGuard：<a href="https://adguard.com/">AdGuard</a>（不需要其他软件）</li>
          </ul>
        </div>
        <div id="android-browser-list" class="browser-list" style="display: none;">
          <ul>
            <li>Firefox: <a href="https://addons.mozilla.org/firefox/addon/greasemonkey/">Greasemonkey</a>、<a
                href="https://addons.mozilla.org/firefox/addon/tampermonkey/">Tampermonkey</a> 或 <a
                href="https://addons.mozilla.org/firefox/addon/violentmonkey/">Violentmonkey</a></li>
            <li>Microsoft Edge: <a
                href="https://microsoftedge.microsoft.com/addons/detail/tampermonkey/iikmkjmpaadaobahmlepeloendndfphd">Tampermonkey</a>
            </li>
            <li>Maxthon: <a href="http://extension.maxthon.com/detail/index.php?view_id=1680">Violentmonkey</a></li>
            <li>Dolphin: <a
                href="https://play.google.com/store/apps/details?id=net.tampermonkey.dolphin">Tampermonkey</a></li>
            <li>UC: <a href="https://www.tampermonkey.net/?browser=ucweb&amp;ext=dhdg">Tampermonkey</a></li>
            <li>Kiwi: <a
                href="https://chromewebstore.google.com/detail/tampermonkey-legacy/lcmhijbkigalmkeommnijlpobloojgfn">Tampermonkey</a>
              或 <a
                href="https://chrome.google.com/webstore/detail/violent-monkey/jinjaccalgkegednnccohejagnlnfdag">Violentmonkey</a>
            </li>
            <li><a href="https://www.xbext.com/">XBrowser</a></li>
            <li><a href="https://www.bookmarkearth.cn/download/app">书签地球</a></li>
            <li><a href="http://mbrowser.nr19.cn/">M浏览器</a></li>
            <li><a href="https://www.lemurbrowser.com/">狐猴浏览器</a>：<a
                href="https://chrome.google.com/webstore/detail/tampermonkey/dhdgffkkebhmkfjojejmpbldmpobfkfo">Tampermonkey</a>
            </li>
          </ul>
        </div>
        <div id="ios-browser-list" class="browser-list" style="display: none;">
          <ul>
            <li>Safari：<a href="https://www.tampermonkey.net/?browser=safari">Tampermonkey</a> 或 <a
                href="https://apps.apple.com/app/userscripts/id1463298887">Userscripts</a></li>
            <li><a href="https://gear4.app/">Gear</a>：（不需要其他软件）
            </li>
          </ul>
        </div>
      </section>
      <section id="home-step-2">
        <h3>第 2 步：安装一个用户脚本</h3>
        <figure>
          <img width="300" height="213" src="../assets/install-button-example-BBN84I79.webp">
          <figcaption>用户脚本的安装按钮</figcaption>
        </figure>
        <p><a href="/zh-CN/scripts">浏览本网站</a>，找到您想尝试的用户脚本。以下是一些最受欢迎的脚本例子：</p>
        <ul>
          <li><a class="script-link" href="/zh-CN/scripts/29444-wallhaven-enhance">Wallhaven
              壁纸网站增强</a> - <span class="script-description">Wallhaven 是最酷的壁纸网站，本脚本为该网站提供了额外的功能，能让你更畅快的寻找到喜欢的图片。</span>
          </li>
          <li><a class="script-link"
              href="/zh-CN/scripts/444542-%E8%87%AA%E5%8A%A8%E6%92%AD%E6%94%BE%E7%BD%91%E8%AF%BE">自动播放网课</a>
            - <span class="script-description">网课视频自动播放下一级</span></li>
          <li><a class="script-link"
              href="/zh-CN/scripts/444713-%E7%BD%91%E8%B4%AD%E4%BC%98%E6%83%A0%E6%9F%A5%E8%AF%A2%E5%B0%8F%E5%8A%A9%E6%89%8B-%E6%B7%98%E5%AE%9D-%E5%A4%A9%E7%8C%AB-%E4%BA%AC%E4%B8%9C%E9%9A%90%E8%97%8F%E4%BC%98%E6%83%A0%E5%88%B8%E8%87%AA%E5%8A%A8%E6%9F%A5%E8%AF%A2-%E6%90%9C%E7%B4%A2%E7%BB%93%E6%9E%9C%E4%BC%98%E6%83%A0%E5%88%B8%E4%BF%A1%E6%81%AF%E7%9B%B4%E6%8E%A5%E5%B1%95%E7%A4%BA-%E6%97%A0%E9%9C%80%E8%BF%9B%E5%85%A5%E8%AF%A6%E6%83%85%E9%A1%B5-%E5%BF%AB%E9%80%9F%E5%AF%B9%E6%AF%94%E5%90%8C%E6%AC%BE%E4%BC%98%E6%83%A0%E4%BF%A1%E6%81%AF-%E6%8C%81%E7%BB%AD%E7%BB%B4%E6%8A%A4%E4%B8%AD">网购优惠查询小助手，淘宝、天猫、京东隐藏优惠券自动查询，搜索结果优惠券信息直接展示，无需进入详情页，快速对比同款优惠信息，持续维护中</a>
            - <span
              class="script-description">网购优惠查询小助手功能：1，淘宝、天猫商品详情页自动显示优惠券信息，包括隐藏优惠券的信息，点击领券按钮可快速领取优惠券。2.淘宝、天猫、京东搜索商品列表，每个商品自动显示优惠券面额，为你提供快速对比的效果！</span>
          </li>
          <li><a class="script-link"
              href="/zh-CN/scripts/491265-bf1tracker%E8%87%AA%E5%8A%A8%E8%8E%B7%E5%8F%96%E7%8E%A9%E5%AE%B6%E5%90%8D">BF1Tracker自动获取玩家名</a>
            - <span class="script-description">自动获取玩家名</span></li>
          <li><a class="script-link"
              href="/zh-CN/scripts/512781-baiduaiposition">BaiduAiPosition</a> - <span
              class="script-description">try to take over the world!</span></li>
        </ul>
        <p>在您找到想要的用户脚本后，点击用户脚本页面上绿色的安装按钮，您的用户脚本管理器将向您确认是否安装。</p>
      </section>
      <section id="home-step-3">
        <h3>第 3 步：使用用户脚本</h3>
        <p>现在您可以访问这个用户脚本所针对的网站，脚本应该已经自动启动和生效。在试用一段时间之后，您可以回到用户脚本发表的页面，给用户脚本的作者留下反馈。</p>
      </section>
    </section>
ADSNBIDHJ;