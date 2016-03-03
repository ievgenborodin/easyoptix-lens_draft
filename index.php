<!doctype html>
<html>
<head>
<title>module-base</title>
<!-- jquery -->
<script src="jquery.min.js"></script>
<!-- bootstrap -->

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<style>
/* styles */
body{  }
.main {position: relative; width: 100%; height: auto; }
.optica, .frames { overflow: hidden; height: auto; position: relative; float: left; }
.frame-wrap {width: 100%; }
.frame-wrap > img { display: block; width: 100%; border: 1px solid #fff; }
.frame-wrap > img:hover {border: 1px solid #737373;}

.prescription-block {  }

.lens-button { clear:both; display: block; width: 5%; margin: .5em auto; text-align: center; border-radius: 3px; padding: .3em 1em; border: 1px solid #a9a9a9; } 
.lens-button:hover { border: 1px solid #393939; background-color: #303030; color: #e0e0e0; cursor: pointer;} 

.prescription-table { width: 100%; height: auto;  }
.prescription-row { width: 100%; clear:both; display: inline-block;  }
.prescription-cell { padding: 2px;position: relative; width:16%; height: 2.2em;float: left; text-align: center; }
.prescription-cell .lbl { width: 20%;}
.prescription-cell > span { color: #909090;}
.prescription-header { font-size: 1.6em; color: #303030; text-align: center; }
.prescription-p { font-size: .9em; color: #787878; text-align: center; margin-bottom: 1em;}

.prescription-cell .lbl .empty { min-width: 100%;  }
.prescription-input { display: block; width: 100%; height: 100%; text-align: center; background-color: #f0f0f0; border: none;}

.prescription-terms{ margin-top: 1em;}
.terms-conditions{ padding: .3em; border: 1px solid #e0e0e0;}
.terms-text {width: 100%;  height: 120px; overflow: scroll; overflow-x: hidden;}
.terms-text > h4 { text-align: center; font-size: 1em; font-style: bold; font-weight: 800;}
.terms-text > p { margin:.2em; font-size: .8em;}
.terms-agree { min-width: 70px; } 

.lenstype-block{ display: inline-block; position: relative; width: 100%; height: auto; border: 1px solid #eee; }
.lenstype-col{ position: relative; width: 100%; height: 100%; float: left; border: 1px solid #fff; vertical-align: center; text-align: center; padding: .2em; opacity: .6; }
.lenstype-col > div { margin-top: 1em; margin-bottom:1em; display: block; width: 50%; float: left; }
.lenstype-col > div > span { display: block; width: 100%; clear: both; color: #00f; font-size: .9em;}
.lenstype-col > div > span:before {content: "$";} 
.lenstype-col > img { display: inline-block; height: 5em; }

.lensmaterial-block{ display: inline-block; position: relative; width: 100%; height: auto; border: 1px solid #eee;}
.lensmaterial-col{ position: relative; width: 100%; height: 100%; float: left; border: 1px solid #fff; vertical-align: center; text-align: center; padding: .2em; opacity: .6; }
.lensmaterial-col > div { margin-top: 1em; margin-bottom:1em;display: block; width: 50%; float: left;}
.lensmaterial-col > div > span { display: block; width: 100%; clear: both; color: #00f; font-size: .9em;}
.lensmaterial-col > div > span:before {content: "$";} 
.lensmaterial-col > img { display: inline-block; height: 5em; margin: auto; }
.lens-section-title { text-align: center; padding: 1.2em 0 .3em; color: #787878; font-size: .9em; }
.lens-section-title > h4 { margin-bottom: .1em; color: #303030; }

.lens-marked { background-color: #a3ea9d; /*color: #e0e0e0;*/ opacity: 1 !important;}
.lens-marked span { }

.lensaddons-block{position: relative; width: 100%; height: auto; display:inline-block; }

.antireflaction-block{ display: inline-block; position: relative; width: 100%; height: auto; border: 1px solid #eee; }
.lensreflaction-logo{ position: relative; width: 25%; height: 100%; float: left; padding: .2em; opacity: 1; }
.lensreflaction-logo > img { display: block; width: 100%; }
.lensreflaction-col{ position: relative; width: 25%; height: auto; float: left; border: 1px solid #fff; vertical-align: center; text-align: center; padding: .2em; opacity: .6; }
.lensreflaction-col > div { margin: 25% 10%; display: block; width: 80%;   float: left; }
.lensreflaction-col > div > span { display: block; width: 100%; clear: both; color: #00f; font-size: .9em;}
.lensreflaction-col > div > span:before {content: "$";} 

.transition-block{ display: inline-block; position: relative; width: 100%; height: auto; border: 1px solid #eee; }
.lenstransition-col{ position: relative; width: 20%; height: auto; float: left; border: 1px solid #fff; vertical-align: center; text-align: center; padding: .2em; opacity: .6; }
.lenstransition-logo{ position: relative; width: 20%; height: 100%; float: left; padding: .2em; opacity: 1; }
.lenstransition-logo > img { display: block; width: 100%; }
.lenstransition-col > div { margin: 25% 10%; display: block; width: 80%;  float: left; }
.lenstransition-col > div > span { display: block; width: 100%; clear: both; color: #00f; font-size: .9em;}
.lenstransition-col > div > span:before {content: "$";} 

.lenstype-col:hover,
.lensmaterial-col:hover,
.lensreflaction-col:hover,
.lenstransition-col:hover { opacity: 1; cursor: pointer; }

.addtocart-block { width: 100%; padding: .5em; border: 1px solid #eee; border-top: none; margin-bottom: 20px;}
.btn-to-cart { min-width: 120px; }

.frame-selected { /*border: 1px solid #0f0;*/}
.frame-selected > img { border: 1px solid #0f0; }
.has-selected-frame {}
.no-max-height { max-height: none !important; }

.cart-wrap{ width: 100%; overflow: hidden; height: auto; display: inline-block; }
.cart{ width: 10%; min-width: 270px; padding: 1em; border: 1px solid #eee; float: none; display: block; margin: 1em auto; }
.cart-icon > i { display: block; font-size: 3em; text-align: center; margin-bottom: .3em;}

.cart-row { clear: both; }
.cart-row-title,
.cart-lensreflection-name,
.cart-lenstransition-name { color: #707070; font-style: italic; }
.cart-row-price:before { content: ": $"; }

.cart-frame-name:before { content: "Frame - "; font-weight:600; color: #303030;}
.cart-lenstype-name:before { content: "Lens Type - "; font-weight:600;color: #303030;}
.cart-lensmaterial-name:before { content: "Lens Thickness - "; font-weight:600;color: #303030;}
.cart-lensreflection-name:before { content: "Anti-Reflective "; font-weight:600;color: #303030;}
.cart-lenstransition-name:before { content: "Transition "; font-weight:600;color: #303030;}
.cart b { color: #303030; }

.recommended-wrap{ position: absolute; right:0; top:0;}
.recommended { position: relative; display:inline-block; width: 100px; height: 100px; }
.recommended > img{ display: block; width: 100%;}

.compare-wrap{ position: absolute; right:3px; top:3px;}
.compare { position: relative; display:inline-block; width: 30px; height: 30px; border-radius: 50%; background-color: #333; text-align: center; }
.compare > i{ font-size: 16px; margin-top: 8px; display: block; width: 100%; color: #eee;}
/*.cmessage {position: absolute; left: 0; top: 0; width: 100vw; height: 100vh; background: #eee; display: none;  }*/
.compare:hover { cursor:pointer; }

.dark-wrapper { display:none; position:absolute; left:0;top:0; width:100vw; height: 100vh; }
.dark { position: relative; width: 100%; height: 100%; background-color: #aaa; opacity: .6; }
.imagination { position: absolute; left: 25%; top: 25%; width: 50%; height: 50%; /*background-color: #131;*/ }
.imagination > img { }

@media only screen and (max-width: 367px) {
	.frames { width: 100%; }
	.frame-wrap {width: 100%; }
	.optica { width: 100%; }
}
@media only screen and (min-width: 368px) and (max-width: 767px) {
	.frame-wrap { width: 50%; float: left; }
}
@media only screen and (max-width: 767px) {
	.frames { width: 100%; }
	.optica { width: 100%; max-height: 0px; }
	.cart-wrap { max-height: 0px; }
	.has-selected-frame > .frame-wrap { display:none; }
	.has-selected-frame > .frame-selected { width: 100%; display: block; }
}
@media only screen and (min-width: 768px) {
	.main {padding: 1em; } 
	.frames { width: 42%; padding-right: 2em;  }
	.optica { width: 42%; padding: 1em; max-height: none;  }
	.cart-wrap { max-height: none; float: left; width: 16%; }
}
@media only screen and (min-width: 992px) {
	.main {padding: 1em; } 
	.frames { width: 32%; padding-right: 1em;  }
	.optica { width: 47%; padding: 1em; max-height: none;  }
	.cart-wrap { width: 21%; max-height: none; float: left;  padding: 0;}
	.cart { font-size: .9em; min-width: 212px; }
	.cart ul { padding-left: 20px; }
}
@media only screen and (min-width: 1200px) {
	.lensmaterial-block{ width: 100%; }
	.lensmaterial-block .lens-section-title { margin-bottom: 1em; }
	.lensmaterial-col{ width: 20%; height: 100%; padding: .2em; }
	.lensmaterial-col > div { margin-bottom: 0; display: block; width: 100%; min-height: 4em;float: none;}
	.lensmaterial-col > div > span { width: 100%; font-size: .9em;}
	.lensmaterial-col > img { width: 100%; max-width: 110px; height: auto; }

	.lenstype-block{ width: 100%; }
	.lenstype-block .lens-section-title { margin-bottom: 1em; }
	.lenstype-col{ width: 33.3333333%; height: 100%; padding: .2em; }
	.lenstype-col > div { margin-top: 2em; display: block; width: 50%; min-height: 4em;float: left;}
	.lenstype-col > div > span { width: 100%; font-size: .9em;}
	.lenstype-col > img { width: 50%; max-width: 110px; height: auto; }

	.frame-wrap { width: 50%; float: left;}
/*	.frame-wrap { width: 33.3333333%; float: left;}*/
}
</style>
</head>
<body>
<!-- html -->

<div class="main">

	<div class="frames">
		<div data-name="Ray-Ban RX5184" data-price="139.40" class="frame-wrap">
			<img src="draft-img/glasses-imgs/1.jpg">
		</div>
		<div data-name="Ray-Ban RX5228" data-price="139.40" class="frame-wrap">
			<img src="draft-img/glasses-imgs/2.jpg">
		</div>
		<div data-name="Gucci GG1008" data-price="223.25" class="frame-wrap">
			<img src="draft-img/glasses-imgs/3.jpg">
		</div>
		<div data-name="Ray-Ban RX5154" data-price="139.40" class="frame-wrap">
			<img src="draft-img/glasses-imgs/4.jpg">
		</div>
		<div data-name="Oakley Airdrop Eyeglasses" data-price="160" class="frame-wrap">
			<img src="draft-img/glasses-imgs/5.jpg">
		</div>
		<div data-name="Ray-Ban RX5184" data-price="139.40" class="frame-wrap">
			<img src="draft-img/glasses-imgs/1.jpg">
		</div>
		<div data-name="Gucci GG1008" data-price="223.25" class="frame-wrap">
			<img src="draft-img/glasses-imgs/3.jpg">
		</div>
		<div data-name="Ray-Ban RX5228" data-price="139.40" class="frame-wrap">
			<img src="draft-img/glasses-imgs/2.jpg">
		</div>
		<div data-name="Oakley Airdrop Eyeglasses" data-price="160" class="frame-wrap">
			<img src="draft-img/glasses-imgs/5.jpg">
		</div>
	</div>

	<div class="optica">
		<div class="prescription-block">
		<info class="compare-wrap"><div class="compare"><i class="fa fa-question"></i></div></info>
		<div class="prescription-table">
			<div class="prescription-row">
				<div class="prescription-header">
					Prescription
				</div>
				<div class="prescription-p">
					Please enter your prescription to help us to serve you better.
				</div>
			</div>

			<div class="prescription-row">
				<div class="prescription-cell lbl empty"></div>
				<div class="prescription-cell">
					<span>Sphere</span>
				</div>
				<div class="prescription-cell">
					<span>Cylinder</span>
				</div>
				<div class="prescription-cell">
					<span>Axis</span>
				</div>
				<div class="prescription-cell">
					<span>Prism</span>
				</div>
				<div class="prescription-cell">
					<span>Add</span>
				</div>
			</div>

			<div class="prescription-row">
				<div class="prescription-cell lbl">
					<span>Right (OD)</span>
				</div>
				<div class="prescription-cell">
					<input class="prescription-input" type="text">
				</div>
				<div class="prescription-cell">
					<input class="prescription-input" type="text">
				</div>
				<div class="prescription-cell">
					<input class="prescription-input" type="text">
				</div>
				<div class="prescription-cell">
					<input class="prescription-input" type="text">
				</div>
				<div class="prescription-cell">
					<input class="prescription-input" type="text">
				</div>
			</div>

			<div class="prescription-row">
				<div class="prescription-cell lbl">
					<span>Left (OS)</span>
				</div>
				<div class="prescription-cell">
					<input class="prescription-input" type="text">
				</div>
				<div class="prescription-cell">
					<input class="prescription-input" type="text">
				</div>
				<div class="prescription-cell">
					<input class="prescription-input" type="text">
				</div>
				<div class="prescription-cell">
					<input class="prescription-input" type="text">
				</div>
				<div class="prescription-cell">
					<input class="prescription-input" type="text">
				</div>
			</div>
		</div>
		<div class="prescription-terms">
			<div class="terms-conditions">
				<div class="terms-text">
<h4>					Terms and conditions</h4>
<h4>1.	Introduction</h4>
<p>1.1	These terms and conditions shall govern your use of our website.</p>
<p>1.2	By using our website, you accept these terms and conditions in full; accordingly, if you disagree with these terms and conditions or any part of these terms and conditions, you must not use our website.</p>
<p>1.3	If you [register with our website, submit any material to our website or use any of our website services], we will ask you to expressly agree to these terms and conditions.</p>
<p>1.4	You must be at least [18] years of age to use our website; and by using our website or agreeing to these terms and conditions, you warrant and represent to us that you are at least [18] years of age.</p>
<p>1.5	Our website uses cookies; by using our website or agreeing to these terms and conditions, you consent to our use of cookies in accordance with the terms of our [privacy and cookies policy].</p>
<h4>2.	Credit</h4>
<p>2.1	This document was created using a template from SEQ Legal (http://www.seqlegal.com).</p>
<p>You must retain the above credit, unless you purchase a licence to use this document without the credit. You can purchase a licence at: http://www.website-contracts.co.uk/seqlegal-licences.html. Warning: use of this document without the credit, or without purchasing a licence, is an infringement of copyright.</p>
<h4>3.	Copyright notice</h4>
<p>3.1	Copyright (c) [year(s) of first publication] [full name].</p>
<p>3.2	Subject to the express provisions of these terms and conditions:
(a)	we, together with our licensors, own and control all the copyright and other intellectual property rights in our website and the material on our website; and
(b)	all the copyright and other intellectual property rights in our website and the material on our website are reserved.</p>
<h4>4.	Licence to use website</h4>
<p>4.1	You may:</p>
<p>(a)	view pages from our website in a web browser;</p>
<p>(b)	download pages from our website for caching in a web browser;</p>
<p>(c)	print pages from our website;</p>
<p>(d)	[stream audio and video files from our website; and]</p>
<p>(e)	[use [our website services] by means of a web browser,]</p>
<p>subject to the other provisions of these terms and conditions.</p>
<p>4.2	Except as expressly permitted by Section 4.1 or the other provisions of these terms and conditions, you must not download any material from our website or save any such material to your computer.</p>
<p>4.3	You may only use our website for [your own personal and business purposes], and you must not use our website for any other purposes.</p>
<p>4.4	Except as expressly permitted by these terms and conditions, you must not edit or otherwise modify any material on our website.</p>
<p>4.5	Unless you own or control the relevant rights in the material, you must not:
<p>(a)	republish material from our website (including republication on another website);</p>
</p>(b)	sell, rent or sub-license material from our website;
(c)	show any material from our website in public;
(d)	exploit material from our website for a commercial purpose; or
(e)	redistribute material from our website.
4.6	Notwithstanding Section 4.5, you may redistribute [our newsletter] in [print and electronic form] to [any person].
4.7	We reserve the right to restrict access to areas of our website, or indeed our whole website, at our discretion; you must not circumvent or bypass, or attempt to circumvent or bypass, any access restriction measures on our website.
<h4>5.	Acceptable use</h4>
<p>5.1	You must not:
(a)	use our website in any way or take any action that causes, or may cause, damage to the website or impairment of the performance, availability or accessibility of the website;</p>
<p>(b)	use our website in any way that is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity;</p>
<p>(c)	use our website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software;</p>
<p>(d)	conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to our website without our express written consent;</p>
(e)	[access or otherwise interact with our website using any robot, spider or other automated means;]
(f)	[violate the directives set out in the robots.txt file for our website; or]
(g)	[use data collected from our website for any direct marketing activity (including without limitation email marketing, SMS marketing, telemarketing and direct mailing).]
<p>5.2	You must not use data collected from our website to contact individuals, companies or other persons or entities.</p>
<p>5.3	You must ensure that all the information you supply to us through our website, or in relation to our website, is [true, accurate, current, complete and non-misleading].</p>
				</div>
				<div class="lens-button terms-agree">
					Agree
				</div>
			</div>
		</div>
	</div>

	<div class="lenstype-block">
		<info class="compare-wrap"><div class="compare"><i class="fa fa-question"></i></div></info>
		<div class="lens-section-title">
			<h4>Lens Type</h4>
			Choose the lens type
		</div>
		<div data-index="0" class="lenstype-col">
			<absol class="recommended-wrap"><div class="recommended"><img class="recommended-img" src="draft-img/recommended.png"></div></absol>
			<div class="lenstype-title">
				<name>Single vision</name>
				<span>39.00</span>
			</div>
			<img class="lens-img" src="draft-img/type/SingleVision.png">
		</div>
		<div data-index="1" class="lenstype-col">
			<div class="lenstype-title">
				<name>Bifocals</name>
				<span>69.00</span>
			</div>
			<img class="lens-img" src="draft-img/type/Bifocal.png">
		</div>
		<div data-index="2" class="lenstype-col">
			<div class="lenstype-title">
				<name>Progressive</name>
				<span>99.00</span>
			</div>
			<img class="lens-img" src="draft-img/type/Progressives.png">
		</div>
	</div>

	<div class="lensmaterial-block">
		<info class="compare-wrap"><div class="compare"><i class="fa fa-question"></i></div></info>
		<div class="lens-section-title">
			<h4>Lens Material</h4>
			Choose the material for your lens
		</div>
		<div data-index="0" class="lensmaterial-col">
			<div class="lensmaterial-title">
				<name>Plastic (CR-39)</name>
				<span>39.00</span>
			</div>
			<img class="lens-img" src="draft-img/material/Plastic.png">
		</div>
		<div data-index="1" class="lensmaterial-col">
			<div class="lensmaterial-title">
				<name>Thin (Polycarbonate)</name>
				<span>69.00</span>
			</div>
			<img class="lens-img" src="draft-img/material/Polycarbonate.png">
		</div>
		<div data-index="2" class="lensmaterial-col">
			<absol class="recommended-wrap"><div class="recommended"><img class="recommended-img" src="draft-img/recommended.png"></div></absol>
			<div class="lensmaterial-title">
				<name>Thinner (hindex 1.67)</name>
				<span>99.00</span>
			</div>
			<img class="lens-img" src="draft-img/material/ThinnerHiIndex167.png">
		</div>
		<div data-index="3" class="lensmaterial-col">
			<absol class="recommended-wrap"><div class="recommended"><img class="recommended-img" src="draft-img/recommended.png"></div></absol>
			<div class="lensmaterial-title">
				<name>Thinnest (hindex 1.74)</name>
				<span>189.00</span>
			</div>
			<img class="lens-img" src="draft-img/material/ThinnestHiIndex174.png">
		</div>
		<div data-index="4" class="lensmaterial-col">
			<div class="lensmaterial-title">
				<name>Thinnest Cryzal (hindex 1.74)</name>
				<span>229.00</span>
			</div>
			<img class="lens-img" src="draft-img/material/ThinnestHiIndex174.png">
		</div>
	</div>

	<div class="lensaddons-block">

		<div class="antireflaction-block">
			<info class="compare-wrap"><div class="compare"><i class="fa fa-question"></i></div></info>
			<div class="lens-section-title">
				<h4>Lens Anti-Reflaction</h4>
				Add anti-reflaction to lens
			</div>
			<div class="lensreflaction-logo">
				<img class="lens-img" src="draft-img/adds/AntiReflective.jpg">
			</div>
			<div data-index="0" class="lensreflaction-col lens-marked">
				<div class="lensreflaction-title">
					<name>None</name>
					<span>0</span>
				</div>
			</div>
			<div data-index="1" class="lensreflaction-col">
				<div class="lensreflaction-title">
					<name>Generic</name>
					<span>39.00</span>
				</div>
			</div>
			<div data-index="2" class="lensreflaction-col">
				<div class="lensreflaction-title">
					<name>Premium</name>
					<span>69.00</span>
				</div>
			</div>
		</div>

		<div class="transition-block">
			<info class="compare-wrap"><div class="compare"><i class="fa fa-question"></i></div></info>
			<div class="lens-section-title">
				<h4>Lens Transition</h4>
				Add transition or polarization to lens
			</div>
			<div class="lenstransition-logo">
				<img class="lens-img" src="draft-img/adds/TransitionsMen.jpg">
			</div>
			<div data-index="0" class="lenstransition-col lens-marked">
				<div class="lenstransition-title">
					<name>None</name>
					<span>0</span>
				</div>
			</div>
			<div data-index="1" class="lenstransition-col">
				<absol class="recommended-wrap"><div class="recommended"><img class="recommended-img" src="draft-img/recommended.png"></div></absol>
				<div class="lenstransition-title">
					<name>Grey</name>
					<span>69.00</span>
				</div>
			</div>
			<div data-index="2" class="lenstransition-col">
				<div class="lenstransition-title">
					<name>Brown</name>
					<span>69.00</span>
				</div>
			</div>
			<div data-index="3" class="lenstransition-col">
				<div class="lenstransition-title">
					<name>Polarized</name>
					<span>99.00</span>
				</div>
			</div>
		</div>

		<div class="addtocart-block">
			<div class="lens-button btn-to-cart">Add to cart</div>
		</div>
	</div> 

	</div>


	<div class="cart-wrap">
		<div class="cart">
			<div class="cart-row cart-icon">
				<i class="fa fa-shopping-cart"></i>
			</div>
			<div class="cart-row">
				<span class="cart-row-title cart-frame-name">Ray-Ban</span>
				<span class="cart-row-price cart-frame-price">0</span>
			</div>
			<div class="cart-row">
				<span class="cart-row-title cart-lenstype-name">Single Vision</span>
				<span class="cart-row-price cart-lenstype-price">0</span>
			</div>
			<div class="cart-row">
				<span class="cart-row-title cart-lensmaterial-name">Basic</span>
				<span class="cart-row-price cart-lensmaterial-price">0</span>
			</div>
			<div class="cart-row">
				<div class="cart-row-title cart-lensprotection-name">
					<b>Eye & Lens Protection:</b>
				</div>
				<div class="cart-lensprotection-ul">
					<ul>
						<li>
							<span class="cart-lensreflection-name">None</span>
							<span class="cart-row-price cart-lensreflection-price">0</span>
						</li>
						<li>
							<span class="cart-lenstransition-name">None</span>
							<span class="cart-row-price cart-lenstransition-price">0</span>
						</li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="cart-row">
				<span class="cart-total-name"><b>Total</b></span>
				<span class="cart-row-price cart-total-price">0</span>
			</div>
		</div>
	</div>

	<div class="dark-wrapper">
		<div class="dark"></div>
		<div class="imagination">
			<img src="draft-img/compared/reflection.jpg">
		</div>
	</div>
</div>

<script>
/* javascript */
var lensMatCols = jQuery('.lensmaterial-col'),
		lensTypeCols = jQuery('.lenstype-col'),
		lensTransitionCols = jQuery('.lenstransition-col'),
		lensAntiReflectionCols = jQuery('.lensreflaction-col'),
		frameArr = jQuery('.frame-wrap'),
		frames = jQuery('.frames'),
		optica = jQuery('.optica'),
		cart = jQuery('.cart-wrap'),

		p_frame = 0,
		p_ltype = 0,
		p_lmaterial = 0,
		p_ltransition = 0,
		p_lreflaction = 0,
		p_total = 0,

		n_frame = '',
		n_ltype = '',
		n_lmaterial = '',
		n_ltransition = '',
		n_lreflaction = '',
		
		cart_p_frame = jQuery('.cart-frame-price'),
		cart_p_ltype = jQuery('.cart-lenstype-price'),
		cart_p_lmaterial = jQuery('.cart-lensmaterial-price'),
		cart_p_ltransition = jQuery('.cart-lenstransition-price'),
		cart_p_lreflaction = jQuery('.cart-lensreflection-price'),
		cart_p_total = jQuery('.cart-total-price'),

		cart_n_frame = jQuery('.cart-frame-name'),
		cart_n_ltype = jQuery('.cart-lenstype-name'),
		cart_n_lmaterial = jQuery('.cart-lensmaterial-name'),
		cart_n_ltransition = jQuery('.cart-lenstransition-name'),
		cart_n_lreflaction = jQuery('.cart-lensreflection-name'),

		darkie = jQuery('.dark-wrapper'),
		infos = jQuery('.compare');

		imgReflection = new Image();
		imgReflection.src = 'draft-img/compared/reflection.jpg';

		console.log(imgReflection);
function resetPrice(){
	p_frame = 0;
	p_ltype = 0;
	p_lmaterial = 0;
	p_ltransition = 0;
	p_lreflaction = 0;
	p_total = 0;
};

infos.on('click', function(e){
	//console.log(darkie.getBoundingClientRect());
	darkie.css('display', 'block');
});

darkie.on('click', function (e){
	jQuery(this).css('display', 'none');
});

frameArr.on('click', function(e){
	var that = jQuery(this), tmp;
	tmp = (that.hasClass('frame-selected')) ? false : true; 
	frameArr.removeClass('frame-selected');
	if (tmp) {
		p_frame = +that.data('price');
		n_frame = that.data('name');
		that.addClass('frame-selected') 
		frames.addClass('has-selected-frame');
		optica.addClass('no-max-height');
		cart.addClass('no-max-height');
	} else { 
		frames.removeClass('has-selected-frame');
		optica.removeClass('no-max-height');
		cart.removeClass('no-max-height');
	};
});

lensTypeCols.on('click', function(e){
	var that = jQuery(this);
	lensTypeCols.removeClass('lens-marked');
	that.addClass('lens-marked');
	p_ltype = +(that.find('span').html());
	n_ltype = that.find('name').html();
});

lensMatCols.on('click', function(e){
	var that = jQuery(this);
	lensMatCols.removeClass('lens-marked');
	that.addClass('lens-marked');
	p_lmaterial = +(that.find('span').html());
	n_lmaterial = that.find('name').html();
});

lensTransitionCols.on('click', function(e){
	var that = jQuery(this);
	lensTransitionCols.removeClass('lens-marked');
	that.addClass('lens-marked');
	p_ltransition = +(that.find('span').html());
	n_ltransition = that.find('name').html();
});

lensAntiReflectionCols.on('click', function(e){
	var that = jQuery(this);
	lensAntiReflectionCols.removeClass('lens-marked');
	that.addClass('lens-marked');
	p_lreflaction = +(that.find('span').html());
	n_lreflaction = that.find('name').html();
});

jQuery('.btn-to-cart').on('click', function(e){
	p_total = p_frame + p_ltype + p_lmaterial + p_ltransition + p_lreflaction;
	cart_p_frame.html(p_frame);
	cart_p_ltype.html(p_ltype);
	cart_p_lmaterial.html(p_lmaterial);
	cart_p_ltransition.html(p_ltransition);
	cart_p_lreflaction.html(p_lreflaction);
	cart_p_total.html(p_total);

	cart_n_frame.html(n_frame);
	cart_n_ltype.html(n_ltype);
	cart_n_lmaterial.html(n_lmaterial);
	cart_n_ltransition.html(n_ltransition);
	cart_n_lreflaction.html(n_lreflaction);
});

</script>
</body>
