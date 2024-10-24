<?PHP
header("Cache-Control: no-cache");
require_once ("env.php");
$lastEditTime = date ("jhi", filemtime(__FILE__));

echo
<<<HTML
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta content="all" name="robots" />
  <meta name="author" content="JJ Ying" />
  <meta name="description" content="UI & Web design porfolio of JJ Ying, a designer, podcaster, blogger." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <title>JJ Ying's Portfolio</title>

  <link rel="preconnect" href="https://s.anyway.red">
  <link rel="preconnect" href="https://anyway.fm">
  <link rel="stylesheet" href="{$cssDir}/main.css?v={$lastEditTime}"/>
  <link rel="shortcut icon" href="{$imgDir}/favicon.png">

  <script type="text/javascript" src="{$jsDir}/in-view.min.js"></script>

  <meta property="og:url" content="http://JJYing.com">
  <meta property="og:type" content="website">
  <meta property="og:title" content="JJ Ying's Portfolio">
  <meta property="og:description" content="UI & Web design porfolio of JJ Ying, a designer, podcaster, blogger.">
  <meta property="og:image" content="https://s.anw.red/iconmoon-2017/iconmoon-2017.png">

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="UI & Web design porfolio of JJ Ying, a designer, podcaster, blogger." />
  <meta name="twitter:title" content="JJ Ying's Portfolio" />
  <meta name="twitter:site" content="@jjying" />
  <meta name="twitter:image" content="https://s.anw.red/iconmoon-2017/iconmoon-2017.png" />
