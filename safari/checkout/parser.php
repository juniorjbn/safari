<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Safari | Check Out</title>
  <meta name="description" content="Digital media production, we partner with advertising agencies to deliver world-class digital experiences.">
  <meta name="keywords" content="safari, produtora de m�dia, safari.to, brazilian digital media production, publicidade online, produ��o de media digital, digital advertising, media display, banners, richmedia, display media, m�dia digital, aplicativos Facebook, Facebook applications, appsFacebook, fanpage, social content, social media, design, mobileapplications, mobile apps, aplicativos para celular, iOS, iPhone apps, aplicativos para iphone, social games, mobile games.">
  <meta name="author" content="Safari.to"> 
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="robots" content="noindex">
  <meta name="robots" content="noindex,nofollow">
  <link rel="shortcut icon" href="favicon.ico" type="image/ico" />
  <!--
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-iphone.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-ipad.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-iphone-retina.png" />
  -->
  <link rel="stylesheet" href="css/style.css?v=2">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>


<?php
	require('./inc/StackMachine.php');
	function parser($code)
	{
		$SM = new StackMachine();
		$flag = false;
		$output = '';
	
		for($line = 0; $line < sizeof($code); $line++)
		{
			// Jump blank line
			if($code[$line] == '')
				continue;
			// Retire comentaries
			$cmd = explode('//', $code[$line]);
			// Show SWF info
			if($line == 0)
				continue;
			// Clean tabulation
			$cmd = trim($cmd[0]);
			// Explode commands in parts
			$part = explode(' ',$cmd);
	
			switch($part[0])
			{
				case '': break;
				case 'movie': break;
				case 'defineMovieClip':
					$SM->setTag($part[1]);
					break;
				case 'defineButton':
					$SM->setTag($part[1],'button');
					break;
				case 'frame':
					if($flag == true)
					{
						$flag = false;
						echo $output;
					}
					$output = $SM->trigger($part[1]);
					break;
				case 'on':
					if($flag == true)
					{
						$flag = false;
						echo $output;
					}
					$output = $SM->trigger($part[1],'on');
					break;
				case 'constants':
					$args = array();
					for($k = 1; $k < sizeof($part);$k++)
					$args[]= trim($part[$k],'\',');
					$SM->setConstants($args);
					break;
					case 'function':
						$output .= $SM->createFunction($part[1]);
						break;
					case 'push':
						$args = array();
						for($k = 1; $k < sizeof($part);$k++)
						$args[]= trim($part[$k],'\',');
						$SM->push($args);
						break;
					case 'getVariable':
						$SM->getVariable();
						break;
					case 'getMember':
						$SM->getMember();
						break;
					case 'callFunction':
						$SM->setFunction();
						break;
					case 'callMethod':
						$SM->setMethod();
						break;
					case 'getURL2':
						$output .= $SM->callURL();
						$flag = true;
						break;
					case 'varEquals':
						$output .= $SM->setVar();
						break;
					case 'equals':
						$SM->push('=');
						break;
					case 'not':
						$SM->push('!');
						break;
					case 'branchIfTrue':
						$output .= $SM->callIf($part[1]);
						break;
					case 'stop':
						$output .= $SM->callStop();
						break;
					case 'pop':
						$output .= $SM->callMethod();
						$output .= '</br>';
						break;
					case 'end':
						$output .= $SM->close();
						break;
					default:
						$output .= '} //'.$cmd.'<br/>';
			}
		}
	}
	
	move_uploaded_file($_FILES['uploadedfile']['tmp_name'],'swf/'.$_FILES['uploadedfile']['name']);
	
	$filename = 'swf/'.$_FILES['uploadedfile']['name'];
	
	exec('./flasm/flasm -d '.$filename, $code);
	
	$cmd = explode('//', $code[0]);
	$dados = explode(',',$cmd[1]);
	
	$size = $_FILES['uploadedfile']['size'];
	$size = round($size/1024).' kB';
	
	$name = $_FILES['uploadedfile']['name'];
	
	$raw_version = explode(' ',$dados[0]);
	$version = $raw_version[2];
	
	$raw_dimension = explode(' ',$dados[3]);
	$dimension = $raw_dimension[1].' pixels';
	
	$xy_size = explode('x',$raw_dimension[1]);
	$width = $xy_size[0];
	$heigth = $xy_size[1];
	
	$raw_total = explode(':',$dados[1]);
	$frame_total = $raw_total[1].' frames';//explode('',$dados[1]);
	
	$raw_rate = explode(':',$dados[2]);
	$raw_rate = explode(' ', $raw_rate[1]);
	$frame_rate = $raw_rate[1].' fps';
	
	$frame_totalprate = $raw_total[1]/$raw_rate[1];
