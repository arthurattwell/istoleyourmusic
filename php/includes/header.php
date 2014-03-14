
<body>

    <div id="wrapper">

		<div id="header">

            <a class="home" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>">
            <h1><span class="highlight">I stole your music.</span></h1>
            </a>
            
			<?php
			/* If we're on the home page, show this call-to-action paragraph. */
			$homepage = "/";
			$currentpage = $_SERVER['REQUEST_URI'];
				if($homepage == $currentpage) {
					echo "<p class='call-to-action'>I wanted to buy it, but that's really hard to do.<br />So I'm giving the money to charity instead.</p>";
					}
			?>

		</div><!--#header-->

        <div id="content">