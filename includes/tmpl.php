<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $head["title"]; ?></title>

	<link rel="stylesheet" media="screen" href="<?php echo $currentDesign; ?>?v=8may2013">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dave Shea">
	<meta name="description" content="<?php echo $head["description"]; ?>">
	<meta name="robots" content="all">
</head>

<!--

<?php echo $head["comment"]; ?>

-->

<body id="css-zen-garden">
<div class="page-wrapper">

	<section class="intro" id="zen-intro">
		<header role="banner">
			<h1><?php echo $intro["h1"]; ?></h1>
			<h2><?php echo $intro["h2"]; ?></h2>
		</header>

		<div class="summary" id="zen-summary">
			<p><?php echo $intro["summary-p1"]; ?></p>
			<p><?php echo $intro["summary-p2"]; ?></p>
		</div>

		<div class="preamble" id="zen-preamble">
			<h3><?php echo $intro["preamble-h3"]; ?></h3>
			<p><?php echo $intro["preamble-p1"]; ?></p>
			<p><?php echo $intro["preamble-p2"]; ?></p>
			<p><?php echo $intro["preamble-p3"]; ?></p>
		</div>
	</section>

	<div class="main supporting" id="zen-supporting" role="main">
		<div class="explanation" id="zen-explanation">
			<h3><?php echo $main["explanation-h3"]; ?></h3>
			<p><?php echo $main["explanation-p1"]; ?></p>
			<p><?php echo $main["explanation-p2"]; ?></p>
		</div>

		<div class="participation" id="zen-participation">
			<h3><?php echo $main["participation-h3"]; ?></h3>
			<p><?php echo $main["participation-p1"]; ?></p>
			<p><?php echo $main["participation-p2"]; ?></p>
			<p><?php echo $main["participation-p3"]; ?></p>
		</div>

		<div class="benefits" id="zen-benefits">
			<h3><?php echo $main["benefits-h3"]; ?></h3>
			<p><?php echo $main["benefits-p1"]; ?></p>
		</div>

		<div class="requirements" id="zen-requirements">
			<h3><?php echo $main["requirements-h3"]; ?></h3>
			<p><?php echo $main["requirements-p1"]; ?></p>
			<p><?php echo $main["requirements-p2"]; ?></p>
			<p><?php echo $main["requirements-p3"]; ?></p>
			<p><?php echo $main["requirements-p4"]; ?></p>
			<p><?php echo $main["requirements-p5"]; ?></p>
		</div>

		<footer>
			<a href="http://validator.w3.org/check/referer" title="<?php echo $main["zen-validate-html-title"]; ?>" class="zen-validate-html"><?php echo $footer["zen-validate-html-text"]; ?></a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="<?php echo $main["zen-validate-css-title"]; ?>" class="zen-validate-css"><?php echo $footer["zen-validate-css-text"]; ?></a>
			<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" title="<?php echo $main["zen-license-title"]; ?>" class="zen-license"><?php echo $footer["zen-license-text"]; ?></a>
			<a href="http://mezzoblue.com/zengarden/faq/#aaa" title="<?php echo $main["zen-accessibility-title"]; ?>" class="zen-accessibility"><?php echo $footer["zen-accessibility-text"]; ?></a>
			<a href="https://github.com/mezzoblue/csszengarden.com" title="<?php echo $main["zen-github-title"]; ?>" class="zen-github"><?php echo $footer["zen-github-text"]; ?></a>
		</footer>

	</div>


	<aside class="sidebar" role="complementary">
		<div class="wrapper">

			<div class="design-selection" id="design-selection">
				<h3 class="select"><?php echo $sidebar["design-selection-h3"]; ?></h3>
				<nav role="navigation">
					<ul>
<?php
		echo getDesignList($listStart, $numDesigns, $designList, $sidebar["design-selection-by"]);
?>
					</ul>
				</nav>
			</div>

			<div class="design-archives" id="design-archives">
				<h3 class="archives"><?php echo $sidebar["design-archives-h3"]; ?></h3>
				<nav role="navigation">
					<ul>
<?php
	if ($listStart > $numDesigns) {
?>
						<li class="next">
							<a href="?cssfile=<?php echo $currentDesign ?>&amp;page=<?php echo $thisPage + 1 ?>">
								<?php echo $sidebar["design-archives-next"]; ?> <span class="indicator">&rsaquo;
							</a>
						</li>
<?php
	}

	if ($thisPage > 0) {
?>
						<li class="previous">
							<a href="?cssfile=<?php echo $currentDesign ?>&amp;page=<?php echo $thisPage - 1 ?>">
								<span class="indicator">&lsaquo; <?php echo $sidebar["design-archives-previous"]; ?>
							</a>
						</li>
<?php
	}
?>
						<li class="viewall">
							<a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="<?php echo $sidebar["design-archives-viewall-title"]; ?>">
								<?php echo $sidebar["design-archives-viewall-text"]; ?>
							</a>
						</li>
					</ul>
				</nav>
			</div>

			<div class="zen-resources" id="zen-resources">
				<h3 class="resources"><?php echo $sidebar["design-resources-h3"]; ?>:</h3>
				<ul>
					<li class="view-css">
						<a href="<?php echo $currentDesign ?>" title="<?php echo $sidebar["view-css-title"]; ?>">
							<?php echo $sidebar["view-css-text"]; ?>
						</a>
					</li>
					<li class="css-resources">
						<a href="http://www.mezzoblue.com/zengarden/resources/" title="<?php echo $sidebar["css-resources-title"]; ?>">
							<?php echo $sidebar["css-resources-text"]; ?>
						</a>
					</li>
					<li class="zen-faq">
						<a href="http://www.mezzoblue.com/zengarden/faq/" title="<?php echo $sidebar["zen-faq-title"]; ?>">
							<?php echo $sidebar["zen-faq-text"]; ?>
						</a>
					</li>
					<li class="zen-submit">
						<a href="http://www.mezzoblue.com/zengarden/submit/" title="<?php echo $sidebar["zen-submit-title"]; ?>">
							<?php echo $sidebar["zen-submit-text"]; ?>
						</a>
					</li>
					<li class="zen-translations">
						<a href="http://www.mezzoblue.com/zengarden/translations/" title="<?php echo $sidebar["zen-translations-title"]; ?>">
							<?php echo $sidebar["zen-translations-text"]; ?>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</aside>


</div>

<!--
<?php echo $foot["comment"]; ?>

-->
<div class="extra1"></div><div class="extra2"></div><div class="extra3"></div>
<div class="extra4"></div><div class="extra5"></div><div class="extra6"></div>

</body>
</html>