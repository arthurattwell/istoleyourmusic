
        </div><!--#content-->

    </div><!--#wrapper-->

	<div id="footer-wrapper">
    
        <div id="footer">

        	<div id="footer-one">

                <h2>About</h2>
                
                <p class="narrative">We want to support our favourite artists, but it can be hard to buy their music online, especially in emerging markets. So, if we can't buy their music, and we find it in other ways, then we'll donate to their favourite charities instead.</p>
                
                <p class="narrative">ISYM is an experiment in social goodness. It makes no money.</p>
    
                <h2>Contact</h2>
                <p class="narrative">Find us on <a href="http://twitter.com/istoleyourmusic">Twitter</a></p>
            </div><!--#footer-one-->

			<div id="footer-two">

            	<h2>Total pledged</h2>
                
            	<div class="total-pledged">
					<?php 
						require_once ("pledge-data.php"); 
						echo "\${$total_pledged}";
					?>
                </div><!--.total-pledged-->
            
            </div><!--#footer-two-->

        </div><!--#footer-->
        
    </div><!--#footer-wrapper-->


</body>
</html>
