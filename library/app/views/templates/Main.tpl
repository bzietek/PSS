<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]> <html class=""> <![endif]-->
<head>
	<meta charset="utf-8">
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Biblioteka</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{url action="assets/css/whhg.css"}" />
	<link rel="stylesheet" href="{url action="assets/css/grid.css"}">
	<link rel="stylesheet" href="{url action="assets/css/styles.css"}">

	<!-- TODO: uncomment skin styles.
	     Note, you can use another skin found in the "css" folder, or create your own one -->
	 <link rel="stylesheet" href="css/skin-dark.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->

	<link rel="icon" type="image/png" href="assets/images/favicon.png">
	<link rel="apple-touch-icon" href="{url action="assets/css/styles.css"}"href="assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

</head>
<body>

	<!--  LOGOTYPE LINE  -->
	<!--  TODO: Change domain name and call to action message below -->
	<div id="Head" class="container">
		<div class="row">
			<div class="col span_16">
				<h1 id="Domain">Biblioteka Zawiercie<br>
					<span>Największy wybór książek w mieście</span></h1>
			</div>

		</div>
	</div>
	<!-- END OF LOGOTYPE LINE  -->


	<!--  STATS LINE  -->
	<!--  TODO: enter your domain's stats below -->
	<!--  If you need a different number of columns here, please use:
	         - <div class="col span_24"> for 1 column
	         - <div class="col span_12"> for 2 columns
	         - <div class="col span_8"> for 3 columns
	         - <div class="col span_6"> for 4 columns
	         - <div class="col span_3"> for 8 columns
	-->
	<!--
	      If you don't have such data or want to use this area as a text block, feel free to replace
	      all <div class="col span_4">...</div> by a single <div class="col span_24"> - your text message - </div>
	-->



	<!-- CONTENT -->
	<!-- TODO: Change content in the rows/columns below
	     Please note, 24-columns grid is used in the template, so you can reorder the blocks
	     to make, for example, 2-columns layout (use a pair of col span_12) or 4-column one
	     (use 4 copies of col span_6) -->
	<div id="Content" class="container">
		<div class="row special">
			<div class="col span_24">
				<h3 class="align-center">Właściwym celem książek jest zmusić umysł, żeby myślał po swojemu    <br>Cecil Morley</h3>
			</div>
		</div>



		<div class="row padding">
			<div class="col span_8">



			</div>
		{block name="main"}{/block}
			<div class="col span 7">
				<ul class="errors">
					{foreach $msgs->getMessages() as $msg}
						{strip}
							<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
						{/strip}
					{/foreach}
				</ul>
			</div>
	<!-- END OF CONTENT -->

	</div> <!-- end of row -->
	</div>
	<div id="Content-end" class="container"></div>

	<div id="Add" class="container">
		<div class="padding">

			<div class="row" id="Add-domains">
				<div class="col span_24">
					<ul>
						<li><a href="https://github.com/bzietek/" class="title">Github</a><i></i></span></li>
						<li><a href="https://amelia-framework.eu/" class="title">Amelia</a></li>
						<li><a href="https://github.com/pozh/" class="title">Autor Szablonu</a><span class="action"><i></i></li>
					</ul>


				</div>
			</div>
		</div>
		<hr>
	</div>


	<div id="Footer" class="container">
		<div class="row top">
			<div class="col span_16">Copyright &copy; 2014, Domain holder. All rights reserved.</div>
			<div class="col span_8 align-right">Design: <a href="http://www.gettemplate.com/">GetTemplate</a></div>
		</div>
	</div>

<!-- TODO: In order to track visits, insert google analytics code here -->


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>