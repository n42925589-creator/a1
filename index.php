<?php
// Rainwear Bronze — homepage
function e($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
$m = (int) date('n');
$months = [
  1 => ['January', 'Cold rain and sleet call for a waterproof shell over a warm mid-layer. Keep the hood adjusted so it turns with your head.'],
  2 => ['February', 'Late-winter showers and wind make a hip-length jacket with a storm flap worth its weight. Check zips and cuffs before spring.'],
  3 => ['March', 'Changeable spring weather is ideal for a packable layer that lives in your bag. Refresh the water repellency after a winter of use.'],
  4 => ['April', 'Sudden April showers suit a lightweight mac or a breathable shell that is easy to pull on and off between sunny spells.'],
  5 => ['May', 'Warmer rain means breathability matters most. Look for vents, mesh-lined pockets and lighter fabrics.'],
  6 => ['June', 'Summer storms can be heavy but brief. A packable jacket with fully taped seams is a smart travel companion.'],
  7 => ['July', 'Festival and holiday season: a bright packable raincoat keeps you dry and easy to spot in a crowd.'],
  8 => ['August', 'Humid late-summer rain is where pit zips and an open front earn their place. Rinse jackets after beach trips.'],
  9 => ['September', 'Autumn rains return. Wash and reproof your jacket now so the outer fabric beads water again.'],
  10 => ['October', 'Windy, wet days are here. A longer cut, an adjustable hood and snug cuffs make the biggest difference.'],
  11 => ['November', 'Dark, rainy commutes: choose a jacket with reflective details and pair it with waterproof footwear.'],
  12 => ['December', 'Cold, wet weather rewards layering. A shell over an insulated jacket keeps the down or fibre dry and warm.'],
];
$now = $months[$m];
$reproof = in_array($m, [3, 4, 9, 10]);
$msg = ''; $ok = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nl_email'])) {
    $email = trim((string) filter_input(INPUT_POST, 'nl_email', FILTER_SANITIZE_EMAIL));
    if (!empty($_POST['website'])) { $ok = true; $msg = 'Thank you.'; }
    elseif ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        @file_put_contents(__DIR__ . '/subscribers.txt', date('c') . "\t" . $email . PHP_EOL, FILE_APPEND | LOCK_EX);
        $ok = true; $msg = 'Thank you. Your first Bronze Forecast arrives at the start of next month.';
    } else { $msg = 'Please enter a valid email address.'; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rainwear Bronze | Rain Jacket Guide: Waterproof Ratings, Fabrics &amp; Care</title>
<meta name="description" content="An independent rain jacket guide: waterproof ratings explained, hardshell vs trench vs waxed cotton, choosing a jacket for city, hiking or cycling, and how to care for it.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://www.rainwearbronze.com/">
<meta property="og:type" content="website"><meta property="og:site_name" content="Rainwear Bronze">
<meta property="og:title" content="Rainwear Bronze | Rain Jacket Guide: Waterproof Ratings, Fabrics &amp; Care"><meta property="og:description" content="An independent rain jacket guide: waterproof ratings explained, hardshell vs trench vs waxed cotton, choosing a jacket for city, hiking or cycling, and how to care for it.">
<meta property="og:url" content="https://www.rainwearbronze.com/"><meta property="og:image" content="https://images.unsplash.com/photo-1559022488-570ad0c1e43c?auto=format&fit=crop&w=1200&q=75">
<meta name="twitter:card" content="summary_large_image"><meta name="theme-color" content="#1B252B">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 40 40'%3E%3Crect width='40' height='40' rx='8' fill='%231B252B'/%3E%3Cpath d='M20 5C15 13 11 18 11 24a9 9 0 0 0 18 0c0-6-4-11-9-19Z' fill='%23B07A3E'/%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="preconnect" href="https://images.unsplash.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
<script type="application/ld+json">[{"@context": "https://schema.org", "@type": "Organization", "name": "Rainwear Bronze", "url": "https://www.rainwearbronze.com/", "email": "hello@rainwearbronze.com", "telephone": "+1-888-777-5845", "address": {"@type": "PostalAddress", "streetAddress": "181 Mercer Street", "addressLocality": "New York", "addressRegion": "NY", "postalCode": "10012", "addressCountry": "US"}}, {"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "What does a waterproof rating in mm mean?", "acceptedAnswer": {"@type": "Answer", "text": "It is the hydrostatic head: the height, in millimetres, of a column of water a fabric can hold back before water starts to push through. A 10,000 mm fabric resists the pressure of a 10-metre column of water. Higher numbers indicate better resistance to heavy rain and pressure from straps or kneeling."}}, {"@type": "Question", "name": "What is the difference between water-resistant and waterproof?", "acceptedAnswer": {"@type": "Answer", "text": "Water-resistant fabrics shed light rain for a while, usually thanks to a tight weave or a water-repellent finish. Waterproof jackets use a membrane or coating plus sealed seams so that water cannot get through, even in sustained rain."}}, {"@type": "Question", "name": "Why do I feel wet inside my rain jacket?", "acceptedAnswer": {"@type": "Answer", "text": "Often it is condensation rather than a leak. When you are active, sweat vapour can condense on the inside of the jacket, especially in cold, humid weather. Opening vents, choosing a more breathable fabric and refreshing the outer water-repellent finish all help."}}, {"@type": "Question", "name": "What is DWR?", "acceptedAnswer": {"@type": "Answer", "text": "DWR stands for durable water repellent, a finish on the outer fabric that makes rain bead up and roll off. When it wears out, the face fabric soaks up water (called wetting out), which reduces breathability even if the jacket is still waterproof."}}, {"@type": "Question", "name": "How often should I wash my rain jacket?", "acceptedAnswer": {"@type": "Answer", "text": "Wash it whenever it looks dirty or starts to wet out, and typically a few times per season if you use it regularly. Dirt, sweat and sunscreen clog the fabric and weaken water repellency."}}, {"@type": "Question", "name": "Does Rainwear Bronze sell jackets?", "acceptedAnswer": {"@type": "Answer", "text": "No. Rainwear Bronze is an independent educational guide. We do not sell jackets and we are not affiliated with any brand or retailer."}}]}]</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="hdr">
  <div class="wrap">
    <a class="logo" href="index.php" aria-label="Rainwear Bronze home"><svg viewBox="0 0 40 40" aria-hidden="true"><path d="M20 3C14 12 9 18 9 25a11 11 0 0 0 22 0c0-7-5-13-11-22Z" fill="#B07A3E"/><path d="M15 26a5 5 0 0 0 5 5" fill="none" stroke="#F7F6F2" stroke-width="2" stroke-linecap="round"/><path d="M5 8l2 5M33 6l2 5M2 18l2 5" stroke="#6E8B99" stroke-width="2" stroke-linecap="round"/></svg><span>RAINWEAR BRONZE<small>JACKETS FOR WET WEATHER</small></span></a>
    <nav id="nav" aria-label="Main navigation"><ul class="nav"><li><a href="index.php" aria-current="page">Home</a></li><li><a href="rain-jacket-guide.html">Jacket Guide</a></li><li><a href="care-repair.html">Care &amp; Repair</a></li><li><a href="about.html">About</a></li><li><a href="contact.html">Contact</a></li></ul></nav>
    <button class="burger" aria-label="Open menu" aria-expanded="false" aria-controls="nav"><span></span><span></span><span></span></button>
  </div>
</header>
<main id="main">
<section class="hero">
  <img src="https://images.unsplash.com/photo-1559022488-570ad0c1e43c?auto=format&fit=crop&w=1800&q=75" alt="man in a raincoat standing on the shore facing the sea in the rain" width="1800" height="1200" fetchpriority="high">
  <div class="wrap">
    <div>
      <span class="kicker" style="color:var(--bronze-lt)">The rain jacket handbook</span>
      <h1>Stay dry. Stay comfortable. <span>Love the rain.</span></h1>
      <p class="lead">Rainwear Bronze is an independent guide to rain jackets. We explain waterproof ratings, breathable fabrics, cuts and care in plain language, so you can choose and look after the right jacket for your weather.</p>
      <div class="ctas"><a class="btn" href="#rating">Read the ratings</a><a class="btn btn--ghost" href="rain-jacket-guide.html">Rain jacket guide</a></div>
    </div>
    <aside class="fcard" aria-labelledby="mo-t">
      <div class="pic"><img src="https://images.unsplash.com/photo-1780246330848-5cc94f381360?auto=format&fit=crop&w=600&q=75" alt="teal umbrella covered in small water droplets" width="600" height="375"></div>
      <span class="badge"><?php echo strtoupper(e($now[0])); ?> OUTLOOK</span>
      <h2 id="mo-t">Rainwear for <?php echo e($now[0]); ?></h2>
      <p><?php echo e($now[1]); ?></p>
      <?php if ($reproof): ?><p style="color:var(--copper);font-weight:600;margin:0">Reproofing season: <a href="care-repair.html">refresh your jacket&#8217;s water repellency</a>.</p><?php endif; ?>
    </aside>
  </div>
</section>
<section class="ticker" aria-label="Rain jacket facts">
  <div class="wrap">
    <div><b>10,000 mm</b><span>a common waterproof benchmark</span></div>
    <div><b>3 layers</b><span>face fabric, membrane and lining</span></div>
    <div><b>DWR</b><span>the finish that makes rain bead up</span></div>
    <div><b>100%</b><span>taped seams in a fully waterproof jacket</span></div>
  </div>
</section>

<section class="sec dark rainfx" id="rating" aria-labelledby="rt-t">
  <div class="wrap rail">
    <div class="num">01<small>RATINGS</small></div>
    <div>
      <div class="head2"><div><span class="kicker">Waterproof gauge</span><h2 id="rt-t">What the millimetre rating really means</h2></div><p class="muted">Slide through common hydrostatic head ratings to see what each level of protection is suited to. Breathability, seams and fit matter just as much in real rain.</p></div>
      <div class="rate">
        <div class="gauge">
          <label for="hh">Hydrostatic head</label>
          <div class="val" id="hh-val">10,000 <small>mm</small></div>
          <input type="range" id="hh" min="1000" max="30000" step="1000" value="10000" aria-describedby="hh-desc">
          <div class="column"><div class="tube" aria-hidden="true"><i id="hh-tube" style="height:33%"></i></div><div class="rate-out" aria-live="polite"><h3 id="hh-name">Waterproof</h3><p id="hh-desc">Comfortable in moderate rain for a few hours.</p></div></div>
        </div>
        <ul class="scale">
          <li><b>Under 5,000</b><span>Water resistant: light drizzle and mist</span></li>
          <li><b>5,000&ndash;10,000</b><span>Showerproof: light rain, short exposures</span></li>
          <li class="on"><b>10,000&ndash;15,000</b><span>Waterproof: moderate rain for hours</span></li>
          <li><b>15,000&ndash;20,000</b><span>Very waterproof: heavy rain, pack straps</span></li>
          <li><b>20,000+</b><span>Storm-proof: sustained heavy, wind-driven rain</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="sec" aria-labelledby="ty-t">
  <div class="wrap rail">
    <div class="num">02<small>STYLES</small></div>
    <div>
      <div class="head2"><div><span class="kicker">Jacket types</span><h2 id="ty-t">Four rain jackets worth knowing</h2></div><p class="muted">Each style balances protection, breathability, weight and looks differently. Use the arrow keys or tap a tab to compare.</p></div>
      <div class="ttabs" role="tablist" aria-label="Rain jacket types"><button type="button" role="tab" id="t-shell" aria-controls="p-shell" aria-selected="true" tabindex="0">Hardshell</button><button type="button" role="tab" id="t-trench" aria-controls="p-trench" aria-selected="false" tabindex="-1">Trench coat</button><button type="button" role="tab" id="t-wax" aria-controls="p-wax" aria-selected="false" tabindex="-1">Waxed cotton</button><button type="button" role="tab" id="t-mac" aria-controls="p-mac" aria-selected="false" tabindex="-1">Packable mac</button></div>
      <div class="tpanel" role="tabpanel" id="p-shell" aria-labelledby="t-shell"><div class="pic"><img src="https://images.unsplash.com/photo-1567955465163-c355df3b74bf?auto=format&fit=crop&w=800&q=75" alt="person in an orange and blue waterproof jacket outdoors" width="800" height="860" loading="lazy"></div><div><h3 style="font-size:1.8rem">Hardshell</h3><p>A technical jacket made from a waterproof, breathable membrane laminated to a tough face fabric. Hardshells are the go-to choice for hiking and mountain weather because they block wind and rain while letting sweat vapour escape.</p><dl class="spec"><div><dt>Rain protection</dt><dd>Excellent</dd></div><div><dt>Breathability</dt><dd>Good to excellent</dd></div><div><dt>Weight</dt><dd>Light to medium</dd></div><div><dt>Best for</dt><dd>Hiking, travel, storms</dd></div></dl></div></div><div class="tpanel" role="tabpanel" id="p-trench" aria-labelledby="t-trench" hidden><div class="pic"><img src="https://images.unsplash.com/photo-1676716105765-e19fe6a01851?auto=format&fit=crop&w=800&q=75" alt="woman walking down a city street in a trench coat" width="800" height="860" loading="lazy"></div><div><h3 style="font-size:1.8rem">Trench coat</h3><p>The classic city raincoat: usually tightly woven cotton gabardine or a coated blend, often with a belt, storm flap and gun flap. Many modern trenches add a waterproof membrane for heavier rain.</p><dl class="spec"><div><dt>Rain protection</dt><dd>Showerproof to waterproof</dd></div><div><dt>Breathability</dt><dd>Good</dd></div><div><dt>Weight</dt><dd>Medium</dd></div><div><dt>Best for</dt><dd>Commuting, work, travel</dd></div></dl></div></div><div class="tpanel" role="tabpanel" id="p-wax" aria-labelledby="t-wax" hidden><div class="pic"><img src="https://images.unsplash.com/photo-1641943632479-3798ef1e14c6?auto=format&fit=crop&w=800&q=75" alt="man wearing a brown jacket outdoors" width="800" height="860" loading="lazy"></div><div><h3 style="font-size:1.8rem">Waxed cotton</h3><p>Dense cotton impregnated with wax creates a naturally water-repellent fabric with a rugged, lived-in look. It needs re-waxing every season or two, but a well-kept waxed jacket can last for decades.</p><dl class="spec"><div><dt>Rain protection</dt><dd>Good; improves with re-waxing</dd></div><div><dt>Breathability</dt><dd>Moderate</dd></div><div><dt>Weight</dt><dd>Heavy</dd></div><div><dt>Best for</dt><dd>Countryside, dog walks, cool rain</dd></div></dl></div></div><div class="tpanel" role="tabpanel" id="p-mac" aria-labelledby="t-mac" hidden><div class="pic"><img src="https://images.unsplash.com/photo-1527192250228-1ece59813102?auto=format&fit=crop&w=800&q=75" alt="person in a yellow raincoat walking down a street" width="800" height="860" loading="lazy"></div><div><h3 style="font-size:1.8rem">Packable mac</h3><p>A lightweight raincoat, often in coated nylon or polyester, that folds into a pocket or pouch. Ideal as a just-in-case layer for festivals, travel and unpredictable spring days.</p><dl class="spec"><div><dt>Rain protection</dt><dd>Good</dd></div><div><dt>Breathability</dt><dd>Low to moderate</dd></div><div><dt>Weight</dt><dd>Very light</dd></div><div><dt>Best for</dt><dd>Travel, festivals, backup layer</dd></div></dl></div></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0" aria-labelledby="cd-t">
  <div class="wrap rail">
    <div class="num">03<small>SETTINGS</small></div>
    <div>
      <div class="head2"><div><span class="kicker">Where you&#8217;ll wear it</span><h2 id="cd-t">Different rain, different needs</h2></div><p class="muted">A jacket that is perfect on a mountain can feel too technical on a commute. Start with where you&#8217;ll spend most rainy hours.</p></div>
      <div class="conds">
        <article class="cond"><div class="pic"><img src="https://images.unsplash.com/photo-1571366657764-16ca342d3284?auto=format&fit=crop&w=600&q=75" alt="people walking along a wet city street at night" width="600" height="510" loading="lazy"></div><div class="t"><span class="lbl">City</span><h3>Commuting</h3><p>Longer cuts, clean styling, an umbrella-friendly hood and inside pockets that keep a phone dry.</p></div></article>
        <article class="cond"><div class="pic"><img src="https://images.unsplash.com/photo-1781380971048-f9432e65ce8a?auto=format&fit=crop&w=600&q=75" alt="person in a yellow raincoat looking up at a tall waterfall" width="600" height="510" loading="lazy"></div><div class="t"><span class="lbl">Trail</span><h3>Hiking</h3><p>Breathable membranes, pit zips, a hood with a stiff peak and pockets placed above a hip belt.</p></div></article>
        <article class="cond"><div class="pic"><img src="https://images.unsplash.com/photo-1687860910109-fb6c7a6c8a6b?auto=format&fit=crop&w=600&q=75" alt="man riding a bicycle along a rain-soaked road" width="600" height="510" loading="lazy"></div><div class="t"><span class="lbl">Road</span><h3>Cycling</h3><p>A dropped tail, articulated arms, reflective trim and a close fit that does not flap in the wind.</p></div></article>
        <article class="cond"><div class="pic"><img src="https://images.unsplash.com/photo-1681812490689-2bb9ab7ca660?auto=format&fit=crop&w=600&q=75" alt="man in a raincoat working on a boat" width="600" height="510" loading="lazy"></div><div class="t"><span class="lbl">Coast</span><h3>Sailing &amp; shore</h3><p>Sturdy coated fabrics, high collars, sealed cuffs and bright colours for visibility near the water.</p></div></article>
      </div>
    </div>
  </div>
</section>

<section class="sec match" id="matcher-sec" aria-labelledby="mt-t">
  <div class="wrap rail">
    <div class="num">04<small>MATCHER</small></div>
    <div>
      <div class="head2"><div><span class="kicker">Rain-ready matcher</span><h2 id="mt-t">Find your kind of rain jacket</h2></div><p class="muted">Choose your main activity, the rain you usually face and the typical temperature. We&#8217;ll suggest a jacket style and the features to look for.</p></div>
      <div class="mbox">
        <form id="matcher" onsubmit="return false">
          <fieldset class="fld" style="border:0"><legend class="l">Main activity</legend><div class="opts">
            <label><input type="radio" name="act" value="city" checked><span>City &amp; commute</span></label><label><input type="radio" name="act" value="hike"><span>Hiking</span></label><label><input type="radio" name="act" value="cycle"><span>Cycling</span></label></div></fieldset>
          <fieldset class="fld" style="border:0"><legend class="l">Usual rain</legend><div class="opts">
            <label><input type="radio" name="rain" value="light"><span>Light showers</span></label><label><input type="radio" name="rain" value="steady" checked><span>Steady rain</span></label><label><input type="radio" name="rain" value="heavy"><span>Heavy downpours</span></label></div></fieldset>
          <fieldset class="fld" style="border:0;margin:0"><legend class="l">Temperature</legend><div class="opts">
            <label><input type="radio" name="temp" value="cold"><span>Cold</span></label><label><input type="radio" name="temp" value="mild" checked><span>Mild</span></label><label><input type="radio" name="temp" value="warm"><span>Warm</span></label></div></fieldset>
        </form>
        <div class="out" aria-live="polite">
          <span class="kicker">Our suggestion</span>
          <h3 id="m-type">Classic trench or packable mac</h3>
          <p id="m-line">Showerproof to waterproof is plenty for short trips.</p>
          <ul id="m-list"><li>Smart enough for work and evenings</li></ul>
          <p class="small" style="margin-top:14px;color:#9AAAB3">General guidance only. Always check the maker&#8217;s specifications.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sec" aria-labelledby="an-t">
  <div class="wrap rail">
    <div class="num">05<small>ANATOMY</small></div>
    <div class="anat">
      <div class="pic"><img src="https://images.unsplash.com/photo-1666446224995-496578fbfd6d?auto=format&fit=crop&w=800&q=75" alt="close-up of a black and orange jacket zip" width="800" height="800" loading="lazy"></div>
      <div>
        <span class="kicker">Anatomy of a rain jacket</span>
        <h2 id="an-t">The details that keep water out</h2>
        <ol class="feat">
          <li><p><strong>Taped seams.</strong> Every stitch hole is a potential leak; heat-sealed tape over the seams closes them.</p></li>
          <li><p><strong>Water-resistant zips or storm flaps.</strong> Coated zips or a fabric flap stop rain running through the main zip.</p></li>
          <li><p><strong>Adjustable hood.</strong> A wired or stiffened peak and rear volume adjuster let the hood move with your head.</p></li>
          <li><p><strong>Cuff tabs and hem drawcord.</strong> Seal gaps at the wrists and waist against wind-driven rain.</p></li>
          <li><p><strong>Vents.</strong> Pit zips or mesh-backed pockets release heat and moisture during activity.</p></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="band" aria-labelledby="bd-t">
  <img src="https://images.unsplash.com/photo-1702474447694-e8c8dc2508e0?auto=format&fit=crop&w=1800&q=75" alt="forest filled with tall trees covered in fog" width="1800" height="1200" loading="lazy">
  <div class="wrap">
    <span class="kicker" style="color:var(--bronze-lt)">Our philosophy</span>
    <h2 id="bd-t" class="skip">Our philosophy</h2>
    <blockquote>There is beauty in rainy days: quiet streets, misty forests, the smell of wet earth. The right jacket simply lets you enjoy them.</blockquote>
    <p>We believe a good rain jacket is chosen with care, worn for years and repaired rather than replaced.</p>
  </div>
</section>

<section class="sec" aria-labelledby="ms-t">
  <div class="wrap month">
    <div>
      <span class="kicker">Rain tip</span>
      <h2 id="ms-t">Why breathability matters as much as waterproofing</h2>
      <p>A fully waterproof bag would keep rain out perfectly, but you would soon be soaked in your own sweat. Breathable fabrics let water vapour escape while blocking liquid water, which keeps you comfortable when you are moving.</p>
      <p>Breathability is often quoted in grams of vapour per square metre over 24 hours (g/m&sup2;/24h). Ratings of around 10,000 suit everyday use, while 15,000 and above suit high-output activities such as fast hiking.</p>
      <div class="note"><strong>Quick test:</strong> if rain no longer beads on the outside of your jacket, the outer fabric is wetting out. Wash and refresh the DWR to restore breathability.</div>
    </div>
    <div class="pic"><img src="https://images.unsplash.com/photo-1589803196988-17b417281773?auto=format&fit=crop&w=800&q=75" alt="city street with rain puddles on the ground" width="800" height="600" loading="lazy"></div>
  </div>
</section>

<section class="sec" style="padding-top:0" aria-labelledby="fq-t">
  <div class="wrap faq-grid">
    <div><span class="kicker">Questions</span><h2 id="fq-t">Rain jacket questions</h2><p class="muted">Can&#8217;t find what you&#8217;re looking for? Our editors are happy to help.</p><a class="btn btn--dark" href="contact.html">Ask the editors</a><div class="pic"><img src="https://images.unsplash.com/photo-1555036802-ded42283445c?auto=format&fit=crop&w=800&q=75" alt="person wearing yellow rain boots" width="800" height="640" loading="lazy"></div></div>
    <div><details open><summary>What does a waterproof rating in mm mean?</summary><p>It is the hydrostatic head: the height, in millimetres, of a column of water a fabric can hold back before water starts to push through. A 10,000 mm fabric resists the pressure of a 10-metre column of water. Higher numbers indicate better resistance to heavy rain and pressure from straps or kneeling.</p></details><details><summary>What is the difference between water-resistant and waterproof?</summary><p>Water-resistant fabrics shed light rain for a while, usually thanks to a tight weave or a water-repellent finish. Waterproof jackets use a membrane or coating plus sealed seams so that water cannot get through, even in sustained rain.</p></details><details><summary>Why do I feel wet inside my rain jacket?</summary><p>Often it is condensation rather than a leak. When you are active, sweat vapour can condense on the inside of the jacket, especially in cold, humid weather. Opening vents, choosing a more breathable fabric and refreshing the outer water-repellent finish all help.</p></details><details><summary>What is DWR?</summary><p>DWR stands for durable water repellent, a finish on the outer fabric that makes rain bead up and roll off. When it wears out, the face fabric soaks up water (called wetting out), which reduces breathability even if the jacket is still waterproof.</p></details><details><summary>How often should I wash my rain jacket?</summary><p>Wash it whenever it looks dirty or starts to wet out, and typically a few times per season if you use it regularly. Dirt, sweat and sunscreen clog the fabric and weaken water repellency.</p></details><details><summary>Does Rainwear Bronze sell jackets?</summary><p>No. Rainwear Bronze is an independent educational guide. We do not sell jackets and we are not affiliated with any brand or retailer.</p></details></div>
  </div>
</section>

<section class="sec" style="padding-top:0" id="forecast" aria-labelledby="nl-t">
  <div class="wrap">
    <div class="nl">
      <div class="pic"><img src="https://images.unsplash.com/photo-1683975202079-f35ab434af12?auto=format&fit=crop&w=900&q=75" alt="woman in a yellow raincoat looking out over a city" width="900" height="800" loading="lazy"></div>
      <div class="in">
        <span class="kicker" style="color:var(--bronze-lt)">Monthly email</span>
        <h2 id="nl-t">The Bronze Forecast</h2>
        <p>One email a month with a fabric explained, a seasonal care reminder and a reader&#8217;s rainwear question answered. No advertising and no spam.</p>
        <?php if ($msg): ?><p class="<?php echo $ok ? 'ok' : 'err'; ?>" role="status"><?php echo e($msg); ?></p><?php endif; ?>
        <form method="post" action="index.php#forecast">
          <label for="ne" class="skip">Email address</label>
          <input type="email" id="ne" name="nl_email" placeholder="Your email address" required autocomplete="email">
          <input type="text" name="website" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">
          <button class="btn" type="submit">Subscribe</button>
        </form>
        <p class="small">Read our <a href="privacy-policy.html">Privacy Policy</a>. Unsubscribe any time.</p>
      </div>
    </div>
  </div>
</section>
</main>
<footer class="ftr">
  <div class="wrap">
    <div class="ftr-grid">
      <div><a class="logo" href="index.php"><svg viewBox="0 0 40 40" aria-hidden="true"><path d="M20 3C14 12 9 18 9 25a11 11 0 0 0 22 0c0-7-5-13-11-22Z" fill="#B07A3E"/><path d="M15 26a5 5 0 0 0 5 5" fill="none" stroke="#F7F6F2" stroke-width="2" stroke-linecap="round"/><path d="M5 8l2 5M33 6l2 5M2 18l2 5" stroke="#6E8B99" stroke-width="2" stroke-linecap="round"/></svg><span>RAINWEAR BRONZE<small>JACKETS FOR WET WEATHER</small></span></a><p>An independent guide to rain jackets: waterproof ratings, fabrics, fit and care, so you can stay dry and comfortable whatever the forecast says.</p></div>
      <div><h4>Explore</h4><a href="rain-jacket-guide.html">Rain Jacket Guide</a><a href="care-repair.html">Care &amp; Repair</a><a href="index.php#rating">Waterproof Gauge</a><a href="index.php#matcher-sec">Rain-Ready Matcher</a></div>
      <div><h4>Policies</h4><a href="privacy-policy.html">Privacy Policy</a><a href="terms-and-conditions.html">Terms &amp; Conditions</a><a href="cookie-policy.html">Cookie Policy</a><a href="disclaimer.html">Disclaimer</a><a href="editorial-policy.html">Editorial Policy</a></div>
      <div><h4>Contact</h4><p>181 Mercer Street, New York, NY 10012, United States</p><a href="tel:+18887775845">+1-888-777-5845</a><a href="mailto:hello@rainwearbronze.com">hello@rainwearbronze.com</a></div>
    </div>
    <div class="ftr-base"><span>&copy; <?php echo date("Y"); ?> Rainwear Bronze. All rights reserved.</span><span>Photography from Unsplash under the Unsplash License. Not affiliated with any outdoor or apparel brand.</span></div>
  </div>
</footer>
<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice"><p>We use essential cookies and, with your permission, analytics cookies to learn which guides are most useful. <a href="cookie-policy.html">Cookie Policy</a></p><button class="y" data-cookie="accepted">Accept</button><button data-cookie="declined">Essential only</button></div>
<script src="assets/js/main.js" defer></script>
</body>
</html>