</head>
<body>
	<header>

		<section class="autowidth tagline">Hey There, I'm JJ Ying,</section>
		<section class="autowidth desc">based in Shanghai, China.</section>

		<section class="autowidth tagline">Just Another UI Designer.</section>
		<section class="autowidth desc">Working at XD and previously at Baidu & HP.</section>

		<section class="autowidth tagline">And know a little about coding.</section>
		<section class="autowidth desc last-header">But just too little to be called full-stack. 😝</section>

	</header>

	<nav>
		<div class="autowidth header-nav">
			<div class="logo"><img src="{$imgDir}/logo.png"/></div>
			<div class="header-name"><strong>JJ Ying</strong><span>, just another UI Designer</span></div>
			<ul>
				<li><a href="#works">Works</a></li>
				<li><a href="#about">About</a></li>
				<li class="nav-blog"><a href="http://IconMoon.com/blog2/" target="_blank">Blog</a></li>
				<li><a href="https://Anyway.FM/index.php?s=iconmoon" target="_blank">Podcast</a></li>
			</ul>
		</div>
	</nav>

	<main>
		<div class="inner inner-content">

			<!-- <article class="item s-pre"  id="works">
				<div class="inner-item">
					<div class="item-main autowidth">
						<h1 class="item-text"><strong>Anyway.2021</strong> Year-End Report</h1>

						<div class="item-desc">
							<div class="item-tags">Web App Design / Development</div>
							<div class="item-btns">
								<a class="item-btn" href="https://www.behance.net/gallery/40528175/Podcast-RSS-Editor" target="_blank">More details on Behance</a>
								<a class="item-btn" href="https://github.com/JJYing/Podcast-RSS-Editor" target="_blank">Open sourced on GitHub</a>
							</div>
						</div>

					</div>

					<img src="{$imgDir}/pre-bg.jpg" class="s-pre-img mobile-full-width" />
				</div>
			</article>       -->
      <a name="works"></a>

			<article class="item s-anyway-web">
				<div class="inner-item">
					<div class="item-main autowidth">
						<h1 class="item-text"><strong>Anyway.FM</strong>
						<br />V2 Website</h1>

						<div class="item-desc">
							<div class="item-tags">Web Design / Front-end Dev / Back-end Dev</div>

							<div class="item-btns">
								<a class="item-btn" href="https://Anyway.FM" target="_blank">Launch Site</a>
							</div>
						</div>

					</div>

					<img src="{$imgDir}/anyway-web.png" class="ani-1 s-anyway-web-img mobile-full-width" />
				</div>
			</article>

			<article class="item s-anyway-tab">
				<div class="inner-item">
					<div class="item-main autowidth">
						<h1 class="item-text"><strong>Anyway.Tab</strong>
						<br />Chrome Extension</h1>

						<div class="item-desc">
							<div class="item-tags">UI Design / Development / Website</div>

							<div class="item-btns"><a class="item-btn" href="https://Anyway.FM/tab/" target="_blank">Launch site</a>
								<a class="item-btn" href="https://github.com/Anyway-Design/Anyway-Tab" target="_blank">Open sourced on GitHub</a>
              </div>
						</div>

					</div>

					<img src="{$imgDir}/anyway-tab.png" class="ani-1 s-anyway-tab-img mobile-full-width" />
				</div>
			</article>

      <article class="item s-nur">
				<div class="inner-item">
					<div class="item-main autowidth">
						<h1 class="item-text"><strong>Nürburgring</strong> Map</h1>

						<div class="item-desc">
							<div class="item-tags">Web App Design / Development</div>
							<div class="item-btns">
                <a class="item-btn" href="https://jjying.com/nurburgring/" target="_blank">Launch site</a>
								<a class="item-btn" href="https://github.com/JJYing/Nurburgring-Map/" target="_blank">Open sourced on GitHub</a>
							</div>
						</div>

					</div>

					<img src="{$imgDir}/nur.png" class="s-pre-img mobile-full-width" />
				</div>
			</article>

			<article class="item s-pre" >
				<div class="inner-item">
					<div class="item-main autowidth">
						<h1 class="item-text"><strong>Podcast</strong> RSS Editor</h1>

						<div class="item-desc">
							<div class="item-tags">Web App Design / Development</div>
							<div class="item-btns">
								<a class="item-btn" href="https://www.behance.net/gallery/40528175/Podcast-RSS-Editor" target="_blank">More details on Behance</a>
								<a class="item-btn" href="https://github.com/JJYing/Podcast-RSS-Editor" target="_blank">Open sourced on GitHub</a>
							</div>
						</div>

					</div>

					<img src="{$imgDir}/pre-bg.jpg" class="s-pre-img mobile-full-width" />
				</div>
			</article>      

			<article class="item s-name">
				<div class="inner-item">
					<div class="item-main autowidth">
						<h1 class="item-text"><strong>Name Generator</strong>
						<br />for Sketch</h1>

						<div class="item-desc">
							<div class="item-tags">Plug-in Development</div>
							<div class="item-btns">
								<a class="item-btn" href="https://github.com/JJYing/Fake-Chinese-Name-for-Sketch" target="_blank">Open sourced on GitHub</a>
							</div>
						</div>

					</div>

					<img src="{$imgDir}/name-demo.gif" class="s-name-demo mobile-full-width" />
				</div>
			</article>

			<article class="item s-better-shadow">
				<div class="inner-item">
					<div class="item-main autowidth">
						<h1 class="item-text"><strong>Better Shadow</strong>
						<br />for Sketch</h1>

						<div class="item-desc">
							<div class="item-tags">Plug-in Development</div>

							<div class="item-btns">
								<a class="item-btn" href="https://github.com/JJYing/Sketch-Better-Shadow" target="_blank">Open sourced on GitHub</a>
							</div>
						</div>
					</div>

					<img src="{$imgDir}/better.gif" class="ani-1 s-better-shadow-img mobile-full-width" />
				</div>
			</article>      

			<article class="item s-clover">
				<div class="inner-item">

					<div class="item-main autowidth">
						<h1 class="item-text"><strong>Clover Sans</strong><br /> Typeface Design</h1>
						<div class="item-desc">
							<div class="item-btns">
								Coming soon...
							</div>
						</div>

					</div>

					<img src="{$imgDir}/clover-sans.jpg" class="item-bg clover-img-0 mobile-full-width" />
					<img src="{$imgDir}/clover-sans-2.png" class="item-bg clover-img-1 mobile-full-width" />
					<img src="{$imgDir}/clover-sans-3.png" class="item-bg clover-img-2 mobile-full-width" />

				</div>
			</article>

			<article class="item s-aw2016  last-item">
				<div class="inner-item">
					<div class="item-bg"></div>

					<div class="item-main autowidth">

						<h1 class="item-text"><strong>Anyway.FM</strong> <br />2016 Year-End Report</h1>

						<div class="item-desc">
							<div class="item-tags">Web Design / Development</div>

							<div class="item-btns">
								<a class="item-btn" href="https://Anyway.FM/2016/?s=iconmoon" target="_blank">Launch site</a>
							</div>
						</div>

					</div>
					<img src="{$imgDir}/aw2016-bg.gif" class="s-aw2016-bg" />

					<img src="{$imgDir}/aw2016-leon.gif" class="s-aw2016-leon" />

					<img src="{$imgDir}/aw2016-logo.gif" class="s-aw2016-logo mobile-full-width" />

				</div>
			</article>      


			<header>

				<section class="autowidth tagline">I Also Love Sharing,</section>
				<section class="autowidth desc">and coffee, and football games, and photography. </section>

				<section class="autowidth tagline">I'm Producing a Podcast.</section>
				<section class="autowidth desc">in Chinese Mandarin, of course.</section>

				<section class="autowidth tagline">And Had been a Blogger.</section>
				<section class="autowidth desc">for more than a decade</section>

			</header>

			<article class="item s-anyway">
				<div class="inner-item">
					<img src="{$imgDir}/anyway-1.png" class="s-anyway-img s-anyway-cube-1" />

					<img src="{$imgDir}/anyway-2.png" class="s-anyway-img s-anyway-cube-2" />

					<img src="{$imgDir}/anyway-3.png" class="s-anyway-img s-anyway-cube-3" />

					<div class="item-main autowidth">
						<h1 class="item-text">Award-Winning Podcast
						<br /><strong>Anyway.FM</strong></h1>

						<div class="item-desc">
							<div class="item-tags">Leon Gao and I created Anyway.FM design podcast in late 2015, we were so lucky to receive 'Best of 2015' award from Apple iTunes after just 5 episodes.</div>

							<div class="item-btns">
								<a class="item-btn" href="https://Anyway.FM/index.php?s=iconmoon" target="_blank">Launch site</a> <a class="item-btn" href="https://itunes.apple.com/cn/podcast/anyway.fm-she-ji-za-tan/id1053786200" target="_blank">Subscribe on iTunes Podcasts</a>
							</div>
						</div>

					</div>
				</div>
			</article>


			<article class="item half half-l s-iconmoon">
				<div class="inner-item">
					<div class="item-main autowidth">
						<h1 class="item-text"><strong>IconMoon 图月志</strong> <br />Design Blog</h1>

						<div class="item-desc">

							<div class="item-btns">
								<a class="item-btn" href="http://TuYueZhi.com" target="_blank">Launch site</a>
							</div>

						</div>

					</div>
				</div>
			</article>

			<article class="item half half-r s-post last-item">
				<div class="inner-item">
					<div class="item-main autowidth">
						<h1 class="item-text"><strong>Anyway.Post</strong> <br />E-mail Newsletter</h1>

						<div class="item-desc">

							<div class="item-btns">
								<a class="item-btn" href="https://Anyway.FM/post/?s=iconmoon" target="_blank">Launch site</a>
							</div>

						</div>

					</div>
				</div>
			</article>

			<article class="item about about-1" id="about">
				<div class="inner-item">
					<div class="item-main autowidth">
						<h1 class="item-text"><strong>About</strong> Me</h1>

						<div class="item-desc">
							<div>Once I thought I could be a life-time pixel-pusher, but then I realize I'm more interested in the mixture of design and codes (maybe just tags, since I only knew HTML/CSS and JS). 😅</div>

							<div>I live in Shanghai, China and currently work at <a href="http://xd.com/" target="_blank">XD</a> as a Senior UI designer. When I'm not working or feeding my little daughter, I love taking <a href="https://www.instagram.com/jjying/" target="_blank">stupid photos</a> and watching Man Utd games.</div>

						</div>
					</div>
				</div>
			</article>

			<article class="item about about-2">
				<div class="inner-item">
					<div class="item-main autowidth">
						<h1 class="item-text"><strong>Awards</strong> & <strong>Press</strong></h1>

						<div class="item-desc">
							<div class="about-list">
                <div><a href="https://www.xiaoyuzhoufm.com/episode/62847183ad3e85ac09d6c661">KEF</a> · Podcast · May 2022</div>
                <div><a href="https://www.ifanr.com/1461190">iFanr</a> · Video · Dec 2021</div>
								<div><a href="https://zhuanlan.zhihu.com/p/29767611">UX Coffee</a> · Interview · Sep 2017</div>
								<div><a href="http://iconmoon.com/blog2/anyway-fm-2015-year-selected/">Apple Best of 2015</a> · iTunes Podcasts · Dec 2015</div>
								<div><a href="https://zhuanlan.zhihu.com/p/20026602">36Kr Next</a> · Interview · May 2015</div>
							</div>

						</div>
					</div>
				</div>
			</article>

			<article class="item about about-4">
				<div class="inner-item">
					<div class="item-main autowidth">
						<h1 class="item-text"><strong>Contact</strong> Me</h1>

						<div class="item-desc">
              <div class="about-list">
                <div><a href="mailto:yingjunjiu@gmail.com">yingjunjiu@gmail.com</a> · E-mail</div>
                <div><a href="http://IconMoon.com/blog2/">TuYueZhi.com</a> · Blog</div>
                <div><a href="https://Anyway.FM/index.php?s=iconmoon">Anyway.FM</a> · Podcast</div>
              </div>
							<div class="social-list">
								<a target="_blank" href="https://twitter.com/JJYing">Twitter</a>
								/
								<a target="_blank" href="http://dribbble.com/JJYing">Dribbble</a>
								/
								<a target="_blank" href="https://www.behance.net/jjying">Behance</a>
								/
								<a target="_blank" href="http://instagram.com/jjying">Instagram</a>
								/
								<a target="_blank" href="http://www.linkedin.com/in/jjying">LinkedIn</a>
								/
								<a target="_blank" href="http://weibo.com/yingjunjiu/">Weibo</a>
								/
								<a target="_blank" href="http://www.zhihu.com/people/jjying">Zhihu</a>
								/
								<a target="_blank" href="https://unsplash.com/@jjying">Unsplash</a>
							</div>
						</div>
					</div>

					<footer>
						<div class="autowidth inner-footer">© 2024 JJ Ying. All rights reserved.</div>
					</footer>
				</div>
			</article>

		</div>
	</main>


<script type="text/javascript">

	//~inView Animations
	inView('.ani-2')
		.on('enter',
			el => {
				el.className += " in-view";
			})
		.on('exit',
			el => {
				var reg = new RegExp('(\\s|^)' + "in-view" + '(\\s|$)');
				el.className = el.className.replace(reg,'');
		});

	inView('.last-header')
		.on('enter',
			el => {
				document.body.classList.remove('scrolled');
			})
		.on('exit',
			el => {
				document.body.classList.add('scrolled');
			});

	inView('.about-4')
		.on('exit',
			el => {
				document.querySelector('nav').classList.remove('at-bottom');
			})
		.on('enter',
			el => {
				document.querySelector('nav').classList.add('at-bottom');
			});

  inView('.ani-1')
    .on('enter',
      el => {
        el.className += " in-view";
      });
      
  inView('.ani-slow-1')
    .on('enter',
      el => {
        el.className += " in-view";
      });

    var _paq = window._paq = window._paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//anyway.fm/matomo/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '3']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
	</script>


</body>
</html>
HTML;
?>
