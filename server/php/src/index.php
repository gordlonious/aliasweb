<?php include 'set_session_alias.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="A personal website for alias web." />
    <title>aliasweb</title>
    <link rel="icon" type="image/png" href="aliasweb.png">
    <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="header_body_footer_default.css">
    <link rel="stylesheet" type="text/css" href="divisors.css">
    <link rel="stylesheet" type="text/css" href="default_access.css">
    <style type="text/css">
      article > p, article h1 {
        color: white;
        margin: 0;
        text-align: center;
        font-family: "Merienda", "Kalam", fantasy;
      }
      .header__divisor {
        width: 2em;
      }
      .header__vocationanchor {
        --vocation-g: #039e1d;
        --vocation-gb: #2cf59a;
        color: white;
        text-decoration: none;
      }
      .header__vocationanchor > span:nth-child(1) {
        color: var(--vocation-g);
        font-style: oblique 30deg;
        font-weight: 900;
      }
      .header__vocationanchor > span:nth-child(2) {
        color: var(--vocation-g);
        text-decoration: underline solid var(--vocation-g);
      }
      .header__vocationanchor:hover {
        color: var(--vocation-gb);
        cursor: pointer;
        text-decoration: none;
      }
      .header__vocationanchor:hover > span {
        color: white;
        cursor: pointer;
        text-decoration: none;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="top_interests.css">
  </head>
  <body>
    <header>
      <a>
        <img src="aliasweb.png" alt="" />
        <p><span><?php include 'get_session_alias.php';?></span> Web</p>
      </a>
      <div class="header__divisor"></div>
      <a class="header__vocationanchor" href="vocation.php">><span>V</span><span>ocational<span></a>
    </header>
    <article>
      <div class="aliascontainer">
        <h1>Hi. I'm <span class="alias"><?php include 'get_session_alias.php';?>.<span class="aliasinfo">An alias. You'll need to earn a business badge to see my real name.</span></span></h1>
      </div>
      <br />
      <p>I'm a programmer who wants to keep his skills up, collaborate with peers, and provide employers with vital information. Please peruse the site at your leisure!</p>
      <p>I have a lot of unfinished projects and interests. Please help! See the list below to find out more.</p>
      <br />
      <h3>Top Interests</h3>
      <ul>
        <li><a href="skateboarding.php">Skateboarding</a></li>
        <li>Free software</li>
        <li>Gaming</li>
        <li>Learning languages</li>
        <li>Basketball</li>
        <li>Music & guitar</li>
        <li>Daydreams</li>
      </ul>
      <br />
      <div class="med-division"></div>
    </article>
    <footer>
      <p>&#9888;More content is available to verified users&#9888;</p>
      <br />
      <p>&#169;copyright! jk not really&#169;</p>
    </footer>
  </body>
</html>
