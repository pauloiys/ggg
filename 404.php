<?php
header("HTTP/1.1 404 Not Found");
header("X-Robots-Tag: noindex, nofollow", true);

?>


<!DOCTYPE html>
<html>
    <head>
        
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-language" content="en-us">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@100;200;300;400;500;700;900&display=swap" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<title>404 - File or directory not found.</title>

<style type="text/css">
* {
    box-sizing: border-box;
}
html {
    font-size: 62.5%;
    background: #0A0B3B;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
    margin: 0;
    padding: 4vmin;
    color: #ffffff;
    font-size: 2rem;
    line-height: 1.4em;
    /*font-family: sans-serif;*/
    font-family: "Google Sans",arial,sans-serif;
    /*background: #f1f2f3;*/
    background: #f3f5fe !important;
    /* background: #0A0B3B !important; */
    scroll-behavior: smooth;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

::selection {
    text-shadow: none;
    background: #cbeafb;
}

.content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    max-width: 500px;
    min-height: 360px;
    margin: 0 0 4vmin;
    padding: 40px;
    text-align: center;
    background: #0A0B3B;
    border-radius: 20px;
    box-shadow:
        0 50px 100px -20px rgba(156, 146, 146, 0.08),
        0 30px 60px -30px rgba(177, 165, 165, 0.13),
        0 10px 20px -10px rgba(250, 240, 240, 0.08);
}

.content svg{
    display:block;
    width:50px;
    height:50px;
    fill:none !important;
    stroke:#ffffff;
    stroke-linecap:round;
    stroke-linejoin:round;
    stroke-width:1.5
    
}

h1 {
    margin: 0 0 0.3em;
    font-size: 4rem;
    line-height: 1em;
    font-weight: 700;
    letter-spacing: -0.02em;
}
p {
    margin: 0;
    opacity: 0.7;
    font-weight: 400;
}
img {
    display: block;
    margin: 0 auto 40px;
}
@media (max-width: 500px) {
    body { font-size: 1.8rem; }
    h1 { font-size: 3.4rem; }
}

.back-to-home {
    display: flex;
    margin-top: 20px;
    padding: 10px 20px;
    background: #ffffff;
    color: #0A0B3B;
    font-weight: 500;
    font-family: "Google Sans",arial,sans-serif;
    letter-spacing: 1px;
    text-decoration: none;
    border-radius: 11rem;
    transition: background-color 0.3s ease;
    justify-content: center;
    align-items: center;
}

.back-to-home:hover {
    background: #9a9aaf;
    color: #ffffff;
    cursor: pointer;
}

.back-to-home svg {
    width: 27px;
    height: auto;}

</style>

</head>

<body>
<div class="content">
  <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="12"></line><line x1="12" x2="12.01" y1="16" y2="16"></line></svg><br>
  <h1>404 - File or directory not found.</h1>
  <p>The resource you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
  <a class="back-to-home" onclick="redirectBack()">
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24">
      <path d="M15.5 3l-7.5 7.5 7.5 7.5" stroke="#0A0B3B" stroke-width="2" fill="none" />
    </svg>
    Back
  </a>
</div>
<script>
  function redirectBack() {
    const referrer = document.referrer;
    const currentURL = window.location.href;

    if (referrer.includes("google") || referrer.includes("facebook") || referrer.includes("external-site")) {
      window.location.href = "https://delasalle.lk";
    } else if (currentURL === "https://delasalle.lk/404") {
      window.history.go(-2);
    } else {
      window.history.back();
    }
  }
</script>




</body>
</html>