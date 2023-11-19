<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
  background-color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.triangle {
    stroke-dasharray: 17;
    animation: dash 2.5s cubic-bezier(0.35, 0.04, 0.63, 0.95) infinite;
}

@keyframes dash {
    to {
        stroke-dashoffset: 136;
    }
}

.loading {
    font-family: 'Orbitron', sans-serif;
    font-size: 7px;
    animation: blink .9s ease-in-out infinite;
}

@keyframes blink {
    50% {
        opacity: 0;
    }
}
  </style>
</head>
<body>
  <svg width="200" height="200" viewBox="0 0 40 60">
    <polygon class="triangle" fill="none" stroke="#fff" stroke-width="1" points="16,1 32,32 1,32" />
    <text class="loading" x="0" y="45" fill="#fff">Loading...</text>
</svg>

</body>
</html>
