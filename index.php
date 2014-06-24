<?php include 'database.php';
session_start();

if(isset($_POST['submit']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="SELECT * FROM `user` WHERE `username`='$user' and `password`='$pass'";
$result= mysql_query($sql);
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
$id=$row['id'];
$_SESSION['id']=$id;
$_SESSION['name']=$user;
if($count==1)
{
header('Location: dashboard.php');
include 'dashboard.php';
exit;
}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<?php include 'header.php';?>
<div class="navWrapper">
<div class="logo">
<a rel="nofollow" href="index.php">
<img src="Image/logo.jpg"    />
</a>
</div>



<script type="text/javascript">//<![CDATA[
buildCalIframe=function(){};try{var activeXAvailable=new ActiveXObject("Microsoft.XMLHTTP");}catch(err){}
var globals={UseLocalXHR:(activeXAvailable?true:false),Debug:false,AlwaysPreserveOrder:false,AllowDuplicates:false}
$LAB.setGlobalDefaults(globals);$LABQueue=$LAB.sandbox();$LABQueue.setGlobalDefaults(globals);$LAB.script('http://www.hrsstatic.com/web3/js/engineCompressed.js').wait(function(){window.opera8=false;var onloadJS='http://www.hrsstatic.com/web3/js/empty.js';dwr.engine._origScriptSessionId="2B80EA87D3A75D56A5B07FBC70F28D8F.60-2";dwr.engine._defaultPath="/web3/dwr";dwr.engine._sessionCookieName="JSESSIONID";dwr.engine._allowGetForSafariButMakeForgeryEasier="false";dwr.engine._scriptTagProtection="throw 'allowScriptTagRemoting is false.';";}).script('http://www.hrsstatic.com/web3/dwr/interface/MyHRSLogin.js').script('http://www.hrsstatic.com/web3/dwr/interface/SettingAttributeManager.js').wait(function(){var jsPath='http://www.hrsstatic.com/web3/js/';}).wait(function(){var domReadyNotFired=true;window.addEvent('domready',function(){domReadyNotFired=false;if(typeof onloadSuggest=='function'){if(Browser.ie8||Browser.ie7){setTimeout(function(){window.onloadSuggest()},500)}else{onloadSuggest();}}
if(Browser.ie7){$('nav').getElements('li').addEvent('mouseenter',function(){var theNextEl=this.getNext();console.log(!this.hasClass('hasHotline'),this)
if(theNextEl){if(!theNextEl.hasClass('hasHotline')&&!this.hasClass('hasHotline')){this.getNext().getElement('a').setStyle('background','none')}}});$('nav').getElements('li').addEvent('mouseleave',function(){var theNextEl=this.getNext();if(theNextEl){if(!theNextEl.hasClass('hasHotline')&&!this.hasClass('hasHotline')&&this.getNext().getElement('a')){this.getNext().getElement('a').removeProperty("style");}}})}
var s=new Date().getTime();new Tips($$('.tooltip'));new ClickTracker({checkClass:'jsTrackLink'});new TeaserTracker({checkClass:'jsTeaser'});new Popup($$('.jsHotline'),{width:'465',height:'560'});if(Browser.ie6){var flyOut1=new Flyout($$('#meta li, #nav li'),'jsHover');var flyOut2=new Flyout($$('#meta li.first'),'jsFirstHover');}else if(Browser.ie7){new FlyoutDelayed($$('#nav > li.sub'),'jsHover');}else{new FlyoutDelayed($$('#nav > li.myhrs'),'jsHover');}
initDateContainer();window.mapBrowser=(Browser.ie&&!Browser.ie6)||(Browser.opera)||(Browser.firefox)||(Browser.safari)||(Browser.chrome);var veMapSearch=$('veMapSearch');if((window.mapBrowser)&&veMapSearch){veMapSearch.value='true';}
new SelectLanguage('language');new Newsletter({subscriptionErrorEmailEmpty:'<h4>'+'Warning!'+'</h4><p>'+'Please enter your e-mail address.'+'</p>',subscriptionErrorEmailNotValid:'<h4>'+'Warning!'+'</h4><p>'+'Please enter a valid e-mail address.'+'</p>',subscriptionErrorCommonError:'<h4>'+'Warning!'+'</h4><p>'+'Subscription failed.'+'</p>',subscriptionErrorIsSubscriped:'<h4>'+'Warning!'+'</h4><p>'+'The e-mail address \"{0}\" is already subscribed to the HRS newsletter.'+'</p>',subscriptionSuccessful:'<h4>'+'Thank you for subscribing'+'</h4><p>'+'You will receive an automatic confirmation by email.'+'</p>',windowClose:'Close',isHP:true});var searchForm=$('searchForm');if(searchForm){var HotelSearchObj=new HotelSearch(searchForm);new deleteTextInputValueIcon($('destiny'),{clearDependends:$('suggestedID')});new deleteTextInputValueIcon($('hotelName'));}
new Popup($$('.jsPopup'));new ContextSensitiveHelp($$('.jsHelp'),{firstDirection:'top'});new ContextSensitiveHelp.Bookmarks($$('.bookmarkLayer'),{firstDirection:'top',maxWidth:265,minWidth:265,closeText:'Close'});var myHrsLogin=new DWRLogin({properties:{hallo:'Hello'},reload:false,sessionId:'2B80EA87D3A75D56A5B07FBC70F28D8F.60-2',homepageReload:'https://www.hrs.com/web3/showHomepage.do;jsessionid=2B80EA87D3A75D56A5B07FBC70F28D8F.60-2?clientId=ZW5fVVNfTkVYVA--&cid=60-2&activity=show&differentLanguage=true',isHomepage:true});openKissMeLayerPage=location.search.match(/openKisSMELayer=(\w*)/)?location.search.match(/openKisSMELayer=(\w*)/)[1]:'false';var usernameEmailPattern=/&username=([A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6})/i,result=decodeURIComponent(location.search).match(usernameEmailPattern);if(result===null||!result.length){usernameEmailPattern=/&username=([\w-\.]*)/i;result=location.search.match(usernameEmailPattern);}
window.kissmelightbox=new LightBox({lightBoxId:'KisSMELightBox',openInitial:false,page:openKissMeLayerPage,username:(result&&result.length>0)?result[1]:'',myHrsLogin:myHrsLogin,dynamicVerticalPosition:true,dynamicScrollFixedPosition:true,afterCreation:function(){this.wrap.addEvent('submit',function(event){event.stop();this.getContent(event.target,event)}.bind(this));this.wrap.addEvent('click',function(event){var target=event.target;if(target.get('tag')==='a'&&!target.get('onclick')&&!target.hasClass('close')){console.log(target);event.stop();this.getContent(target.get('href'));}}.bind(this));},beforeClose:function(){window.trackingTracker.trackFormExit('smeLightboxClose');},close:function(){if(window.mainPageNameForTracking){window.s.pageName=window.mainPageNameForTracking;window.mainPageNameForTracking=null;}
if(window.mainMetaDataObject&&window.md){window.md=window.mainMetaDataObject;window.mainMetaDataObject=null;if(window.wa){window.wa.viewChange('SMELayerClose',{});}}
console.log('login: ',typeof this.loginObject!=='undefined',typeof this.options.myHrsLogin!=='undefined',true);if(typeof this.loginObject!=='undefined'&&typeof this.options.myHrsLogin!=='undefined'&&true){this.options.myHrsLogin.response(this.loginObject);}},xhrError:function(){console.log('todo XHR Error');}});$$('.jsOpenKissmeLayer').addEvent('click',function(event){event.preventDefault();var href=this.getAttribute('data-kissmehref')||this.href;window.kissmelightbox.openLightBox(href);});if(kissmelightbox.options.page==='true'){kissmelightbox.openLightBox('/web3/showPage.do;jsessionid=2B80EA87D3A75D56A5B07FBC70F28D8F.60-2?clientId=ZW5fVVNfTkVYVA--&cid=60-2&page=smeUserRegistration');}else if(kissmelightbox.options.page!=='false'){kissmelightbox.openLightBox('/web3/showPage.do;jsessionid=2B80EA87D3A75D56A5B07FBC70F28D8F.60-2?clientId=ZW5fVVNfTkVYVA--&cid=60-2&page='+kissmelightbox.options.page+"&username="+kissmelightbox.options.username);}

if(Browser.Platform.android){new AndroidTouchWA($$('#nav li.sub'));}
$('isNext').removeClass('hide');new Toggler($('isNext'),$('showHideNext'),{toggleText:['Other search criteria','Close'],toggleTextType:'innerHTML'});if($('jsAkkordeon'))var a=new Akkordeon($('jsAkkordeon'),$$('#jsAkkordeon li'));if(window.LABQueueReady){$LABQueue.runQueue();}else{window.allowRunQueue=true;}
var UserAgent=navigator.userAgent.toLowerCase();if(UserAgent.search(/(android | ipad | iphone)/)>-1){var mobileCounter=0;$('meta').getElement('a').addEvent('touchstart',function(){mobileCounter++;if(!(mobileCounter%2)==0){$('meta').getElement('ul').setStyle('display','block')}else{$('meta').getElement('ul').setStyle('display','none')
window.location=$('meta').getElement('a').href;}})}});if(domReadyNotFired&&Browser.ie){window.checkLoadStatusInterval=window.setInterval('checkLoadStatus()',100);window.checkLoadStatus=function(){if(window.loaded&&checkLoadStatusInterval){clearInterval(checkLoadStatusInterval);if(domReadyNotFired){window.fireEvent('domready');}}}}}).wait(function(){window.flyoutIframeUrl='/web3/showPage.do;jsessionid=2B80EA87D3A75D56A5B07FBC70F28D8F.60-2?clientId=ZW5fVVNfTkVYVA--&cid=60-2&page=spacer';window.calCloseMsg='close window';}).wait(function(){window.CLIENTNAME="NEXT";window.MAXROOMCOUNT=9;window.HELPSATELLITE="/web3/showPage.do;jsessionid=2B80EA87D3A75D56A5B07FBC70F28D8F.60-2?clientId=ZW5fVVNfTkVYVA--&cid=60-2&page=userHelpSat&sat=manyrooms&satBundle=content.home.help";window.HELPSATELLITENAME="Help";window.GROUPSFAIRS="/web3/portalRedirect.do;jsessionid=2B80EA87D3A75D56A5B07FBC70F28D8F.60-2?clientId=ZW5fVVNfTkVYVA--&cid=60-2&activity=callContactFormGbg";window.CHANGE_LANGUAGE_URL="/web3/showHomepage.do;jsessionid=2B80EA87D3A75D56A5B07FBC70F28D8F.60-2";window.cid="cid=60-2";window.dwrSessionId="2B80EA87D3A75D56A5B07FBC70F28D8F.60-2";window.ENCODED_CLIENT_IDS={"de":"ZGVfX05FWFQ-","en":"ZW5fX05FWFQ-","en_US":"ZW5fVVNfTkVYVA--","es":"ZXNfX05FWFQ-","fr":"ZnJfX05FWFQ-","it":"aXRfX05FWFQ-",
"zh_CN":"emhfQ05fTkVYVA--","zh_TW":"emhfVFdfTkVYVA--","pl":"cGxfX05FWFQ-","af":"YWZfX05FWFQ-","ca":"Y2FfX05FWFQ-","cs":"Y3NfX05FWFQ-","da":"ZGFfX05FWFQ-","et":"ZXRfX05FWFQ-","el":"ZWxfX05FWFQ-","hi":"aGlfX05FWFQ-","hr":"aHJfX05FWFQ-","zu":"enVfX05FWFQ-","ja":"amFfX05FWFQ-","ko":"a29fX05FWFQ-","lv":"bHZfX05FWFQ-","lt":"bHRfX05FWFQ-","hu":"aHVfX05FWFQ-","nl":"bmxfX05FWFQ-","no":"bm9fX05FWFQ-","pt":"cHRfX05FWFQ-","ru":"cnVfX05FWFQ-","sl":"c2xfX05FWFQ-","sk":"c2tfX05FWFQ-","fi":"ZmlfX05FWFQ-","sv":"c3ZfX05FWFQ-","tr":"dHJfX05FWFQ-"};window.CLIENT_CONFIG_ID='';});if(window.attachEvent){window.attachEvent("onload",function(){window.loaded=true});}
window.addEvent('load',function(){var isiPad=navigator.userAgent.match(/iPad/i)!=null;if(!isiPad){function preloadnoStartEls(){var i=0,max=0,o=null,array=['http://www.hrsstatic.com/web3/css/wide/mainCompressed.css','http://www.hrsstatic.com/web3/js/hrsCompressedMore-wide.js'],isIE=navigator.appName.indexOf('Microsoft')===0;for(i=0,max=array.length;i<max;i+=1){if(isIE||Browser.chrome){new Image().src=array[i];continue;}
o=document.createElement('object');o.data=array[i];o.width=0;o.height=0;document.body.appendChild(o);}}
var t=setTimeout(function(){preloadnoStartEls()},1000);}});
//]]></script>
<div style="position: absolute; top: -1000em;">
</div>
<ul id="nav" class="en">

<li class="sub ">
<a rel="nofollow" href="" id="mainNav_A_3">
<span id="mainNav_SPAN_3" class="spanSub ">
<span class="hide">menuItem.specials</span>
Theme hotels
</span>
</a>
<ul><li><a rel="nofollow" href=" target="_self">Resorts</a></li>
<li><a rel="nofollow" href="" target="_self">Design</a></li>
<li><a rel="nofollow" href="" target="_self">Golf</a></li>
<li><a rel="nofollow" href="" target="_self">Luxury</a></li>
<li><a rel="nofollow" href="" target="_self">Spa</a></li>
<li><a rel="nofollow" href="" target="_self">Château & Castle Hotels</a></li>
<li><a rel="nofollow" href="" target="_self">Beach</a></li>
<li><a rel="nofollow" href="" target="_self">Hotel chains</a></li></ul>
</li>
<li class="hasSuper sub ">
<a rel="nofollow" href="" id="mainNav_A_4">
<span id="mainNav_SPAN_4" class="spanSub ">
<span class="hide">menuItem.conference</span>
Business travel
</span>
</a>

<ul><li><a rel="nofollow" href="">Business rate</a></li>
<li><a rel="nofollow" href="http://corp3.hrs.de/portal?lang=en" target="_blank">Corporate customer portal</a></li>
<li><a rel="nofollow" href="">Conferences</a></li><li><a rel="nofollow" href="">group travel</a></li></ul>
</li>
<li>
<a rel="nofollow" href="" id="mainNav_A_5">
<span id="mainNav_SPAN_5" class=" ">
<span class="hide">menuItem.group</span>
Groups
</span>
</a>
</li>
<li>
<a rel="nofollow" href="" id="mainNav_A_6">
<span id="mainNav_SPAN_6" class=" changeCancel ">
<span class="hide">menuItem.changeCancel</span>
Change/Cancel
</span>
</a>
</li>
<li class="hasHotline">
<p class="jsHotLine">
<a rel="nofollow" href="" class="jsHotline hotlineInfo">
24/7 customer service<br/>
<span> 0800 0000000</span>
</a>
</p>
</li>
<li class="myhrs     sub " id="isMyhrs">
<a rel="nofollow" href="" id="mainNav_A_7">
<span id="mainNav_SPAN_7" class="spanSub ">
<span class="hide">menuItem.personalized</span>
<span class="hrs_sprite hrs_sprite_myhrs"></span>
<span class="hrs_myhrs_login_text" data-guest_message="Log in to My HRS">
Log in to My HRS
</span>
<span class="hrs_sprite hrs_myhrslogin_right"></span>

</span>
</a>
<ul> <li class="logout hide">
<p>
</p>
<span class="button global"><span>
<a rel="nofollow" href="">Logout</a>
</span></span>
</li>
<li class="login sub">
<form id="loginFlyout" name="profileForm" autocomplete="off" method="post" action="index.php">
<fieldset>
<strong>Login:</strong>
<input type="hidden" name="activity" value="login"/>
<div class="myhrsLoginLabelWrap"><input type="text" name="username" maxlength="90" autocomplete="off" value="" class="text" id="username"/><label for="username">Username</label></div>
<div class="myhrsLoginLabelWrap"><input type="password" name="password" maxlength="64" value="" class="text" id="password"/><label for="password">Password</label></div>
<div class="ie6myHRSFix">
<a rel="nofollow" href="" class="link">Forgotten your login details?</a><br/>
<a rel="nofollow" href="" class="link loginRegister">New here? Go to registration</a>
</div>
<span class="button global"><span>
<input type="submit" id="flyoutSubmitButton" name="submit" value="Login"/>
</span></span>
</fieldset>
</form>
</li>
<li class="loginRegisterPrivate hide"> <a class="hrs_anchor" rel="nofollow" href="Registration.php" class="link loginRegister"><span>New here? Go to registration</span><span class="hrs_sprite hrs_sprite_next">&nbsp;</span></a> </li>

<li><a rel="nofollow" href="">Overview</a></li>
<li><a rel="nofollow" href="">Bookings</a></li>
<li><a rel="nofollow" href="">Favorites</a></li>
<li><a rel="nofollow" href="">Evaluations</a></li>
<li><a rel="nofollow" href="">Personal settings</a></li>
<li><a rel="nofollow" href="">My details</a></li>
<li class="logoutOnly hide">
<a class="hrs_button hrs_button_default" rel="nofollow" href="" onclick="window.omitFormExitTracking=true;window.omitFormInfoCookie=true">Logout</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
<!--[if !IE 6]><!-->
<img width="200" height="63" src="" alt="" class="printLogo"/>
<!--<![endif]-->
<!--[if IE 6]>
								<img width="200" height="63" src="http://www.hrsstatic.com/web3/images/wide/_general/en/logo_hrs_print.png" alt="" class="printLogo" />
							<![endif]-->

<table id="calTab" cellspacing="0">
<tbody id="calBody">
<tr>
<td colspan="7" id="calHead">
<span id="nextM"></span>
<span id="prevM"></span>
<span id="monthHeader"></span>
</td>
</tr>
</tbody>
<tbody id="calFooter">
<tr>
<td colspan="7"><a href="javascript:cleanUpCal()" id="closeLink">close window</a></td>
</tr>
</tbody>
</table>
<div class="row1 " id="jsLoadPics">
<script type="text/javascript">//<![CDATA[
var vorabBelegung='Town, region, address, island, zip code';
//]]></script>
<?php include 'search.php';?>
<div id="stage">
<div class="claim" id="jsCLaim">

<a class="button clearFix jsTrackLinkHPStage delay  " rel="nofollow" title="" target="_blank" href=""> Register now!</a>
</div>

</div>
<div class="setCenter" id="jsStageBox">
 <img src="Image/hourly-hotels.jpg" alt="" width="1130" height="440" id="jsStagePic"/>
</div>


</div>


<script type="text/javascript" src="js/jquery/mmCompressedWide.js"></script>
<div class="tracking">
<script type="text/javascript">//<![CDATA[
display();
//]]></script>

<script language="JavaScript" type="text/javascript" src="js/jquery/s_code.js"></script>

<noscript><iframe name="KeepAlive" src="/web3/keepAlive.do;" marginwidth="1" marginheight="1" height="1" width="1" style="height:1px !important" border="0" frameborder="0"></iframe>
</noscript>
</div>




<link rel="stylesheet" type="text/css" href="css/style.css" />
<br />
<script type="text/javascript" src="../../css/bootstrap.min.css"></script>
<div class="container">
      <!-- Example row of columns -->
      <div class="left">
	  <div class="left-inner">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
		</div>
      </div>
<div class="right">
<div class="right-inner">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
         
		  <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
         </div>
		</div>
      </div>
	  </div>
</body>
</html>
<?php include 'footer.php';?>
