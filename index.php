<?php /* Beads by Ruky - Home with Teaser + About + Socials */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Beads by Ruky - Handmade Jewelry</title>
<style>
:root{
  --pink1:#ff9a9e;
  --pink2:#fecfe8;
  --pink3:#fad0c4;
}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{
  font-family:'Segoe UI',sans-serif;
  background:linear-gradient(135deg,var(--pink1),var(--pink2),var(--pink3));
  min-height:100vh;
  color:#4a2c2a;
}
.glass{
  background:rgba(255,255,255,0.25);
  backdrop-filter:blur(12px);
  -webkit-backdrop-filter:blur(12px);
  border:1px solid rgba(255,255,255,0.3);
  border-radius:20px;
  box-shadow:0 8px 32px rgba(0,0,0,0.1);
}
nav{
  padding:20px;
  margin:20px;
  display:flex;
  justify-content:space-between;
  align-items:center;
}
nav h1{font-size:28px;font-weight:700}
nav a{
  margin:0 15px;
  text-decoration:none;
  color:#4a2c2a;
  font-weight:600;
  transition:0.3s;
}
nav a:hover{color:#d63384}
.hero{
  text-align:center;
  padding:60px 20px;
  margin:0 20px;
}
.hero h2{
  font-size:48px;
  margin-bottom:20px;
  text-shadow:2px 2px 10px rgba(0,0,0,0.1);
}
.hero p{font-size:20px;margin-bottom:30px}
.teaser-img{
  max-width:400px;
  width:100%;
  border-radius:20px;
  margin:30px auto;
  box-shadow:0 8px 32px rgba(0,0,0,0.15);
}
.btn{
  display:inline-block;
  padding:15px 40px;
  background:linear-gradient(135deg,#ff6b9d,#ff8fab);
  color:white;
  border-radius:50px;
  text-decoration:none;
  font-weight:700;
  transition:0.3s;
  box-shadow:0 5px 20px rgba(255,107,157,0.4);
}
.btn:hover{transform:translateY(-3px);box-shadow:0 8px 30px rgba(255,107,157,0.6)}
.features{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:20px;
  padding:40px 20px;
}
.feature{padding:30px;text-align:center}
.feature h3{margin-bottom:15px;color:#d63384}
.about{
  max-width:800px;
  margin:40px auto;
  padding:40px 30px;
  text-align:center;
}
.about h1{font-size:36px;margin-bottom:20px;color:#d63384}
.about h1 a{text-decoration:none;color:#d63384;transition:0.3s}
.about h1 a:hover{color:#ff6b9d}
.about p{font-size:18px;line-height:1.7;margin-bottom:15px}
.socials{
  display:flex;
  justify-content:center;
  gap:25px;
  margin-top:25px;
  flex-wrap:wrap;
}
.socials a{
  display:flex;
  align-items:center;
  gap:8px;
  text-decoration:none;
  color:#4a2c2a;
  font-weight:600;
  padding:12px 20px;
  border-radius:50px;
  background:rgba(255,255,255,0.4);
  transition:0.3s;
}
.socials a:hover{background:rgba(255,255,255,0.7);transform:translateY(-2px)}
.socials svg{width:22px;height:22px}
footer{text-align:center;padding:30px;margin:20px}
@media(max-width:768px){
  nav{flex-direction:column;gap:15px}
  .hero h2{font-size:32px}
  .about{padding:30px 20px}
</style>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="shortcut icon" href="/favicon.ico">
</head>
<body>
<nav class="glass">
  <h1>💫 Beads by Ruky</h1>
  <div>
    <a href="index.php">Home</a>
    <a href="#about">About</a>
    <a href="gallery.php">Gallery</a>
    <a href="comments.php">Reviews</a>
  </div>
</nav>

<div class="hero glass">
  <h2>Handcrafted Beaded Jewelry</h2>
  <p>Each piece made by Ruky, with love and good vibes only 💖</p>
  
  <!-- TEASER IMAGE EMBEDDED -->
  <img src="img.png" alt="Something Elegant Coming Soon" class="teaser-img glass">
  
  <a href="gallery.php" class="btn">Shop the Collection</a>
</div>

<div class="features">
  <div class="feature glass">
    <h3>🌸 Handmade by Ruky</h3>
    <p>Every bead placed by hand. No mass production, just craft.</p>
  </div>
  <div class="feature glass">
    <h3>💎 Quality Materials</h3>
    <p>Glass, natural stone, and seed beads that last.</p>
  </div>
  <div class="feature glass">
    <h3>📩 Send a DM to order</h3>
    <p>DM on Instagram for custom orders & pricing</p>
  </div>
</div>

<!-- PROPER ABOUT SECTION -->
<section id="about" class="about glass">
  <h1><a href="index.php">About Beads by Ruky</a></h1>
  <p>Beads by Ruky is a handmade jewelry brand created by Rukayya Abdullahi Ahmad. Every piece is designed with elegance, color, and attention to detail.</p>
  <p>From statement necklaces to delicate anklets, each item is crafted to make you feel confident and beautiful.</p>
  
  <div class="socials">
    <a href="https://instagram.com/beads_by_ruky" target="_blank">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
      @beads_by_ruky
    </a>
    <a href="mailto:Rukayyaabdullahiahmad2009@gmail.com">
      <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
      Email Ruky
    </a>
  </div>
</section>

<footer class="glass">
  <p>© 2026 Beads by Ruky | Developed by <a href="https://v1.my-board.org" target="_blank" style="color:#d63384;font-weight:700;text-decoration:none">abdulabu</a></p>
</footer>
</body>
</html>
 