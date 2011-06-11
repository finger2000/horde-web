<div>
  <?php if (!$this->isCurrentPage(array('controller' => 'home'))):?>
    <h2>Featured At</h2>
    <?php echo $this->render('informer'); ?><br />
  <?php endif; ?>
  <h2>Sponsors</h2>
  <ul class="ads">
    <li>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_xclick" />
      <input type="hidden" name="business" value="chuck@horde.org" />
      <input type="hidden" name="item_name" value="Support the Horde Project" />
      <input type="hidden" name="item_number" value="1" />
      <input type="hidden" name="no_shipping" value="1" />
      <input type="hidden" name="cn" value="Notes" />
      <input type="hidden" name="currency_code" value="USD" />
      <input type="hidden" name="tax" value="0" />
      <input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but04.gif" style="border:0" name="submit" alt="Donate to the Horde Project" />
      </form>
    </li>
    <li><a href="http://www.easydns.com/?V=55611cf92a7e0842"><img src="<?php echo $GLOBALS['host_base'] ?>/images/easyDNS.png" /></a></li>
    <li><a href="http://www.hub.org/?ri=765"><img src="<?php echo $GLOBALS['host_base'] ?>/images/hub.png" height="31"/></a></li>
    <li><a href="http://www.verendus.com"><img src="<?php echo $GLOBALS['host_base'] ?>/images/verendus.jpg" height="31"/></a></li>
  </ul>
  <h2>More</h2>
  <a href="http://twitter.com/hordeproject" class="twitter-follow-button" data-show-count="false">Follow @hordeproject</a>
  <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
  <br />
  <iframe src="http://www.facebook.com/plugins/like.php?app_id=132513070157462&amp;href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FHorde-LLC%2F192707224109487&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
  <br /><br />
  <?php echo $this->linkTo('Logos', array('controller' => 'home', 'action' => 'logos'));?><br />
  <?php echo $this->linkTo('Thanks', array('controller' => 'home', 'action' => 'thanks')); ?><br /><br />
  <h2>Shop</h2>
  <p>We have two spreadshirt shops:</p>
  <span style="text-align:center;width:91px;float:left;">European Store<a class="boxl"
  href="<?php echo $this->urlWriter->urlFor('shopeu')?>">
  <img width="90" height="90" src="http://image.spreadshirt.net/image-server/image/product/10874260/view/1/type/png/width/190/height/190/retro-235.png" alt="7647448-18385499"/>
  </a></span>
  <span style="text-align:center;width:91px;float:left;">US Store<a class="boxl"
  href="<?php echo $this->urlWriter->urlFor('shopus')?>">
  <img width="90" height="90" src="http://image.spreadshirt.com/image-server/image/product/18385499/view/1/type/png/width/190/height/190" alt="7647448-18385499"/>
  </a></span>
  <!--Cafepress widget seems to have js issues...getting all kinds of errors while navigating-->
   <div class="clear">
   <p>You can also visit our <a href="http://cafepress.com/hordeproject">CafePress Shop</a>.
   <!--<div id="cpi-s1-1001" class="cpi cpi-s1" affiliate=""
   tracking="hordeproject" color="#797979" source="shop:hordeproject"
   width="100" height="100">
     Make&nbsp;
     <a href="http://www.cafepress.com/make/" title="Make Custom Gifts at CafePress">Custom Gifts</a>&nbsp;at CafePress
   </div>
   <script type="text/javascript" src="http://content4.cpcache.com/marketplace/widgets/javascripts/widget.js"></script>
   --></div>
</div>
