			<!-- footer -->
			<footer class="footer col-lg-12 left-lg" role="contentinfo">

      <!--Footer Content Area-->

			<?php
          $baseball   = get_field('baseball',   6 );
          $basketball = get_field('basketball', 6 );
          $football   = get_field('football',   6 );
          $hockey     = get_field('hockey',     6 );
          $soccer     = get_field('soccer',     6 );
          $more_sports = get_field('more_sports',6 );
          ?>

        <div class="items left-lg flexWrap">
        <?php echo $baseball; ?>
        </div>

        <div class=" items left-lg flexWrap">
        <?php echo $basketball; ?>
        </div>

        <div class=" items left-lg flexWrap">
        <?php echo $football; ?>
        </div>


        <div class=" items left-lg flexWrap">
        <?php echo $hockey; ?>
        </div>

        <div class=" items left-lg flexWrap">
        <?php echo $soccer; ?>
        </div>

        <div class=" items left-lg flexWrap">
        <?php echo $more_sports; ?>
        </div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
    </script>
    
	</body>
</html>