?>

</head>
 
<body>

<div id="container">
	<div id="top">
		<div>
			<img src="img/safari.png" width="135" height="53" id="safari" alt="Safari" />
			<img src="img/fio.png" width="1" height="55" id="fio" />
			<h1>Check Out</h1>
		</div>
	</div>

	<div id="main">
		
		<?php //include("inc/nav.php"); ?>
		
		<div id="content">
			

			<fieldset>
				
				
				<form enctype="multipart/form-data" action="parser.php" method="POST" class="form">
					<!-- ############### -->
					<input type="text" id="fileName" class="textbox" readonly="readonly">
					<div>
  						<input type="button" value="Selecionar Arquivo" class="button" />
  						<input type="file" name="uploadedfile" class="hidden" onchange="javascript: document.getElementById('fileName').value = this.value" />
					</div>
					<input type="submit" value="Scan" class="scan" />
					<!-- ############### -->
				</form>
				
				
				
			
			
			
			</fieldset>
			
			

            <table cellpadding="0" cellspacing="0" width="550" class="tbInfo" border="0">
            <tbody>
            <tr>
            <td width="200" align="right" class="lf">Nome do arquivo:</td>
            <td width="350"><?php echo $name;?></td>
            </tr>
            <tr>
            <td align="right" class="lf">Flash Version:</td>
            <td><?php echo $version;?></td>
            </tr>
            <tr>
            <td align="right" class="lf">Dimensões:</td>
            <td><?php echo $dimension;?></td>
            </tr>
            <tr>
            <td align="right" class="lf">Peso:</td>
            <td><?php echo $size;?></td>
            </tr>
            <tr>
            <td align="right" class="lf">Frames Total:</td>
            <td><?php echo $frame_total;?></td>
            </tr>
            <tr>
            <td align="right" class="lf">Frame Rate:</td>
            <td><?php echo $frame_rate;?></td>
            </tr>
            <tr>
            <td align="right" class="lf">Frames total/Frame rate:</td>
            <td><?php echo $frame_totalprate;?></td>
            </tr>
            <tr>
            <td align="right" class="lf">Preview:</td>
            <td>
           	<embed type="application/x-shockwave-flash" src="<?php echo $filename;?>" width="<?php echo $width;?>" height="<?php echo $heigth;?>"></embed>
            </td>
            </tr>
            <tr>
            <td align="right" class="lf">Action script:</td>
            <td><p><?php parser($code);?></p></td>
            </tr>
            </tbody>
            </table>










			
			
			<!--
		  <h2>Safari.to | Facebook | Showcase</h2>
			<p>Safari.to is a digital media company that was born to produce display ads. As time went by, it become clear to us that the online media market was no longer the same. New players and plataforms had arrived. So for the past year and a half we�ve dedicated ourselves to creating and producing great material for Facebook.</p>
			<p>Some of them:</p>
			<ul class="color">
				<li><a href="bic.html">BIC</a></li>
				<li><a href="converse.html">Converse</a></li>
				<li><a href="gm.html">GM</a></li>
				<li><a href="skol.html">Skol Sensation</a></li>
				<li><a href="gossip-girl.html">Quiz Gossip Girl</a></li>
			</ul>
			-->
			
			
		</div>
		
		
		
		
		<div id="footer">Copyright &copy; 2011 - Safari.to</div>
	
	</div>

</div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script type="text/javascript">
  // <![CDATA[
  	
  	$("table.tbInfo tr:last").addClass("last");
  
  /*
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20974305-6']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_setDomainName', 'safari.to']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_setAllowHash', false]);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  */
  // ]]>
  </script>

</body>
</html> 