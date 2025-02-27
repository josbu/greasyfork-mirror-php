<?php
    if(!isset($title)){
        exit();
    }
    $head = <<<FHGJYEBFVUJ
    <!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style type="text/css">
    .turbo-progress-bar {
      position: fixed;
      display: block;
      top: 0;
      left: 0;
      height: 3px;
      background: #0076ff;
      z-index: 2147483647;
      transition:
        width 300ms ease-out,
        opacity 150ms 150ms ease-in;
      transform: translate3d(0, 0, 0);
    }
  </style>
  <title>$title</title>
  <meta name="description"
    value="Greasy Fork is a free site providing user scripts to improve your web browsing experience.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/application-DyloG9uD.css" media="screen">
</head>
<body>
  <header id="main-header">
    <div class="width-constraint">
      <div id="site-name">
        <img alt="" width="96" height="96" src="/assets/blacklogo96-CxYTSM_T.png">
        <div id="site-name-text">
          <h1>Greasy Fork</h1>
        </div>
      </div>
      <div id="site-nav">
        <div id="nav-user-info">
        </div>
        <nav>
          <li class="scripts-index-link"><a href="/zh-CN/scripts">脚本</a></li>
          <li class="help-link"><a href="/zh-CN/help">帮助</a></li>
          <li class="with-submenu">
            <a href="/zh-CN#" onclick="return false">更多</a>
            <nav>
          <li><a href="/zh-CN/search">高级搜索</a></li>
          <li><a href="/zh-CN/users">用户列表</a></li>
          <li><a href="/zh-CN/scripts/libraries">库</a></li>
          <li><a href="/zh-CN/moderator_actions">管理日志</a></li>
        </nav>
        </li>
        </nav>
      </div>
      <div id="mobile-nav">
        <div class="mobile-nav-opener">☰</div>
        <nav class="collapsed">
          <li class="scripts-index-link"><a href="/zh-CN/scripts">脚本</a></li>
          <li class="forum-link"><a href="/zh-CN/discussions">论坛</a></li>
          <li class="help-link"><a href="/zh-CN/help">帮助</a></li>
          <li><a href="/zh-CN/search">高级搜索</a></li>
          <li><a href="/zh-CN/users">用户列表</a></li>
          <li><a href="/zh-CN/scripts/libraries">库</a></li>
          <li><a href="/zh-CN/moderator_actions">管理日志</a></li>
        </nav>
      </div>
      <script>
        document.querySelector(".mobile-nav-opener").addEventListener('click', () => {
          let nav = document.querySelector('.collapsed')
          if (!nav.style.display) {
            nav.style.display = 'block'
          } else {
            nav.style.display = ''
          }
        })
        let titlle = document.querySelector('#site-name-text')
        titlle.addEventListener('click',()=>{location.href='/zh-CN'})
        titlle.style.cursor='pointer'
      </script>
    </div>
  </header>
  <div class="width-constraint">
FHGJYEBFVUJ;
echo $head;
?>